@extends('layouts.front.app')

@section('content')
    <div class="boxed_wrapper">

        <!-- banner-section -->
        <section class="banner-section" style="background-image: url(front/assets/images/booster4.png);">
            <div class="pattern-layer" style="background-image: url(front/assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>
                        Sindbad<br> Hot Air Balloon
                    </h2>
                    <p>
                        Enjoy an amazing trip up the sky in one of our hot air balloon. </p>
                    <div class="form-inner">
                        <form action="http://demo.dedemao.com/h5/13482/index.html" method="post"
                            class="booking-form clearfix">
                            <div class="form-group">
                                <input type="text" name="service" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="service" placeholder="Mobile Number" required="">
                            </div>
                            <!-- <div class="form-group input-date">
                                                                                            <i class="far fa-angle-down"></i><input type="text" name="date"
                                                                                                placeholder="Mobile Number" id="datepicker">
                                                                                        </div> -->
                            <div class="form-group">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Travel Type">
                                            Flight Type

                                        </option>
                                        <option value="1">
                                            Adventure Tours
                                        </option>
                                        <option value="2">
                                            City Tours
                                        </option>
                                        <option value="3">
                                            Couple Tours
                                        </option>
                                        <option value="4">
                                            Group Tours
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="message-btn">
                                <button type="submit" class="theme-btn"><i class="far fa-search"></i>Request a
                                    call</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
        <!-- tour-section -->
        <section class="tour-section bg-color-1 sec-pad">
            <div class="pattern-layer" style="background-image: url(front/assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>
                        Explore and choose
                    </p>
                    <h2 style="font-family: 'sb';">
                        The Best Package
                    </h2>
                    <p>of Your Journey</p>
                </div>
                <div class="row clearfix">
                    @foreach ($tours as $tour)
                        <div class="col-lg-4 col-md-6 col-sm-12 tour-block">
                            <div class="tour-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="front/assets/images/tour/tour-1.jpg" alt=""><a href="tour-details.html"><i
                                                class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="rating">
                                            <span><i class="fas fa-star"></i>8.0 Superb</span>
                                        </div>
                                        <h3>
                                            <a href="tour-details.html">{{ $tour->title }} </a>
                                        </h3>
                                        <h4>
                                            {{ $tour->adult_price }}<span>/ Per Adult</span>
                                        </h4>
                                        <ul class="info clearfix">
                                            <li>
                                                <i class="far fa-clock"></i>5 Days
                                            </li>
                                            <li>
                                                <i class="far fa-map"></i>G87P,Birmingham
                                            </li>
                                        </ul>
                                        <p>
                                        <ul class="list">

                                            @foreach ($tour->features as $feature)
                                                <li><i style="color:#00a651;" class="far fa-check-circle"></i>
                                                    {{ $feature->name }}</li>
                                            @endforeach
                                        </ul>
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('tours', $tour->id) }}">Book Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- tour-section end -->
        <!-- about-section -->
        <section class="about-section">
            <div class="pattern-layer" style="background-image: url(front/assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1"
                                        style="background-image: url(front/assets/images/shape/shape-2.png);"></div>
                                    <div class="shape-2"
                                        style="background-image: url(front/assets/images/shape/shape-3.png);"></div>
                                </div>
                                <figure class="image image-1">
                                    <img src="front/assets/images/resource/about-1.jpg" alt="">
                                    <div class="shape-3"
                                        style="background-image: url(front/assets/images/shape/shape-3.png);"></div>
                                </figure>
                                <figure class="image image-2">
                                    <img src="front/assets/images/resource/about-2.jpg" alt="">
                                </figure>
                                <div class="video-content">
                                    <h3>
                                        Find Your Best Destination
                                    </h3>
                                    <div class="video-btn">
                                        <a href="../../../www.youtube.com/watch70cf.html?v=nfP5N9Yc72A&amp;t=28s"
                                            class="lightbox-image" data-caption=""><i class="icon-Video"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p>
                                        Get to know more about </p>
                                    <h2>
                                        Sindbad Balloons
                                    </h2>
                                </div>
                                <div class="text">
                                    <p>
                                        With nearly a decade of experience in catering to 5000 passengers flown in 2005,
                                        18000 passengers flown in 2006 and 34000 passengers flown in 2007 etc. We
                                        proudly consider ourselves among the very safest and best companies in worldwide
                                        Balloon industry.
                                    </p>
                                </div>
                                <ul class="list clearfix">
                                    <li>Security and Safety: Following a culture of security and safety.
                                    </li>
                                    <li>People: We are team of the highest standards and level of expertise.
                                    </li>
                                    <li>Partner: Promoting strong and supportive business relationships.
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="tour-1.html" class="theme-btn">Find Tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
        <!-- feature-section -->
        <section class="feature-section centred bg-color-1 sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>
                        Our company policy is solely based on your safety
                    </p>
                    <h2 class="green-cl">
                        Flight Program
                    </h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="https://www.sindbadballoons.com/img/infilation.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <i class="icon-1"></i>
                                    </div>
                                    <h4>
                                        Inflation & Take Off
                                    </h4>
                                    <p>Once you get to the west bank we transfer you to our take-off area. Inflation
                                        takes about 20 minutes.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="https://www.sindbadballoons.com/img/flight.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <i class="icon-2"></i>
                                    </div>
                                    <h4>
                                        The Flight
                                    </h4>
                                    <p>
                                        Take to the skies and experience the region by the light of sunrise as you glide
                                        over landmarks in a hot air balloon...



                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="https://www.sindbadballoons.com/img/celebration.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <i class="icon-3"></i>
                                    </div>
                                    <h4>
                                        Celebration
                                    </h4>
                                    <p>After your flight, when your feet find their way back to earth, the crew will
                                        meet you, and help you celebrate your happy ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="front/assets/images/resource/breakfast.jpg" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <i class="icon-4"></i>
                                    </div>
                                    <h4>
                                        Refreshment Breakfast

                                    </h4>
                                    <p>After your flight, when your feet find their way back to earth, the crew will
                                        meet you, and help you celebrate your happy....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- deals-section -->
        <section class="deals-section" style="background-image: url(front/assets/images/booster4.png);">
            <div class="auto-container">
                <div class="content_block_2">
                    <div class="content-box">
                        <h2 style="font-weight: 800;">
                            Tailor-Made Flight Types
                        </h2>
                        <div class="price">
                            <h3>
                                $150
                            </h3><del>$300</del>
                        </div>
                        <p>
                            Want to have an unforgettable event when flying? A marriage proposal, a birthday or a family
                            member only flight? We have balloons and baskets of different sizes from 2 people to 28
                            people and can accommodate large groups to small parties. Please check
                            the various flight types and basket sizes we offer.


                        </p><a href="tour-details.html" class="theme-btn green-bg">BOOK YOUR FLIGHT NOW!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-section end -->

        <!-- place-section -->
        <section class="place-section sec-pad">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(front/assets/images/icons/anim-icon-1.png);">
                </div>
                <div class="icon anim-icon-2" style="background-image: url(front/assets/images/shape/shape-3.png);">
                </div>
                <div class="icon anim-icon-3" style="background-image: url(front/assets/images/shape/shape-3.png);">
                </div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                        <div class="sec-title">
                            <p>
                                Have a look on our

                            </p>
                            <h2>

                                Sindbad Gallery

                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                hile many imposters and illegitimate hot air balloon companies litter the internet, take
                                comfort in the fact that Sindbad Balloons </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="front/assets/images/resource/place-1.jpg" alt="">
                                </figure>
                                <!-- <div class="text">
                                                                                                <h3>
                                                                                                    <a href="destination-details.html">New York City</a>
                                                                                                </h3>
                                                                                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="front/assets/images/resource/place-2.jpg" alt="">
                                </figure>
                                <!-- <div class="text">
                                                                                                <h3>
                                                                                                    <a href="destination-details.html">Norway Lake</a>
                                                                                                </h3>
                                                                                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="front/assets/images/resource/place-3.jpg" alt="">
                                </figure>
                                <!-- <div class="text">
                                                                                                <h3>
                                                                                                    <a href="destination-details.html">Affrican Park</a>
                                                                                                </h3>
                                                                                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="front/assets/images/resource/place-4.jpg" alt="">
                                </figure>
                                <!-- <div class="text">
                                                                                                <h3>
                                                                                                    <a href="destination-details.html">Vietnam</a>
                                                                                                </h3>
                                                                                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 link-column">
                        <div class="link-box centred">
                            <h3>
                                Find All<br> Sindbad photos Here
                            </h3><a href="destination.html" class="theme-btn">Find it Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-section end -->

        <!-- funfact-section -->
        <section class="funfact-section centred">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(front/assets/images/shape/shape-3.png);">
                </div>
                <div class="icon anim-icon-2" style="background-image: url(front/assets/images/shape/shape-3.png);">
                </div>
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="pattern"
                                        style="background-image: url(front/assets/images/shape/shape-5.png);"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500"
                                            data-stop="2000">0</span><span>+</span>
                                        <p>
                                            Awesome Hikers
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="pattern"
                                        style="background-image: url(front/assets/images/shape/shape-6.png);"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500"
                                            data-stop="70">0</span><span>+</span>
                                        <p>
                                            Stunning Places
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="pattern"
                                        style="background-image: url(front/assets/images/shape/shape-7.png);"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500"
                                            data-stop="1200">0</span><span>+</span>
                                        <p>
                                            Miles to Hike
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="pattern"
                                        style="background-image: url(front/assets/images/shape/shape-8.png);"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="15">0</span>
                                        <p>
                                            Years in Service
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->

        <!-- testimonial-section -->
        <section class="testimonial-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>
                        Review & Testimonials
                    </p>
                    <h2>
                        Top Reviews for Sindbad Balloon
                    </h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Mike Hardson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-1.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Amy Johnson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-2.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Luaka Smith
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-3.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Mike Hardson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-1.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Amy Johnson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-2.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Luaka Smith
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-3.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Mike Hardson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-1.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Amy Johnson
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-2.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                                <li>
                                    <i class="icon-Star"></i>
                                </li>
                            </ul>
                            <div class="text">
                                <div class="icon"
                                    style="background-image: url(front/assets/images/icons/quote-1.png);"></div>
                                <p>
                                    Lorem ipsum dolor amet consectet adipiscing sed do eiusmod tempor incididunt labore
                                    et dolore magna aliqua ipsum suspen disse ultrices gravida Risus
                                </p>
                            </div>
                            <div class="author-box">
                                <h4>
                                    Luaka Smith
                                </h4><span class="designation">Traveler</span>
                                <figure class="thumb-box">
                                    <img src="front/assets/images/resource/testimonial-3.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->
        <!-- video-section -->
        <section class="video-section centred"
            style="background-image: url(https://scontent.fcai20-4.fna.fbcdn.net/v/t39.30808-6/268456651_4881934941844683_2714106000867013644_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_ohc=UZ4QfH5qJNoAX9SiTo4&_nc_ht=scontent.fcai20-4.fna&oh=00_AT8l9TEVymWvGGH1d6zowitMwaUpppQ1lsjW1qCkiLbw_g&oe=6216C66A);">
            <div class="auto-container">
                <div class="inner-box">
                    <h2>
                        Explore Your Travel
                    </h2>
                    <p>
                        Your New Traveling Idea
                    </p>
                    <div class="video-btn">
                        <a href="../../../www.youtube.com/watch70cf.html?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                            data-caption=""><i class="far fa-play"></i><span
                                class="border-animation border-1"></span><span
                                class="border-animation border-2"></span><span
                                class="border-animation border-3"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->
        <!-- news-section -->
        <section class="news-section sec-pad pb-220">
            <div class="pattern-layer" style="background-image: url(front/assets/images/shape/shape-10.png);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <p>
                        News & Articles
                    </p>
                    <h2>
                        Stay Update with Sindbad Balloon Tips
                    </h2><a href="blog.html" class="theme-btn-two">All Blog Posts</a>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img
                                            src="https://scontent.fcai20-4.fna.fbcdn.net/v/t39.30808-6/273423730_5074706255900883_684182043781827191_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=OkwdH6ssAPIAX84yMcs&_nc_ht=scontent.fcai20-4.fna&oh=00_AT9VycUI8ni4tW81Rec199qqqRBBybkn1e8RQZqLWYOQrQ&oe=62180019"
                                            alt=""></a><span class="post-date"><i class="icon-Calendar"></i>5
                                        Oct,2020</span>
                                </figure>
                                <div class="lower-content">
                                    <div class="category">
                                        <a href="blog-details.html">Lifestyle</a>
                                    </div>
                                    <h3>
                                        <a href="blog-details.html">Including animation in your design system</a>
                                    </h3>
                                    <ul class="post-info clearfix">
                                        <li>
                                            <span>By</span><a href="index.html">Eva Green</a>
                                        </li>
                                        <li>- October 13,2020
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                        labore dolore magna aliqua enim.
                                    </p>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img
                                            src="https://scontent.fcai20-4.fna.fbcdn.net/v/t39.30808-6/272898501_5054083121296530_351263520377884274_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=yTb7yc-gdeUAX_RGHAk&_nc_ht=scontent.fcai20-4.fna&oh=00_AT9F2PWlPx0zk-k4PiGLkCJ5iFe4VwLxpDcce6_XeYoYkw&oe=6217C4C9"></a>
                                    <span class=" post-date"><i class="icon-Calendar"></i>4 Oct,2020
                                    </span>
                                </figure>
                                <div class="lower-content">
                                    <div class="category">
                                        <a href="blog-details.html">Lifestyle</a>
                                    </div>
                                    <h3>
                                        <a href="blog-details.html">Strategic & commercial with issues.</a>
                                    </h3>
                                    <ul class="post-info clearfix">
                                        <li>
                                            <span>By</span><a href="index.html">Eva Green</a>
                                        </li>
                                        <li>- October 13,2020
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                        labore dolore magna aliqua enim.
                                    </p>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="blog-details.html"><img
                                            src="https://scontent.fcai20-4.fna.fbcdn.net/v/t39.30808-6/273029526_5054083071296535_4586770591156309697_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=PuIx7MolMfkAX9bSBCB&tn=Pldt690Crq9LzSyk&_nc_ht=scontent.fcai20-4.fna&oh=00_AT_XP39-C2dtF8J5R1c5AHeBBcYw_b3iPUbYU2kSdG8NHw&oe=6216E418"
                                            alt=""></a><span class="post-date"><i class="icon-Calendar"></i>3
                                        Oct,2020</span>
                                </figure>
                                <div class="lower-content">
                                    <div class="category">
                                        <a href="blog-details.html">Lifestyle</a>
                                    </div>
                                    <h3>
                                        <a href="blog-details.html">Best interior design idea for your home.</a>
                                    </h3>
                                    <ul class="post-info clearfix">
                                        <li>
                                            <span>By</span><a href="index.html">Eva Green</a>
                                        </li>
                                        <li>- October 13,2020
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet consectur adip icing sed do eiusmod tempor incididunt
                                        labore dolore magna aliqua enim.
                                    </p>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->
        <!-- main-footer -->

    </div>
@endsection
