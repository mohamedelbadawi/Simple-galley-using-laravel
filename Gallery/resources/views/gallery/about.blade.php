@extends('app')

@section('content')

    <!-- About Page -->
    <section class="about__page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about__text">
                        <h3 class="about__title">About Me</h3>
                        <div class="about__meta">
                            <img src="img/profile.jpg" alt="">
                            <div class="about__meta__info">
                                <h5>Mohamed Reda Elbadawy</h5>
                                <p>web developer</p>
                            </div>
                        </div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                            tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat incididunt ut labore et dolore magna aliqua.</p>
                        <img src="img/signature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="experience__text">
                        <h3 class="about__title">Experience</h3>
                        <div class="experience__item">
                            <h4>Envato Co.</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                                tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                                quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                        <div class="experience__item">
                            <h4>Unplash Co.</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                                tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                                quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                        <div class="experience__item">
                            <h4>Colorlib Inc.</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                                tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                                quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="skills__text">
                        <h3 class="about__title">Skills</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                            tincidunt, bibendum ligula id. </p>
                        <div class="single-progress-item">
                            <h6>laravel</h6>
                            <div class="progress-bar-style" data-progress="50"></div>
                        </div>
                        <div class="single-progress-item">
                            <h6>html</h6>
                            <div class="progress-bar-style" data-progress="80"></div>
                        </div>
                        <div class="single-progress-item">
                            <h6>CSS</h6>
                            <div class="progress-bar-style" data-progress="60"></div>
                        </div>
                        <div class="single-progress-item">
                            <h6>Web Scrapping</h6>
                            <div class="progress-bar-style" data-progress="60"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page end -->

@endsection
