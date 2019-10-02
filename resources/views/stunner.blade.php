<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>StunnerYPP</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/fontawesome-free-5.11.2-web/css/all.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('lib/popup/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('lib/popup/style.css')}}">
  <meta name="theme-color" content="#d82123">

  {{-- <script async src="{{asset('lib/cloud3d/analytic.js')}}"></script>
	<script src="{{asset('lib/cloud3d/cloud3d.js')}}"></script>
	<link href="{{asset('lib/cloud3d/cloudstyle.css')}}" rel="stylesheet"> --}}
  <script>
  window.console = window.console || function(t) {};
	</script>

	<script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>
    
   
  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
 	<link rel="stylesheet" media="screen" href="{{asset('css/particle_style.css')}}">
</head>

<body>
	
  @include('includes.clouds');
		
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div class="container">

      <div class="logo float-left">
        <a href="{{url('/')}}#intro" class="scrollto"><img src="{{asset('img/logo.png')}}" alt="StunnerYPP" class="img-fluid lazy"></a>
      </div>

      <nav class="main-nav d-none d-lg-block">
        <ul class="main-nav-ul">
          <li class="active">
          <a href="{{url('/')}}#intro" class="nav-container stunner">
            <div class="nav-cube">
                <div class="front">
                Home
                </div>
                <div class="bottom">
                Home
                </div>
            </div>
          </a>
          </li>
          <li>
          <a href="{{url('/')}}#services" class="nav-container stunner">
            <div class="nav-cube">
                <div class="front">
                Services
                </div>
                <div class="bottom">
                Services
                </div>
            </div>
          </a>
          </li>
          
          <li>
          <a href="{{url('/')}}#about" class="nav-container stunner">
            <div class="nav-cube">
                <div class="front">
                About
                </div>
                <div class="bottom">
                About
                </div>
            </div>
          </a>
          </li>
          
          <li>
          <a href="{{url('/')}}#careers" class="nav-container stunner">
            <div class="nav-cube">
                <div class="front">
                Careers
                </div>
                <div class="bottom">
                Careers
                </div>
            </div>
          </a>
          </li>
          
          <li>
          <a href="{{url('/')}}#footer" class="nav-container stunner">
            <div class="nav-cube">
                <div class="front">
                Contact
                </div>
                <div class="bottom">
                Contact
                </div>
            </div>
          </a>
          </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
   
  

  <main id="main">

    @yield('content')
 
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 wow bounceInLeft"  data-wow-duration="1s">

            <div class="row">

                <div class="col-sm-8">

                  <div class="footer-info">
                    <a href="#header"><img src="{{asset('img/logo2.png')}}" alt="StunnerYPP" class="img-fluid lazy"></a>
                    <p>StunnerYPP delivers fast and high-quality services for decades with the help of our advanced Content Delivery Network (CDN). We offer the best strategic servers that are all house content. With this, we reached internet users much quicker than most other sites.</p>
                  </div>

                  

                </div>

                <div class="col-sm-4">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#services">Services</a></li>
                      <li><a href="#about">About us</a></li>
                      <li><a href="#careers">Careers</a></li>
                    </ul>
                  </div>
                  </div>
     
            </div>
			
			<div class="row">
                  <div class="col-sm-12">

                  
                    <h4>Contact Us</h4>
                    <p>
                      <strong>Address: </strong>24K IBM Plaza Building, Eastwood City <br>
					  Bagumbayan, Libis, Quezon City, Philippines <br>
					  <strong>Email:</strong> info@stunnermedia.com<br>
                    </p>
                  

                  </div>

                </div>

          </div>

          <div class="col-lg-6">

            <div class="form wow bounceInRight"  data-wow-duration="1s">
              
              <h4>Feel fulfilled. Have fun. Grow with us.</h4>
              <p>When it comes to managing safety, security and compliance for your business, you need a great company. Contact us to discuss how StunnerYPP best fits your business growth.</p>
              @if (\Session::has('success_message'))
                  <h4 style="color: #00c53c;font-weight: bold;">
                    {!! \Session::get('success_message') !!}
                  </h4>
                @endif
              <form action="{{ route('contact') }}" method="post" role="form">
                {{ csrf_field() }}
                <div class="row">
        					<div class="col-lg-6">
        						<div class="form-group">
        						  <input type="text" name="name" class="form-control" required="" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        						  <div class="validation"></div>
        						</div>
        					</div>
        					<div class="col-lg-6">
        						<div class="form-group">
        						  <input type="email" class="form-control" name="email" required="" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
        						  <div class="validation"></div>
        						</div>
        					</div>
        				</div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>StunnerYPP</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <!-- Popup itself -->
<div id="web-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
		<div class="col-lg-6">    
        <h2>Web and Graphic Design</h2>
        <img src="{{ asset('img/web_design_and_graphic_design.svg')}}" class="lazy" alt="Web and Graphic Design">
        </div>
        
        <div class="col-lg-6">
    	<p>StunnerYPP offers a wide range of graphic and web designs that can bring out a website's full potential. We value bringing designs that are on par with the client's vision, perspective and target market. Making contemporary design concepts thru applications such as Adobe Photoshop and Adobe Illustrator is one of the company's best assets.</p><p>
Moreover, clients have full control of their website's vision and target. StunnerYPP easily adjusts to the client's needs and wants. The company's design team has the experience and versatility to be able to reach any client will need.

</p>
		</div>
		
	</div>
</div>

<div id="webdev-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Web Development</h2>
        <img src="{{ asset('img/website_development_company.svg')}}" class="lazy" alt="Web Development">
        </div>
        
         <div class="col-lg-6">
        <p>StunnerYPP is in the business of providing design, development, back-office and any other related services. The company is mostly engaged with US, Canada and Australian clients and are involved in various cutting-edge and state-of-the-art web development projects and e-commerce sites.</p><p>
    Our development team understands the latest web applications and programming practices through education, study and participation conferences, workshops and groups.</p>
        </div>
    </div>    

</div>

<div id="affiliate-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Affiliate Marketing</h2>
        <img src="{{ asset('img/affiliate_marketing_website.svg')}}" class="lazy" alt="Affiliate Marketing">
        </div>
        
        <div class="col-lg-6">
    	<p>StunnerYPP has an incredible track record when it comes to affiliate marketing. We have been doing it since 1999. The market and the business model has gone through significant changes over the last few years but we've always believed that in working openly, honestly and closely with our affiliates can establish a long term relationship.</p><p>
We house multiple programs wherein there is stable growth and reliable paysites where affiliates can get the most of and convert a significant amount of traffic to earn more from their websites.
We also handle affiliate payouts to save time and trouble for our clients.</p>
		</div>
  </div>      

</div>

<div id="sm-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Site Management</h2>
        <img src="{{ asset('img/site_management.svg')}}" class="lazy" alt="Site Management">
        </div>
    
         <div class="col-lg-6">
         <p>StunnerYPP Site Management services offer great opportunities to build your business effectively. With our excellent engineers, we develop tours that convert, analyze and optimize traffic, manage content and more.  We promote the website in the best way to achieve the goals and build a relationship between your site and the user. With the help of this, your website gains the right target and customer. </p>
        </div>
    </div>
</div>

<div id="social-popup" class="white-popup mfp-with-anim mfp-hide">
    <div class="row">
        <div class="col-lg-6">
        <h2>Social Media</h2>
        <img src="{{ asset('img/social_media_management.svg')}}" class="lazy" alt="Social Media">
        </div>

        <div class="col-lg-6">
        <p>Accelerate your marketing with StunnerYPP social media services.  Our social team will save your businesses more time and generate more results. We plan and create your content strategy that is perfectly suited for your business. We use relevant social media marketing services and use multiple social networks to connect with customers and grow your brand on social media.</p>
        <p>Why StunnerYPP should handle your social media?</p>
        <ul>
            <li>We create and manage top-performing social media campaigns for businesses.</li>
            <li>We create content strategies for brands.</li>
            <li>Our social team will get people talking about your product or service.</li>
            <li>Companies deserve expert social media management.</li>
        </ul>
        </div>
    </div>    
</div>

<div id="cs-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Customer Support</h2>
        <img src="{{ asset('img/customer_support_specialist.svg')}}" class="lazy" alt="Customer Support">
        </div>
    
        <div class="col-lg-6">
        <p>Let StunnerYPP handle your large number of customer inquiries. With our experienced team and advanced solutions, we'll keep it all organized with tags, tickets, and open lines of communication.</p>
        <p>StunnerYPP has the perfect customer service software for your business that can handle your support effectively and efficiently. With this, all your customer requests are prioritized and are managed based on the time they are received and the type of requests.</p>
        <ul>
            <li>AFFILIATE PROGRAM MANAGEMENT</li>
            <li>CONTENT DELIVERY NETWORK</li>
            <li>PAYMENT PROCESSING</li>
            <li>RECORDS MANAGEMENT</li>
        </ul>
        </div>
      </div>
</div>

<div id="marketing-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Marketing</h2>
        <img src="{{ asset('img/online_marketing_services.svg')}}" class="lazy" alt="Marketing">
        </div>
    
        <div class="col-lg-6">
        <p>Our Marketing management team is skilled and experienced to put your site on the spotlight. The work is not yet done when you are finished creating the site. Our innovative marketing campaigns will help your business reach and target multiple audiences. With StunnerYPP, your website is continuously working on the right track.</p>
        </div>
     </div>
</div>

<div id="content-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Content Management</h2>
        <img src="{{ asset('img/content_management.svg')}}" class="lazy" alt="Content Management">
        </div>
		
        <div class="col-lg-6">
        <p>Build a future-based framework of content management with StunnerYPP.  Our Content management system (CMS) services offer a custom-built specification for your company. This means, we only manage within your unique, custom web design. With StunnerYPP, your project receives personalized attention and is built 100% to your goals and objectives.</p>
        </div>
     </div>   
</div>

<div id="software-popup" class="white-popup mfp-with-anim mfp-hide">
	<div class="row">
        <div class="col-lg-6">
        <h2>Software Development</h2>
        <img src="{{ asset('img/software_development_company.svg')}}" class="lazy" alt="Software Development">
        </div>
         <div class="col-lg-6">
        <p>StunnerYPP software development team processes and creates an application to do specific tasks that a client model requires - may it be on a desktop computer, macs and mobile devices. This includes extensive research, software overall design, programming and intensive quality assurance of the software.</p>
        <p>
Our team is dedicated to create our clients' business much easier as we can maintain, update and monitor your new or existing database.</p>
        <p>
We have a large pool of highly-skilled and experienced Software Developers in the Philippines and in Canada. We can easily find the right fit for our partners!
		</p>
        </div>
        </div>
</div>
<!-- partial -->
  
   
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  {{-- <script src="{{ asset('contactform/contactform.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('lib/popup/script.js')}}"></script>
  
  <script src="{{ asset('lib/typed/typed.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  {{-- <script src="{{ asset('lib/cloud3d/cloudscript.js')}}"></script> --}}
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js'></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
  <script type="text/javascript">
    $(function() {
        $('.lazy').Lazy();
    });
  </script>
  
  @yield('page-javascripts')


</body>
</html>
