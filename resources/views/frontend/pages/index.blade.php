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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>01</span> Business Consulting</h4>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor enim minim.</p>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>02</span> IT Consulting</h4>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor enim minim.</p>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <h4><span>03</span> Online Consulting</h4>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor enim minim.</p>
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
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center">								
                            <div class="item active">
                                <div class="single_feature">
                                    <i class="fa fa-diamond"></i>
                                    <h3>Our Mission</h3>
                                    <span></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>	
                                </div>
                            </div><!-- END ITEM ACTIVE -->							
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <h3>Our vision</h3>
                                    <span></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>	
                                </div>
                            </div><!-- END ITEM 2 -->						
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-paper-plane-o"></i>
                                    <h3>Our history</h3>
                                    <span></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>
                                </div>
                            </div><!-- END ITEM 3 -->						
                            <div class="item">
                                <div class="single_feature">
                                    <i class="fa fa-heart-o"></i>
                                    <h3>Our Business</h3>
                                    <span></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
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
                    <h2>Projects we have completed</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
                </div>				
                <div class="col-xs-12 text-center">
                    <ul class="portfolio-filters">
                        <li class="filter active" data-filter="all">all</li>
                        <li class="filter" data-filter="graphic">Graphic</li>
                        <li class="filter" data-filter="print">Print</li>
                        <li class="filter" data-filter="webdesign">webdesign</li>
                    </ul>						
                </div><!-- END COL -->
            </div><!-- END ROW -->
            <div class="row">
                <ul class="portfolio-items-list">
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item print graphic" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/1.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/1.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item webdesign" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/2.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/2.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item print graphic" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/3.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/3.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item webdesign graphic" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/4.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/4.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item graphic" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/5.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/5.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                    <li class="col-md-4 col-sm-6 col-xs-12  portfolio-item webdesign print" data-cat="2">
                        <div class="hover-overlay"> 			
                            <img class="img-responsive" src="assets/img/portfolio/6.jpg" alt="Portfolio Image">	
                            <a class="prettyPhoto image_zoom" href="assets/img/portfolio/6.jpg" title="Project Image">
                                <div class="item-overlay">										
                                    <div class="overlay-content">
                                        <h4 class="small-title">Project Title Here</h4>
                                        <h5>Project Category</h5>
                                    </div>
                                </div>	  
                            </a>
                        </div>
                    </li><!-- END PORTFOLIO IMAGE -->
                </ul>
            </div><!-- END ROW  -->
            <div class="portfolio_btn text-center">
                <a href="#" class="btn btn-default btn-portfolio-bg">See More Work</a>
            </div>
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END PORTFOLIO -->

    <!-- START PROMOTION -->
    <section class="promotions" style="background-image: url(assets/img/bg/promotions-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="promotion_content">
                        <h1>Your choice is our big choice</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit tortor. Quisque bibendum mauris velit, sed tincidunt massa lacinia nec. Mauris rutrum viverra metus, vel aliquet libero eleifend eu.</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
                </div>				
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="flexslider testi-slider wow animated fadeInUp" data-wow-delay=".06s">
                        <ul class="slides">
                            <li>
                                <div class="testi-slider-item">
                                    <div class="team_img">
                                        <img src="assets/img/team/team-1.jpg" class="img-responsive" alt="">
                                    </div>
                                        <h6>Syed Ekram</h6>                 
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a consequat nibh. Praesent sodales enim facilisis accumsan rhoncus.</p>
                                    <div class="skills">
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">design</p>
                                            <div class="progress-bar">
                                                <span data-percent="95"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Development </p>
                                            <div class="progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Marketing </p>
                                            <div class="progress-bar">
                                                <span data-percent="75"></span>
                                            </div>
                                        </div>	
                                    </div><!-- END PROGRESS BAR-->
                                    <div class="team_social">
                                        <ul>
                                            <li><a class="f_facebook  wow bounceInDown" data-wow-delay=".1s" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="f_twitter wow bounceInDown" data-wow-delay=".2s" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="f_google wow bounceInDown" data-wow-delay=".3s" href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".4s" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div><!--END TEAM SOCIAL-->
                                </div>
                            </li><!--SINGLE SLIDE-->
                            <li>
                                <div class="testi-slider-item">
                                    <div class="team_img">
                                        <img src="assets/img/team/team-2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <h6>Habiba Islam</h6>                      
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a consequat nibh. Praesent sodales enim facilisis accumsan rhoncus.</p>
                                    <div class="skills">
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">design</p>
                                            <div class="progress-bar">
                                                <span data-percent="95"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Development </p>
                                            <div class="progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Marketing </p>
                                            <div class="progress-bar">
                                                <span data-percent="75"></span>
                                            </div>
                                        </div>	
                                    </div><!-- END PROGRESS BAR-->
                                    <div class="team_social">
                                        <ul>
                                            <li><a class="f_facebook  wow bounceInDown" data-wow-delay=".1s" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="f_twitter wow bounceInDown" data-wow-delay=".2s" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="f_google wow bounceInDown" data-wow-delay=".3s" href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".4s" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div><!--END TEAM SOCIAL-->										
                                </div>
                            </li><!--SINGLE SLIDE-->
                            <li>
                                <div class="testi-slider-item">
                                    <div class="team_img">
                                        <img src="assets/img/team/team-3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <h6>Masum Billah</h6>                      
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a consequat nibh. Praesent sodales 	enim facilisis accumsan rhoncus.</p>
                                    <div class="skills">
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">design</p>
                                            <div class="progress-bar">
                                                <span data-percent="95"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Development </p>
                                            <div class="progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Marketing </p>
                                            <div class="progress-bar">
                                                <span data-percent="75"></span>
                                            </div>
                                        </div>	
                                    </div><!-- END PROGRESS BAR-->
                                    <div class="team_social">
                                        <ul>
                                            <li><a class="f_facebook  wow bounceInDown" data-wow-delay=".1s" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="f_twitter wow bounceInDown" data-wow-delay=".2s" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="f_google wow bounceInDown" data-wow-delay=".3s" href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".4s" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div><!--END TEAM SOCIAL-->										
                                </div>
                            </li><!--SINGLE SLIDE-->
                            <li>
                                <div class="testi-slider-item">
                                    <div class="team_img">
                                        <img src="assets/img/team/team-4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <h6>Nurhajan Akter</h6>                      
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a consequat nibh. Praesent sodales enim facilisis accumsan rhoncus.</p>
                                    <div class="skills">
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">design</p>
                                            <div class="progress-bar">
                                                <span data-percent="95"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Development </p>
                                            <div class="progress-bar">
                                                <span data-percent="90"></span>
                                            </div>
                                        </div>	
                                        <div class="progress-bar-linear">
                                            <p class="progress-bar-text">Marketing </p>
                                            <div class="progress-bar">
                                                <span data-percent="75"></span>
                                            </div>
                                        </div>	
                                    </div><!-- END PROGRESS BAR-->
                                    <div class="team_social">
                                        <ul>
                                            <li><a class="f_facebook  wow bounceInDown" data-wow-delay=".1s" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="f_twitter wow bounceInDown" data-wow-delay=".2s" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="f_google wow bounceInDown" data-wow-delay=".3s" href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="f_linkedin wow bounceInDown" data-wow-delay=".4s" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div><!--END TEAM SOCIAL-->
                                </div>
                            </li><!--SINGLE SLIDE-->
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae.</p>						
                        <ul>
                            <li><i class="fa fa-rocket"></i>2369 Robinson Lane Jackson,OH 45640</li>
                            <li><i class="fa fa-phone"></i>(+1) 740-395-3829</li>
                            <li><i class="fa fa-envelope"></i>Info@accede.com</li>
                            <li><i class="fa fa-clock-o"></i>Mon - Fri: 08.00 - 16.00</li>
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