@extends('stunner')

@section('content')
	<style type="text/css">
		
		.form-app{
			border-radius: 10px;
		    box-shadow: none;
		    border: none;
		    font-size: 14px;
		}
	</style>
	<section id="careers" class="section-bg" >
	    	{{-- <div class="parallaxc1 rellax"></div>
 --}}
	      	<div class="container">

			  <div class="career-content">

			  		<div class="row">
			  			<div class="col-lg-12" style="margin-top: 60px">
			  					
			  			</div>
			  			<div class="col-lg-6 col-md-12 col-xs-12">
			  				<div class="form wow bounceInRight"  data-wow-duration="1s">

								@if (\Session::has('success'))
									<h4 style="color: #00c53c;font-weight: bold;">
										{!! \Session::get('success') !!}
									</h4>
								@endif
								@if (\Session::has('error'))
									<h4 style="color: #d82123;font-weight: bold;">
										{!! \Session::get('error') !!}
									</h4>
								@endif
				              	<h2>{{ $job->title }}</h2>
			  					<small>{{  $job->description }}</small>
			  					<hr>
				              <form action="{{ route('submit-application') }}"  enctype="multipart/form-data" method="post" style="padding: 0 0 40px">
				              	{{ csrf_field() }}
				              	<input type="text" name="job_id" hidden value="{{ $job->id }}" >
				                <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
										  <input type="text" name="name" class="form-control form-app" id="name" required="" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
										  <div class="validation"></div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
										  <input type="email" class="form-control form-app" name="email" required="" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
										  <div class="validation"></div>
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-lg-12">
										<div class="form-group">
										  <span title="Upload Resume" class="btn-block text-center" id="btnupload" style="padding: 9px;border-radius: 50px;cursor: pointer;color: #fff;background-color: #830001;border-color: #830001;">Upload Resume  <span class="fa fa-check" style="color:green"  id="txtcheck"></span></span>

										  <span hidden>
										  	<input type="file" name="resume" id="btnresume">

										  </span>

										  
										  <div class="validation" data-msg="Please input resume"></div>
										</div>
									</div>
								</div>
								<hr>
				                <div class="text-center">
				                	<button type="submit" title="Send Message" class="btn btn-danger">Send application</button>
				                </div>
				              </form>
				            </div>
			  			</div>
			  			
			  		</div>
			  </div>


			</div>
	</section>


@endsection

@section('page-javascripts')

<script>

$( document ).ready(function() {
    $("#txtcheck").hide();
});

  $("#btnupload").click(function () {
  	$("#btnresume").click();
  })


  $("#btnresume").on('change',function () {
  		
  	var fileName = $(this).val();

    if(fileName) { // returns true if the string is not empty
    	$("#txtcheck").fadeIn();
    }

  })

  

</script>


@endsection