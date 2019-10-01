<!--==========================
      Career Section
    ============================-->
    <section id="careers" >
    <div class="parallaxc1 rellax"></div>

      <div class="container">

		  <div class="career-content">
            <div class="wow bounceInUp"  data-wow-duration="1.2s">
              <h2 class="opencareers"><span class="pinkbox">Join Stunnerypp</span>Open Careers</h3>
              <p>Feel fulfilled. Have fun. Help us to shape the future of safety, security and compliance.</p>
              </div>
              <!--List Jobs Row-->
              
              <div class="container1 wow bounceInUp"  data-wow-duration="1.2s">
                  <div class="row role">
                    <div class="col-sm">
                      Role
                    </div>
                    <div class="col-sm">
                      Description
                    </div>
                    <div class="col-sm">
                     &nbsp;
                    </div>
                  </div>
                </div><!--List Jobs Row-->
              
              @foreach ($jobs->take(5) as $job)  
                <!--List Jobs Row-->
              <div class="container2 wow bounceInUp"  data-wow-duration="1.4s">
                  <div class="row">
                    <div class="col-sm jobtitle">
                      {{ $job->title }}
                    </div>
                    <div class="col-sm jobdesc">
                      {{ str_limit($job->description, $limit = 50, $end = '...') }}
                    </div>
                    <div class="col-sm">
                       <a class="btn btn-three" href="{{ route('job', $job->slug) }}">
                        <span>Apply Now</span>
                      </a>
                    </div>
                  </div>
                </div><!--List Jobs Row-->
                @endforeach
            
            
        
      </div>
	  </div>
      

    </section><!-- #career -->
