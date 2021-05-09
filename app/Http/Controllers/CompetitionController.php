<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Competition;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompetitionController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function createCompetition(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'categories' => 'array|min:1',
            'tools' => 'array',
            'description' => 'required',
            'update' => 'boolean',
            'published' => 'boolean',
            'id' => 'required_if:update,true|integer',
            'thumbnail_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user' => 'required|integer'
        ]);
        $competition = new Competition();
        $imageName = '';
        if ($request->hasFile('thumbnail_image')) {
            $imageName = str_replace(' ', '', $request->image->getClientOriginalName());
            $request->image->move(public_path('competitions/thumbnails'), $imageName);
        }

        $attach_categories = array_map('intval', explode(',', $request->categories[0]));
        $attach_tools = array_map('intval', explode(',', $request->tools[0]));
        $message = "Competition Created Successfully 😃";
        if ($request->update) {
            $message = "Competition Updated Successfully 😃";
            $competition = Competition::find($request->id);
            // Make updated category list
            $existing_categories = $competition->categories()->get();
            $detach_categories = [];
            foreach ($existing_categories as $key => $cat) {
                // Detach unselected categories
                // Only attach non-existing categories in the selected list
                if (!in_array($cat->id, $attach_categories)) {
                    $detach_categories[$key] = $cat->id;
                } else {
                    if (($index = array_search($cat->id, $attach_categories)) !== false) {
                        unset($attach_categories[$index]);
                        // $attach_categories = array_values($attach_categories); //reindex array
                    }
                }
            }
            if (count($detach_categories) > 0) $competition->categories()->detach($detach_categories);
            // Make updated tool list
            $existing_tools = $competition->tools()->get();
            $detach_tools = [];
            foreach ($existing_tools as $key => $tool) {
                // Detach unselected tools
                // Only attach non-existing tools in the selected list
                if (!in_array($tool->id, $attach_tools)) {
                    $detach_tools[$key] = $tool->id;
                } else {
                    if (($index = array_search($tool->id, $attach_tools)) !== false) {
                        unset($attach_tools[$index]);
                        // $attach_tools = array_values($attach_tools); //reindex array
                    }
                }
            }
            if (count($detach_tools) > 0) $competition->tools()->detach($detach_tools);
        }

        $categories = Category::find($attach_categories);
        $tools= Tool::find($attach_tools);
        if ($request->update && $request->hasFile('image')) {
            $competition = Competition::find($request->id);
            // Delete old image is a new one was submitted
            if ((File::exists(public_path("images/posts/$competition->image"))) && ($competition->image !== $imageName) && ($imageName !== '')) {
                File::delete(public_path("images/posts/$competition->image"));
            }
        }
        $competition->title = $request->title;
        $competition->description = $request->description;
        if ($request->published) $competition->published = $request->published;
        if (!$request->update) $competition->user_id = $request->user;
        if ($imageName) $competition->thumbnail_image = $imageName;
        $competition->save();
        $competition->categories()->attach($categories);
        $competition->tools()->attach($tools);

        return response([
            'success' => true,
            'message' => 'Folders loaded 😃',
            'competition' => $competition
        ], 200)->header('Content-Type', 'application/json');
    }

    public function competitions()
    {
        return Competition::paginate(50);
    }
}
