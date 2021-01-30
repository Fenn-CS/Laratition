<template>
  <dashboard-layout>
    <div class="container-fluid main-content">
      <!-- this is the create a challenge section -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Create a challenge</h1>

            <form>
              <ol>
                <li>
                  <h3>Choose a picture for your challenge</h3>
                  <fieldset>
                    <label for="challenge-pic"
                      ><i class="fas fa-camera"></i> Upload Photo</label
                    >
                    <br />
                    <input type="file" name="" id="challenge-pic" />
                  </fieldset>
                </li>
                <h4>Challenge details</h4>
                <li>
                  <fieldset>
                    <label for="challenge-title"
                      >Enter the challenge title</label
                    >
                    <br />
                    <input
                      type="text"
                      id="challenge-title"
                      placeholder="Title goes here"
                    />
                  </fieldset>
                </li>
                <li>
                  <fieldset>
                    <label for="challenge-title"
                      >Enter the challenge title</label
                    >
                    <br />
                    <select name="" id="">
                      <option value="" selected>
                        What type of challenge is it
                      </option>
                      <option value="">Option one</option>
                      <option value="">Option two</option>
                      <option value="">Option three</option>
                      <option value="">Option four</option>
                      <option value="">Option five</option>
                    </select>
                  </fieldset>
                </li>
                <li>
                  <fieldset>
                    <label for="challenge-details"
                      >Enter the challenge details</label
                    >
                    <br />
                    <textarea
                      type="text"
                      id="challenge-details"
                      placeholder="Challenge description goes here"
                    ></textarea>
                  </fieldset>
                </li>
                <li>
                  <fieldset class="radio-span">
                    <label>Choose challenge difficulty</label>
                    <span
                      ><input
                        type="radio"
                        name="challenge-diff"
                        id="challenge-diff-1" /><label for="challenge-diff-1"
                        >Easy</label
                      ><br
                    /></span>
                    <span
                      ><input
                        type="radio"
                        name="challenge-diff"
                        id="challenge-diff-2" /><label for="challenge-diff-2"
                        >Intermediate</label
                      ><br
                    /></span>
                    <span
                      ><input
                        type="radio"
                        name="challenge-diff"
                        id="challenge-diff-3" /><label for="challenge-diff-3"
                        >Difficult</label
                      ><br
                    /></span>
                  </fieldset>
                </li>

                <h4>Challenge skills</h4>
                <li>
                  <fieldset>
                    <label>Select all skills that apply</label>
                    <div class="skill-con">
                      <input type="checkbox" name="" id="testing" /><label
                        for="testing"
                        class="chip"
                        >Testing</label
                      >
                      <input
                        type="checkbox"
                        name=""
                        id="responsive-design"
                      /><label for="responsive-design" class="chip"
                        >Responsive Design</label
                      >
                      <input type="checkbox" name="" id="api" /><label
                        for="api"
                        class="chip"
                        >Api</label
                      >
                      <input type="checkbox" name="" id="front-end" /><label
                        for="front-end"
                        class="chip"
                        >Front-end</label
                      >
                      <input type="checkbox" name="" id="back-end" /><label
                        for="back-end"
                        class="chip"
                        >Back-end</label
                      >
                      <input type="checkbox" name="" id="full-stack" /><label
                        for="full-stack"
                        class="chip"
                        >Full-stack</label
                      >
                      <input type="checkbox" name="" id="design-system" /><label
                        for="design-system"
                        class="chip"
                        >Design-system</label
                      >
                      <input type="checkbox" name="" id="analytical" /><label
                        for="analytical"
                        class="chip"
                        >Analytical</label
                      >
                      <input type="checkbox" name="" id="interpersonal" /><label
                        for="interpersonal"
                        class="chip"
                        >Interpersonal</label
                      >
                      <input type="checkbox" name="" id="debugging" /><label
                        for="debugging"
                        class="chip"
                        >Debugging</label
                      >
                      <input type="checkbox" name="" id="SEO" /><label
                        for="SEO"
                        class="chip"
                        >SEO</label
                      >
                      <input type="checkbox" name="" id="ui/ux" /><label
                        for="ui/ux"
                        class="chip"
                        >UI/UX</label
                      >
                    </div>
                  </fieldset>
                </li>
                <li>
                  <fieldset>
                    <label>Select all technologies that apply</label>
                    <div class="tech-con">
                      <input type="checkbox" name="" id="css" /><label
                        for="css"
                        class="skill css"
                        ><i class="fab fa-css3-alt"></i>
                        <p>CSS3</p></label
                      >
                      <input type="checkbox" name="" id="html" /><label
                        for="html"
                        class="skill html"
                        ><i class="fab fa-html5"></i>
                        <p>HTML</p></label
                      >
                      <input type="checkbox" name="" id="javascript" /><label
                        for="javascript"
                        class="skill js"
                        ><i class="fab fa-js"></i>
                        <p>Javascript</p></label
                      >
                      <input type="checkbox" name="" id="node-js" /><label
                        for="node-js"
                        class="skill node-js"
                        ><i class="fab fa-node-js"></i>
                        <p>Node JS</p></label
                      >
                      <input type="checkbox" name="" id="angular-js" /><label
                        for="angular-js"
                        class="skill angular-js"
                        ><i class="fab fa-angular"></i>
                        <p>Angular JS</p></label
                      >
                      <input type="checkbox" name="" id="react-js" /><label
                        for="react-js"
                        class="skill react-js"
                        ><i class="fab fa-react"></i>
                        <p>React JS</p></label
                      >
                      <input type="checkbox" name="" id="vue-js" /><label
                        for="vue-js"
                        class="skill vue-js"
                        ><i class="fab fa-vuejs"></i>
                        <p>Vue JS</p></label
                      >
                    </div>
                  </fieldset>
                </li>
              </ol>

              <button type="submit">Complete Creation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </dashboard-layout>
</template>


<script>
import DashboardLayout from "./Dashboard";
export default {
  name: "CreateCompetition",
  data: function () {
    return {};
  },
  components: {
    DashboardLayout,
  },
  methods: {
    init: function () {},
  },
  mounted() {},
};
</script>