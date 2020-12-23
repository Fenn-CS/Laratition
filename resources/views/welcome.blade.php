@extends('layouts.app')

@section('content')
  <div class="container-fluid content">
  </div>
  <!-- end of the challenges -->


  <!-- start of the landing page -->
  <canvas class="background"></canvas>
  <section id="hero">
    <div class="container-fluid">
      <div class="container-hero row">
        <div class="hero-1 col-sm-12 col-md-6 animate__animated animate__fadeInLeft">
          <h1>Complete all sorts of Challenges and increase your skills</h1>
          <p>Lorem ipsum dolor sit, ametrum est repudiandae nulla quis, vel, quasi ducimus tempore corporis laudantium consequuntur in, rerum ipsam quisquam.</p>
          <div id="hero-register-btns">
            <button id="google-register"><img src="assets/images/google.svg" alt=""> Regsiter with Google</button>
            <button id="facebook-register"><img src="assets/images/facebook.svg" alt=""> Regsiter with Facebook</button>
            <button id="email-register"><a href="login-register.html">Regsiter with Email</a></button>
          </div>
        </div>
        <div class="hero-2 col-sm-12 col-md-6 animate__animated animate__fadeInRight"><img src="assets/images/Vector.svg" alt=""></div>
      </div>
    </div>
    <!-- <css-doodle>
      :doodle {
        @grid: 5 / 8em;
      }
      background: #fff;
      transform: scale(@rand(.3, .7));
    </css-doodle> -->
  </section>
  <!-- start of what to do section -->
  <section class="container what-to-do">
    <h2>What to do</h2>
    <div class="container-fluid">
      <div class="row" id="what-to-do"  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-up">
        <div class="what-to-do-sub col-sm-12 col-md-4">
          <div class="what-to-do-img"><img src="assets/images/select.svg" alt=""></div>
          <h4>Choose a challenge</h4>
          <p>Lorem ipsum dolor sit, amum temporibus! Dolore est quisquam reprehenderit debitis.</p>
        </div>
        <div class="what-to-do-sub col-sm-12 col-md-4">
          <div class="what-to-do-img"><img src="assets/images/checkmark.svg" alt=""></div>
          <h4>Complete the challenge</h4>
          <p>Lorem ipsum dolor sit, amum temporibus! Dolore est quisquam reprehenderit debitis.</p>
        </div>
        <div class="what-to-do-sub col-sm-12 col-md-4">
          <div class="what-to-do-img"><img src="assets/images/order.svg" alt=""></div>
          <h4>Submit the challenge</h4>
          <p>Lorem ipsum dolor sit, amum temporibus! Dolore est quisquam reprehenderit debitis.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end of what to do section -->
  <!-- start of level up section -->
  <div class="container-fluid level-up-bg">
    <section id="level-up" class="container-hero row">
      <div class="level-up-con col-md-6 col-sm-12"  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-right">
        <h2>Level up you skills</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat asperiores sapiente animi culpa.</p>
      </div>
      <div class="level-up-img col-md-6 col-sm-12"">
        <img src="assets/images/undraw_growth_analytics_8btt.svg" alt=""  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-left">
      </div>
    </section>
  </div>
  <!-- end of level up section -->
  <!-- start of recent challenges section -->
  <div id="recent-challenges" class="container">
    <h2>Recent  Challeneges</h2>
    <div class="row" data-aos-delay="90" data-aos-duration="1000" data-aos="fade-up">
      <div class="col-sm-12 col-md-4 recent-challenges-sub">
        <div class="challenge-card"  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-right">
          <div class="challenge-img" style="background: url('assets/images/caspar-camille-rubin.jpg');">
            <div class="challenge-img-sub">
              <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-2-modal"> -->
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
                    <button type="button" class="btn challenge-img-modal-btn">More Info</button>
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
                  <div class="date">00/00/00</div>
                </div>
                <div class="tab-details-sub2">
                  <h4>This is the challenge title</h4>
                </div>
                <div class="tab-details-sub3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                    ullam illo repellat sunt!</p>
                </div>
                <div class="tab-details-sub4">
                  <button class="waves-effect"><a href="#">View Challenge</a></button>
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
                      <i class="fab fa-js') }}"></i>
                      <p>JavaScript</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 recent-challenges-sub">
        <div class="challenge-card"  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-up">
          <div class="challenge-img" style="background: url('assets/images/christian-wiediger.jpg');">
            <div class="challenge-img-sub">
              <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-3-modal"> -->
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
                    <button type="button" class="btn challenge-img-modal-btn">More Info</button>
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
                  <div class="date">00/00/00</div>
                </div>
                <div class="tab-details-sub2">
                  <h4>This is the challenge title</h4>
                </div>
                <div class="tab-details-sub3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                    ullam illo repellat sunt!</p>
                </div>
                <div class="tab-details-sub4">
                  <button class="waves-effect"><a href="#">View Challenge</a></button>
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
                      <i class="fab fa-js') }}"></i>
                      <p>JavaScript</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 recent-challenges-sub">
        <div class="challenge-card"  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-left">
          <div class="challenge-img" style="background: url('assets/images/christopher-gower.jpg');">
            <div class="challenge-img-sub">
              <!-- <button type="button" class="expand-btn" data-toggle="modal" data-target="#challenge-4-modal"> -->
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
                    <button type="button" class="btn challenge-img-modal-btn">More Info</button>
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
                  <div class="date">00/00/00</div>
                </div>
                <div class="tab-details-sub2">
                  <h4>This is the challenge title</h4>
                </div>
                <div class="tab-details-sub3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi aut itaque omnis. Soluta
                    ullam illo repellat sunt!</p>
                </div>
                <div class="tab-details-sub4">
                  <button class="waves-effect"><a href="#">View Challenge</a></button>
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
                      <i class="fab fa-js') }}"></i>
                      <p>JavaScript</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container view-all-btn">
      <button><a href="challeneges.html">View all challenges</a></button>
    </div>
  </div>
  <!-- end of recent challenges section -->
  <!-- start of sponsors section -->
  <section class="sponsors container-fluid">
    <h2>Our sponsors</h2>
    <div class="sponsors-row"  data-aos-delay="90" data-aos-duration="1000" data-aos="flip-up">
      <span><img src="assets/images/deezer-logo.svg" alt=""></span>
      <span><img src="assets/images/money.svg" alt=""></span>
      <span><img src="assets/images/sponsor.svg" alt=""></span>
      <span><img src="assets/images/soundcloud.svg" alt=""></span>
      <span><img src="assets/images/spotify.svg" alt=""></span>
      <span><img src="assets/images/adidas.svg" alt=""></span>
      <span><img src="assets/images/nvidia.svg" alt=""></span>
    </div>
  </section>
  <!-- end of sponsors section -->
  <!-- start of solution section -->
  <div id="recent-solutions" class="container">
    <h2>Recent Solutions</h2>
    <div class="container-row">
      <div class="row">
            <div class="solution-card  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-right">
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
                        <button type="button" class="btn solution-img-modal-btn">More Info</button>
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
                      <div class="author">Author</div>
                      <div class="date">00/00/00</div>
                    </div>
                    <div class="tab-details-sub2">
                      <h4>This is the solution title</h4>
                    </div>
                    <div class="tab-details-sub3">
                      <hr>
                      <div class="solution-sub-1">
                        <div class="solution-profile">
                          <div class="solution-profile-img"><img src="assets/images/user.svg" alt=""></div>
                          <div class="solution-profile-con">
                            <div class="solution-username">Username</div>
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
                          <i class="fab fa-js') }}"></i>
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
            <div class="solution-card  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-up">
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
                        <button type="button" class="btn solution-img-modal-btn">More Info</button>
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
                      <div class="author">Author</div>
                      <div class="date">00/00/00</div>
                    </div>
                    <div class="tab-details-sub2">
                      <h4>This is the solution title</h4>
                    </div>
                    <div class="tab-details-sub3">
                      <hr>
                      <div class="solution-sub-1">
                        <div class="solution-profile">
                          <div class="solution-profile-img"><img src="assets/images/user.svg" alt=""></div>
                          <div class="solution-profile-con">
                            <div class="solution-username">Username</div>
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
                          <i class="fab fa-js') }}"></i>
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
            <div class="solution-card  data-aos-delay="90" data-aos-duration="1000" data-aos="fade-left">
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
                        <button type="button" class="btn solution-img-modal-btn">More Info</button>
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
                      <div class="author">Author</div>
                      <div class="date">00/00/00</div>
                    </div>
                    <div class="tab-details-sub2">
                      <h4>This is the solution title</h4>
                    </div>
                    <div class="tab-details-sub3">
                      <hr>
                      <div class="solution-sub-1">
                        <div class="solution-profile">
                          <div class="solution-profile-img"><img src="assets/images/user.svg" alt=""></div>
                          <div class="solution-profile-con">
                            <div class="solution-username">Username</div>
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
                          <i class="fab fa-js') }}"></i>
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
  <!-- end of sponsors section -->
  <section id="subscribe" class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-6 subscribe-img" data-aos-delay="90" data-aos-duration="1000" data-aos="fade-right"><img src="assets/images/undraw_subscriber_vabu.svg" alt=""></div>
      <div class="col-sm-12 col-md-6 subscribe-con" data-aos-delay="90" data-aos-duration="1000" data-aos="fade-left">
        <h3>Subscribe to our newsletter</h3>
        <h5>Stay up-to-date with new challenges, featured solutions and latest news</h5>
        <!-- <fieldset>
          <input type="checkbox" name="subscribe" id="subscribe"><label for="subscribe">I am open to emails</label>
        </fieldset> -->
        <fieldset>
          <input type="email" name="email" id=""><button type="submit">Subscribe</button>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- end of the landing page -->

  @endsection