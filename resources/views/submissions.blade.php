@extends('layouts.app')

@section('content')
<div class="container-fluid content">
    <div class="row solution-title-bg">
      <div class="container-fluid" id="solution-title">
        <h1>List of Solutions</h1>
        <h4>Explore all the available solutions</h4>
      </div>
    </div>
    <div class="row content-row">
      <!-- start of the sidenav -->
      <div class="col-sm-12 col-lg-3 default-side-nav">
        <div class="sticky">
          <ul class="nav flex-column">
            <h6>Filters</h6>
            <li class="nav-item">
              <a class="nav-link active" href="#solution-row"><i class="fas fa-list"></i>All solutions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!"><i class="fas fa-stream"></i>Latest solutions</a>
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
              <a class="nav-link active-sidenav-link" href="solutions.html"><i class="fas fa-clipboard-list"></i>Solutions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mentors.html"><i class="fas fa-users"></i>Mentors</a>
            </li>

            <hr>
            <li class="nav-item">
              <a class="nav-link active" href="primary-user.html#sec-user-challenges"><i class="fas fa-user-edit"></i>My solutions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="primary-user.html#primary-user-mentors-tab"><i class="fas fa-users"></i>My Mentors</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#!">Disabled</a>
            </li> -->
          </ul>
        </div>
      </div>
      <!-- end of the sidenav -->
    
      <!-- start of the solutions -->    
      <div class="col-sm-12 col-lg-9">
        <div class="row" id="solution-row">
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/alienware.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-1-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-1-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 1</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/alienware.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution1.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-1-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-1-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-1-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo1.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-1-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution1.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/caspar-camille-rubin.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-2-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-2-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 2</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/caspar-camille-rubin.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution2.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-2-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-2-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-2-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo2.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-silver.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-2-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution2.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/christian-wiediger.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-3-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-3-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 3</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/christian-wiediger.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution3.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-3-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-3-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-3-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar difficult-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo3.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-bronze.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-3-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution3.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/christopher-gower.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-4-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-4-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 4</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/christopher-gower.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution4.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-4-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-4-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-4-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo4.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-4-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution4.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/clement.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-5-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <div class="modal fade" id="solution-5-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 5</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/clement.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution5.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-5-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-5-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-5-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo5.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-5-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution5.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/GalleryThumbnail.png');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-6-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-6-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 6</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/GalleryThumbnail.png" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution6.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-6-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-6-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-6-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo6.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-6-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution6.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/overlay-bg.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-7-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-7-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 7</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/overlay-bg.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution7.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-7-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-7-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-7-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo8.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-7-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="solutions/solution7.html">View solution</a></button>
                  </div>
            </div>
          </div>
          <div class="solution-card">
            <div class="solution-img" style="background: url('assets/images/tim-foster-Odhl.jpg');">
              <div class="solution-img-sub">
                <button type="button" class="expand-btn" data-toggle="modal" data-target="#solution-8-modal">
                  <i class="fas fa-expand"></i>
                </button>
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="solution-8-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">solution 8</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/tim-foster-Odhl.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn solution-img-modal-btn"><a href="solutions/solution8.html">More Info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="solution-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#solution-8-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#solution-8-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="solution-8-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date">00/00/00</div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the solution title</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                  </div>
                  <div class="tab-details-sub3">
                    <hr>
                    <div class="solution-sub-1">
                      <div class="solution-profile">
                        <div class="solution-profile-img"><img src="assets/images/photo1.png" alt=""></div>
                        <div class="solution-profile-con">
                          <div class="solution-username"><a href="secondary-user.html">Username</a></div>
                          <div class="solution-submit-date">Submit date</div>
                        </div>
                      </div>
                      <div class="profile-lvl"><img src="assets/images/trophy-gold.svg" alt=""></div>
                    </div>
                    <hr>
                    <div class="solution-sub-2">
                      <button class="solution-comment">
                        <div class="solution-sub-2-img"><img src="assets/images/message.svg" alt=""></div>
                        <div class="solution-sub-2-name">Comment</div>
                      </button>
                      <button class="solution-bookmark">
                        <div class="solution-sub-2-img"><img src="assets/images/bookmark.svg" alt=""></div>
                        <div class="solution-sub-2-name">Bookmark</div>
                      </button>
                      <button class="solution-like">
                        <div class="solution-sub-2-img"><img src="assets/images/heart.svg" alt=""></div>
                        <div class="solution-sub-2-name">Like</div>
                      </button>
                    </div>
                    <hr>
                  </p>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="solution-8-skills" role="tabpanel"
                  aria-labelledby="profile-tab">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="chip">Responsive</div>
                      <div class="chip">API</div>
                      <div class="chip">Front-end</div>
                      <div class="chip">Back-end</div>
                      <div class="chip">Full-stack</div>
                      <div class="chip">Design System</div>
                    </div>
                    <hr>
                    <div class="row skill-row">
                      <div class="skill css">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS3</p>
                      </div>
                      <div class="skill html">
                        <i class="fab fa-html5"></i>
                        <P>HTML5</P>
                      </div>
                      <div class="skill js">
                        <i class="fab fa-js"></i>
                        <p>JavaScript</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="tab-details-sub4">
                    <button class="waves-effect"><a href="#">View solution</a></button>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of the solutions -->
@endsection