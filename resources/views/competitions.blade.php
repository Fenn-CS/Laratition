@extends('layouts.app')

@section('content')
<div class="container-fluid content">
    <div class="row challenge-title-bg">
      <div class="container-fluid" id="challenge-title">
        <h1>List of Challenges</h1>
        <h4>Explore all the available Solutions</h4>
      </div>
    </div>
    <div class="row content-row">
      <!-- start of the sidenav -->
      <div class="col-sm-12 col-lg-3 default-side-nav">
        <div class="sticky">
          <ul class="nav flex-column">
            <h6>Filters</h6>
            <li class="nav-item">
              <a class="nav-link active-sidenav-link" href="#challenge-row"><i class="fas fa-list"></i>All Challenges</a>
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
              <a class="nav-link" href="mentors.html"><i class="fas fa-users"></i>Mentors</a>
            </li>

            <hr>
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-user-edit"></i>My Challenges</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="primary-user.html#sec-user-challenges"><i class="fas fa-tasks"></i>My Solutions</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#!">Disabled</a>
            </li> -->
          </ul>
        </div>
      </div>
      <!-- end of the sidenav -->

      <!-- start of the challenges -->
      <div class="col-sm-12 col-lg-9">
        <div class="row" id="challenge-row">
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/alienware.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-1-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-1-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 1</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/alienware.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge1.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-1-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-1-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-1-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-1-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge1.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/caspar-camille-rubin.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-2-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-2-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 2</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/caspar-camille-rubin.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge2.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-2-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-2-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-2-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar intermediate-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-2-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge2.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/christian-wiediger.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-3-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-3-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 3</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/christian-wiediger.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge3.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-3-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-3-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-3-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar difficult-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-3-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge3.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/christopher-gower.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-4-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-4-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 4</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/christopher-gower.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge4.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-4-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-4-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-4-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-4-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge4.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/clement.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-5-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <div class="modal fade" id="challenge-5-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 5</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/clement.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a href="challenges/challenge5.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-5-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-5-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-5-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-5-skills" role="tabpanel"
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
                    <div class="row">
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
                    <button class="waves-effect"><a href="challenges/challenge5.html">View Challenge</a></button>
                  </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/GalleryThumbnail.png');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-6-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-6-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 6</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/GalleryThumbnail.png" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge6.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-6-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-6-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-6-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-6-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge6.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/overlay-bg.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-7-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-7-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 7</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/overlay-bg.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge7.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-7-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-7-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-7-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-7-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge7.html">View Challenge</a></button>
              </div>
            </div>
          </div>
          <div class="challenge-card">
            <div class="challenge-img" style="background: url('assets/images/tim-foster-Odhl.jpg');">
              <div class="challenge-img-sub">
                <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-8-modal">
                  <i class="fas fa-expand"></i>
                </button> -->
              </div>
              <!-- Modal  -->
              <div class="modal fade" id="challenge-8-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Challenge 8</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="assets/images/tim-foster-Odhl.jpg" alt="">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn challenge-img-modal-btn"><a
                          href="challenges/challenge8.html">More info</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="challenge-info">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#challenge-8-details" role="tab"
                    aria-controls="home" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#challenge-8-skills" role="tab"
                    aria-controls="profile" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-details tab-pane fade show active" id="challenge-8-details" role="tabpanel"
                  aria-labelledby="home-tab">
                  <div class="tab-details-sub1">
                    <div class="author"><a href="mentor-profile.html">Author</a></div>
                    <div class="date"><span id="h">00</span> :<span id="m"> 00</span> :<span id="s"> 00</span></div>
                  </div>
                  <div class="tab-details-sub2">
                    <h4>This is the challenge title</h4>
                  </div>
                  <div class="tab-details-sub3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                      ullam illo repellat sunt!</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar easy-challenge" role="progressbar"></div>
                  </div>
                </div>
                <div class="tab-skills tab-pane fade" id="challenge-8-skills" role="tabpanel"
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
                    <div class="row">
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
                <button class="waves-effect"><a href="challenges/challenge8.html">View Challenge</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of the challenges -->

@endsection