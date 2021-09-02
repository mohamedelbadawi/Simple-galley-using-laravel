@extends('app')

@section('content')

    <!-- Contact Page -->
    <section class="contact__page">
        <div class="contact__warp">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Me</h2>
                    <div class="contact__social">
                        <a href="https://www.facebook.com/mohamed.elbadawy.779"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/mohamedelbadawi"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/mohamed-reda-357731176/"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/mohamd_elbadawy/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact__text">
                        <p>Phone: 01023166866</p>
                        <p>Email: Mohamed.reda.elbadawi@gmail.com</p>
                        <p>Address: Hurghada Egypt</p>
                    </div>
                </div>
            </div>
            <form class="contact__form" method="post" action="{{ route('contact.store') }}">
                @csrf
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Phone" name="phone">
                <textarea placeholder="Message" name="message"></textarea>
                <button class="site-btn" type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <!-- Contact Page end -->

@endsection
