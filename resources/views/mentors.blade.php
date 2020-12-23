@extends('layouts.app')

@section('content')
<div class="container-fluid content">
        <div class="row challenge-title-bg">
            <div class="container-fluid" id="challenge-title">
                <h1>Leaderboard</h1>
                <h4>List of our top users</h4>
            </div>
        </div>
        <div class="row content-row">
            <!-- start of the sidenav -->
            <div class="col-sm-12 col-lg-3 default-side-nav">
                <div class="sticky">
                    <ul class="nav flex-column">
                        <h6>Filters</h6>
                        <li class="nav-item">
                            <a class="nav-link active" href="#challenge-row"><i class="fas fa-list"></i>All
                                Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-stream"></i>Latest Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-hand-peace"></i>Easy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-stream"></i>intermediate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-brain"></i>Difficult</a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="solutions.html"><i class="fas fa-clipboard-list"></i>Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-sidenav-link" href="mentors.html"><i class="fas fa-users"></i>Mentors</a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-user-edit"></i>My Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-tasks"></i>My Solutions</a>
                        </li>
                        <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#!">Disabled</a>
            </li> -->
                    </ul>
                </div>
            </div>
            <!-- end of the sidenav -->

            <!-- start of the challenges -->
            <div class="col-sm-12 col-md-9">
                <div class="container-fluid" id="mentors">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mentor-card-con"><a href="mentor-profile.html" class="mentor-card">
                            <div class="mentor-card-sub">
                                <div class="mentor-img"><img src="assets/images/photo1.png" alt=""></div>
                                <div class="mentor-card-name">John Doe</div>
                                <div class="mentor-card-sub-1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Challenges</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Reputation</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Students</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-4 col-sm-12 mentor-card-con"><a href="mentor-profile.html" class="mentor-card">
                            <div class="mentor-card-sub">
                                <div class="mentor-img"><img src="assets/images/photo2.png" alt=""></div>
                            <div class="mentor-card-name">John Doe</div>
                                <div class="mentor-card-sub-1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Challenges</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Reputation</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Students</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-4 col-sm-12 mentor-card-con"><a href="mentor-profile.html" class="mentor-card">
                            <div class="mentor-card-sub">
                                <div class="mentor-img"><img src="assets/images/img_avatar.png" alt=""></div>
                            <div class="mentor-card-name">John Doe</div>
                                <div class="mentor-card-sub-1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Challenges</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Reputation</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Students</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-4 col-sm-12 mentor-card-con"><a href="mentor-profile.html" class="mentor-card">
                            <div class="mentor-card-sub">
                                <div class="mentor-img"><img src="assets/images/photo3.png" alt=""></div>
                            <div class="mentor-card-name">John Doe</div>
                                <div class="mentor-card-sub-1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Challenges</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Reputation</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                            <div class="text-center property-con mentor-card-details">
                                                <div class="prop">Students</div>
                                                <div class="prop-value">20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection