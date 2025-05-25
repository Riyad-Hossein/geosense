@extends('frontend.layouts.layout')

@section('frontend_content')    
    <!-- START SlIDER -->	
    <section id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key=>$slider)
                    <div class="item {{$key==0? 'active' : ''}}" style="background-image: url({{$slider->show_image}})">
                        <div class="caption">
                            <h2 class="animated fadeInDownBig">{{$slider->title}}</h2>
                            <p class="animated fadeInLeftBig">{{$slider->description}}</p>
                            <a data-scroll class="btn btn-default btn-light-bg animated fadeInUpBig page-scroll" href="#contact">Contact us</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
        </section>
    <!-- END SlIDER -->

    <!-- START ABOUT US -->
    <section id="about" class="about_us section-padding">
        <div class="container">
            <div class="row ">
                <div class="section-title text-center wow zoomIn">
                    <h2>We are GeoSense Global</h2>						
                    <span></span>
                    <p>Providing innovative GIS, remote sensing, and ICT solutions to empower organizations and researchers with smarter decisions.</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>01</span> GIS & Remote Sensing Solutions</h4>
                        <span></span>
                        <p>We specialize in GIS mapping, satellite image analysis, and geospatial data processing to deliver practical and effective solutions.</p>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>02</span> Research and Consultancy</h4>
                        <span></span>
                        <p>Our team supports research projects and offers expert consultancy to solve real-world challenges in diverse fields.</p>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>03</span> Integrated Smart Solutions</h4>
                        <span></span>
                        <p>We create smart systems, digital twins, and user-friendly web and mobile applications for seamless data-driven decisions.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US -->		

    <!-- START OUR MISSION & VISION -->
    <section class="why_choose_us section-padding" style="background-image: url('{{ asset('assets/frontend/img/bg/bg1.jpg') }}');  background-size:cover; background-position: center center;background-attachment:fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div id="why_choose" class="carousel slide" data-ride="carousel" data-interval="9999999">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#why_choose" data-slide-to="0" class="active"></li>
                            <li data-target="#why_choose" data-slide-to="1"></li>
                            <li data-target="#why_choose" data-slide-to="2"></li>
                            <li data-target="#why_choose" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center">								
                            <div class="item active">
                                <div class="single_feature">
                                    <i class="fa fa-diamond"></i>
                                    <h3>Our Mission</h3>
                                    <span></span>
                                    <p>To provide innovative GIS, remote sensing, and ICT solutions that empower organizations and researchers to solve challenges and make smarter decisions.</p>	
                                </div>
                            </div><!-- END ITEM ACTIVE -->							
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <h3>Our vision</h3>
                                    <span></span>
                                    <p>To be a global leader in geospatial intelligence and digital innovation, advancing sustainable development through precise, data-driven insights and transformative technology.</p>	
                                </div>
                            </div><!-- END ITEM 2 -->						
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-paper-plane-o"></i>
                                    <h3>Our history</h3>
                                    <span></span>
                                    <p>Since its inception, Geosense Global has been dedicated to bridging the gap between cutting-edge geospatial technology and real-world challenges. With a strong foundation in research and innovation, we have continually evolved to meet the growing needs of diverse industries and communities.</p>
                                </div>
                            </div><!-- END ITEM 3 -->						
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-heart-o"></i>
                                    <h3>Our Business</h3>
                                    <span></span>
                                    <p>Geosense Global specializes in delivering comprehensive solutions in GIS, remote sensing, and ICT. Our services empower clients to manage resources effectively, plan intelligently, and act decisively using spatial data and customized digital tools tailored to their needs.</p>
                                </div>
                            </div><!-- END ITEM 4 -->
                        </div><!-- END CAROUSEL INNER -->
                    </div><!-- END CAROUSEL SLIDE -->				
                </div><!--- END COL -->	
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->		
    </section>
    <!-- END OUR MISSION & VISION -->

    <!-- START SERVICE  -->
    <section id="service" class="our_service section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="section-title wow zoomIn">
                    <h2>Our Services</h2>
                    <span></span>
                    <p>We offer a wide range of professional services tailored to meet your business needs. From strategic planning to full-scale execution, our team is dedicated to delivering exceptional results with every project.</p>
                </div>

                @foreach ($services as $service)    
                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <a href="#">   
                            <div class="single_service">
                                <!-- <i class="fa fa-camera-retro"></i> -->
                                <img src="{{$service->show_image}}" alt="">
                                <h4>{{$service->name??'N/A'}}</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p> -->
                            </div>
                        </a>
                    </div>
                @endforeach
            </div><!--END  ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END SERVICE-->		

    <!-- START PORTFOLIO -->
    <section id="portfolio" class="our_portfolio section-padding">
        <div class="container">
            <!-- PORTFOLIO FILTER BUTTONS -->	
            <div class="row">	
                <div class="section-title text-center wow zoomIn">
                    <h2>Projects We Have Completed</h2>
                    <span></span>
                    <p>Explore some of the successful projects we've delivered across various industries. Each project showcases our commitment to quality, innovation, and customer satisfaction.</p>
                </div>
				
                <div class="col-xs-12 text-center">
                    <ul class="portfolio-filters">
                        <li class="filter active" data-filter="all">all</li>
                        @foreach($service_categories as $category)
                            <li class="filter" data-filter="{{$category?->slug}}">{{$category?->name}}</li>
                        @endforeach
                    </ul>						
                </div>
            </div><!-- END ROW -->
            <div class="row">
                <ul class="portfolio-items-list">
                    @foreach($projects as $project)
                        <li class="col-md-4 col-sm-6 col-xs-12 portfolio-item {{$project?->project_category?->slug}}" data-cat="2">
                            <div class="hover-overlay"> 			
                                <img class="img-responsive" src="{{$project?->show_image}}" alt="Portfolio Image">	
                                <a class="prettyPhoto image_zoom" href="{{$project?->show_image}}" title="Project Image">
                                    <div class="item-overlay">										
                                        <div class="overlay-content">
                                            <h4 class="small-title">{{$project?->name}}</h4>
                                            <h5>{{$project?->project_category?->name}}</h5>
                                        </div>
                                    </div>	  
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div><!-- END ROW  -->
            <!-- <div class="portfolio_btn text-center">
                <a href="#" class="btn btn-default btn-portfolio-bg">See More Work</a>
            </div> -->
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END PORTFOLIO -->

    <!-- START PROMOTION -->
    <section class="promotions" style="background-image: url(assets/img/bg/promotions-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="promotion_content">
                        <h1>Your Data, Our Expertise – Transforming Challenges into Solutions.</h1>
                        <p>Providing innovative GIS, remote sensing, and ICT solutions to solve complex challenges and support sustainable development.</p>
                        <a href="#contact">get start</a>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW  -->
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END PROMOTION -->

    <!-- START TEAM -->
    <section id="team" class="our_team section-padding">
        <div class="container">
            <div class="row">	
                <div class="section-title text-center wow zoomIn">
                    <h2>Our Experts</h2>
                    <span></span>
                    <p>Meet our team of experienced professionals who are dedicated to delivering exceptional results. With deep industry knowledge and a passion for excellence, our experts are here to guide you every step of the way.</p>
                </div>
				
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="flexslider testi-slider wow animated fadeInUp" data-wow-delay=".06s">
                        <ul class="slides">
                            @foreach($team_members as $team)
                                <li>
                                    <div class="testi-slider-item">
                                        <div class="team_img">
                                            <img src="{{$team->show_image}}" class="img-responsive" alt="">
                                        </div>
                                        <h6>{{$team?->name}}</h6>                 
                                        <p>{{$team?->description}}</p>
                                        
                                        <div class="team_social">
                                            <ul>
                                                <li><a class="f_facebook  wow bounceInDown" data-wow-delay=".1s" href="{{$team?->facebook_url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="f_twitter wow bounceInDown" data-wow-delay=".2s" href="{{$team?->twitter_url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="f_google wow bounceInDown" data-wow-delay=".3s" href="{{$team?->email}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".4s" href="{{$team?->linkedin_url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div><!--END TEAM SOCIAL-->
                                    </div>
                                </li>
                            @endforeach
                        </ul><!--- END SLIDES -->
                    </div><!--- END FLEXSLIDER -->
                </div><!--- END COL -->
            </div><!-- END ROW  -->
        </div><!-- END CONTAINER  -->
    </section>	
    <!-- END TEAM -->

    <!-- START BLOG -->
    <section id="blog" class="home_blog section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center wow zoomIn">
                    <h2>Latest Blog</h2>
                    <span></span>
                    <p>Explore our latest articles, insights, and updates on topics that matter. Stay informed, inspired, and engaged with fresh content curated just for you.</p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <article class="blog-post">						
                        <div class="post-img"> <img src="assets/img/blog/blog-1.jpg" alt=""></div>	
                        <h4>Blog Title Here</h4>					
                        <!-- BLOG DETAIL --> 
                            <span class="post-bt">by <span class="text-color-primary">Accede</span></span>
                        <ul class="post-info">
                            <li> <i class="fa fa-comments-o"></i>97 </li>
                            <li> <i class="fa fa-eye"></i>565 </li>
                            <li> <i class="fa fa-bookmark-o"></i>Web Design </li>
                            <li> <span class="date font-crimson">28 August</span> </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation </p>
                        <a class="btn btn-lg btn-blog-bg" href="#">Read more</a>
                    </article>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <article class="blog-post">						
                        <div class="post-img"> <img src="assets/img/blog/blog-2.jpg" alt=""></div>	
                        <h4>Blog Title Here</h4>					
                        <!-- BLOG DETAIL --> 
                            <span class="post-bt">by <span class="text-color-primary">Accede</span></span>
                        <ul class="post-info">
                            <li> <i class="fa fa-comments-o"></i>97 </li>
                            <li> <i class="fa fa-eye"></i>565 </li>
                            <li> <i class="fa fa-bookmark-o"></i>Development </li>
                            <li> <span class="date font-crimson">29 August</span> </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation.</p>
                        <a class="btn btn-lg btn-blog-bg" href="#">Read more</a>
                    </article>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <article class="blog-post">						
                        <div class="post-img"> <img src="assets/img/blog/blog-3.jpg" alt=""></div>	
                        <h4>Blog Title Here</h4>					
                        <!-- BLOG DETAIL --> 
                            <span class="post-bt">by <span class="text-color-primary">Accede</span></span>
                        <ul class="post-info">
                            <li> <i class="fa fa-comments-o"></i>97 </li>
                            <li> <i class="fa fa-eye"></i>565 </li>
                            <li> <i class="fa fa-bookmark-o"></i>Branding </li>
                            <li> <span class="date font-crimson">30 August</span> </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation.</p>
                        <a class="btn btn-lg btn-blog-bg" href="#">Read more</a>
                    </article>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT FORM-->
    <section id="contact" class="contact_area" style="background-image: url(assets/img/bg/contact-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
        <div class="container">
            <div class="row">		
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                    <div class="contact_address">
                        <h3>Contact Us</h3>
                        <p>If you have any inquiries or require assistance, please do not hesitate to contact our support team.</p>						
                        <ul>
                            <li><i class="fa fa-rocket"></i>Markt 70, 2611 GW Delft, Netherlands</li>
                            <li><i class="fa fa-phone"></i>+351920611769</li>
                            <li ><i class="fa fa-envelope"></i>geosenseglobal@gmail.com</li>
                            <li><i class="fa fa-clock-o"></i>•	Mon - Fri: 08.00 - 16.00</li>
                        </ul>
                    </div>
                </div><!-- END COL -->						
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                    <div class="contact">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="actions">
                                        <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->				
        </div><!--- END CONTAINER -->	
    </section>
    <!-- END CONTACT FORM -->

    <!-- START MAP -->
    <div id="map"></div>
    <!-- END MAP -->

@endsection