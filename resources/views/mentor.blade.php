@extends('layouts.app')

@section('content')
<div class="container-fluid content" id="mentor-page">
        <div class="row content-row">
            <div class="container mentor-sub-1">
                <div class="row">
                    <div class="col-md-4 col-sm-12 mentor-pic">
                        <img src="assets/images/img_avatar.png" alt="">
                    </div>
                    <div class="col-md-8 col-sm-12 mentor-details">
                        <div class="comtainer-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="property-con">
                                    <div class="property-simple"><span class="prop">Name :</span><span class="prop-value"> John Doe</span></div>
                                    <div class="property-simple"><span class="prop">Phone Number :</span><span class="prop-value"> +237 678042860</span></div>
                                    <div class="property-simple"><span class="prop">E-mail :</span><span class="prop-value"> <a href="#">johndoe@gmail.com</a></span></div>
                                    <div class="property-simple"><span class="prop">Number of Challenges :</span><span class="prop-value"> 13</span></div>
                                    <div class="property-simple"><span class="prop">Number of Solutions :</span><span class="prop-value"> 300</span></div>
                                    <div class="property-simple"><span class="prop">Reputation :</span><span class="prop-value"> 3300</span></div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="property-com property-con">
                                        <div class="prop">Followers</div>
                                        <div class="prop-value">600</div>
                                    </div>
                                    <div class="property-com property-con">
                                        <div class="prop">Following</div>
                                        <div class="prop-value">16</div>
                                    </div>
                                    <div class="property-com property-con">
                                        <div class="prop">Students</div>
                                        <div class="prop-value">300</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mentor-sub-2">
                <div class="mentor-info">
                  <ul class="nav nav-tab" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#mentor-challenges" role="tab"
                        aria-controls="home" aria-selected="true">Challenges <span class="primary-user-pill">4</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#mentor-students" role="tab"
                        aria-controls="profile" aria-selected="false">Students <span class="primary-user-pill">5</span></a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-details tab-pane fade show active" id="mentor-challenges" role="tabpanel"
                      aria-labelledby="home-tab">
                      <div class="container-fluid">
                        <div class="row" id="challenge-row">
                          <div class="challenge-card">
                            <div class="challenge-img" style="background: url('assets/images/alienware.jpg');">
                              <div class="challenge-img-sub">
                                <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-1-modal">
                                  <i class="fas fa-expand"></i>
                                </button>
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
                                    <div class="author">Author</div>
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
                                <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-2-modal">
                                  <i class="fas fa-expand"></i>
                                </button>
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
                                    <div class="author">Author</div>
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
                                <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-3-modal">
                                  <i class="fas fa-expand"></i>
                                </button>
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
                                    <div class="author">Author</div>
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
                                <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-4-modal">
                                  <i class="fas fa-expand"></i>
                                </button>
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
                                    <div class="author">Author</div>
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
                                    <a href="secondary-user.html" class="leaderboard-user">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                                    <div class="user">
                                                        <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                                        <div class="user-detail-con">
                                                            <div class="username">Username</div>
                                                            <div class="user-submit-date">Submit-date</div>
                                                        </div>
                                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                                    <div class="leaderboard-user-sub-2-sub">
                                                        <span>9</span>
                                                        <p>Results</p>
                                                    </div>
                                                    <div class="leaderboard-user-sub-2-sub">
                                                        <span>12</span>
                                                        <p>Reviews</p>
                                                    </div>
                                                    <div class="leaderboard-user-sub-2-sub">
                                                        <span>90</span>
                                                        <p>Followers</p>
                                                    </div>
                                                    <div class="leaderboard-user-sub-2-sub">
                                                        <span>4</span>
                                                        <p>Mentors</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-details-sub4">
                                <button class="waves-effect"><a href="challenges/challenge4.html">View Challenge</a></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-skills tab-pane fade" id="mentor-students" role="tabpanel"
                      aria-labelledby="profile-tab">
                      <div class="container-fluid">
                        <a href="secondary-user.html" class="leaderboard-user">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                        <div class="user">
                                            <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                            <div class="user-detail-con">
                                                <div class="username">Username</div>
                                                <div class="user-submit-date">Submit-date</div>
                                            </div>
                                            <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>9</span>
                                            <p>Results</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>12</span>
                                            <p>Reviews</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>90</span>
                                            <p>Followers</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>4</span>
                                            <p>Mentors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="secondary-user.html" class="leaderboard-user">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                        <div class="user">
                                            <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                            <div class="user-detail-con">
                                                <div class="username">Username</div>
                                                <div class="user-submit-date">Submit-date</div>
                                            </div>
                                            <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-silver.svg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>9</span>
                                            <p>Results</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>12</span>
                                            <p>Reviews</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>90</span>
                                            <p>Followers</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>4</span>
                                            <p>Mentors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="secondary-user.html" class="leaderboard-user">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                        <div class="user">
                                            <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                            <div class="user-detail-con">
                                                <div class="username">Username</div>
                                                <div class="user-submit-date">Submit-date</div>
                                            </div>
                                            <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>9</span>
                                            <p>Results</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>12</span>
                                            <p>Reviews</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>90</span>
                                            <p>Followers</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>4</span>
                                            <p>Mentors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="secondary-user.html" class="leaderboard-user">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                        <div class="user">
                                            <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                            <div class="user-detail-con">
                                                <div class="username">Username</div>
                                                <div class="user-submit-date">Submit-date</div>
                                            </div>
                                            <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>9</span>
                                            <p>Results</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>12</span>
                                            <p>Reviews</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>90</span>
                                            <p>Followers</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>4</span>
                                            <p>Mentors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="secondary-user.html" class="leaderboard-user">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                        <div class="user">
                                            <div class="user-img-con"><img src="assets/images/user.svg" alt="" class="user-img"></div>
                                            <div class="user-detail-con">
                                                <div class="username">Username</div>
                                                <div class="user-submit-date">Submit-date</div>
                                            </div>
                                            <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>9</span>
                                            <p>Results</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>12</span>
                                            <p>Reviews</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>90</span>
                                            <p>Followers</p>
                                        </div>
                                        <div class="leaderboard-user-sub-2-sub">
                                            <span>4</span>
                                            <p>Mentors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection