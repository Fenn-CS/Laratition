@extends('layouts.app')

@section('content')
<div class="container-fluid content">
        <div class="row challenge-title-bg">
            <div class="container-fluid" id="challenge-title">
                <h1>Our Community</h1>
                <h4>Get in touch with all our users</h4>
            </div>
        </div>
        <div class="row content-row leaderboard">
            <!-- start of the sidenav -->
            <div class="col-sm-12 col-lg-3 default-side-nav">
                <div class="sticky">
                    <ul class="nav flex-column">
                        <h6 id="filters">Filters</h6>
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
                            <a class="nav-link" href="mentors.html"><i class="fas fa-users"></i>Mentors</a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link active" href="#!"><i class="fas fa-user-edit"></i>My Challenges</a>
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
            <div class="col-sm-12 col-lg-9 top-users">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 posts">
                            <div class="container-fluid user-post">
                                <div class="user-p-img">
                                    <img src="assets/images/photo8.png" alt="">
                                </div>
                                <div class="col-md-9 user-p-post">
                                    <form><input type="text" name="" id="" placeholder="Hey! What's o your mind"><button>post</button></form>
                                </div>
                            </div>
                            <h4 class="my-3 mx-5">Most Recent</h4>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo6.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium a recusandae ad quia similique deserunt reiciendis odit fuga mollitia enim iure libero quod maxime, perferendis sapiente.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo1.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo2.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium a recusandae ad quia similique deserunt reiciendis odit fuga mollitia enim iure libero quod maxime, perferendis sapiente.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo3.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo4.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium a recusandae ad quia similique deserunt reiciendis odit fuga mollitia enim iure libero quod maxime, perferendis sapiente.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-sub-1">
                                    <div class="user">
                                        <div class="user-img-con"><img src="assets/images/photo5.png" alt="" class="user-img"></div>
                                        <a href="secondary-user.html" class="user-detail-con">
                                            <div class="username">Username</div>
                                            <div class="user-submit-date">Submit-date</div>
                                        </a>
                                        <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="post-sub-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sunt illum. Sit laudantium</p>
                                </div>
                                <div class="post-sub-3">
                                    <h6>Leave a reply</h6>
                                    <form>
                                        <input type="text" placeholder="Comment here">
                                        <input type="button" value="Submit">
                                    </form>
                                </div>
                                <div class="post-sub-4">
                                    <div class="post-sub-4-sub-1">
                                                    <div class="thumbs-up"><i class="far fa-thumbs-up"><span>14</span></i></div>
                                                    <div class="comments"><i class="far fa-comments" aria-hidden="true"><span>7</span></i></div>
                                    </div>
                                    <div class="post-sub-4-sub-2">
                                        <a href="#">View all replies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 top-users-inline sticky">
                            <h4>Top Users</h4>
                            <div class="col-md-12 top-users-inline-sub">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo8.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/dog-image-1.jpg" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-silver.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo3.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/dog-image-2.jpg" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo4.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo5.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/dog-image-3.jpg" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo6.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo6.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo6.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username"><a href="secondary-user.html">Username</a></div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the challenges -->
@endsection