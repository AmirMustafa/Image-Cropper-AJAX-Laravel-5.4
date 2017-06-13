<?php

    $uemail = $reward_mail = Session::get('email');
?>
<?php
	foreach($fetch as $fetch) {
		$full_name = $fetch->first_name." ".$fetch->last_name;
		$website = $fetch->U_link;
	} 
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif
 	<script src="{{URL::to('public/src/js/amaje.kickstart.min.js')}}"></script>
 	<link rel="stylesheet" href="{{URL::to('public/src/css/amaje.min.css')}}" media="screen">
<style>
  
</style>
	<div class="wrapper " >
		<div class="container">
			<div class="row">								
				<div class="col-xs-2 ">	
					<div class="text-center">	
					 	<img src="resources/views/img/campnr_profile.jpg" class="img-responsive img-circle" alt="campaigner profile pic"/> 
						  
					</div>
				</div>
				<div class="col-xs-9 profiler">	
					<div class="row">	
						<div class="col-sm-9">	
							<h3 class="name"> <?php if($full_name) {echo " ". $full_name;} else { echo "www.example.com"; } ?> </h3>
						</div>
						<div class="col-sm-3">	
							<h5 class="pull-right backd"  title=""> 1 Hosted | 2 Backed <i data-placement="bottom"data-toggle="popover" data-content="It is important that they have helped world become a better place, but not by how much. We think they're cool."  class="fa fa-info-circle help"></i> 	</h5> 
							 
						</div>
					</div>
					<h5 class="place"> <i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Delhi NCR </h5>
					<h5 class="web"> <i class="fa fa-globe"></i><?php if($website) {echo " &nbsp;". $website;} else { echo "www.example.com"; } ?></h5>
				<!--<div class="saparator"></div>	 -->
				</div>	
			</div>			
		</div>
	
		<div class="details-menu" id="details-menu">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">						
						<h3 class="proj-ttl"> Jeremy Rose </h3>
							<ul class="nav nav-tabs prof-tabs" >
								<li class="active"> <a href="#Timeline" data-toggle="tab">Timeline</a></li>
								<li><a href="#Hosted" data-toggle="tab">Hosted</a></li>
								<li><a href="#Backed" data-toggle="tab">Backed </a></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="Timeline">
						<!-- TIMELINE EXTERNAL FILE INCLUDED: START -->
								
								@include('frontend.timeline')

								<!-- TIMELINE EXTERNAL FILE INCLUDED: END -->
						</div>
						
						<div class="tab-pane " id="Hosted">
							<div class="row ">									
								<div class="col-md-4 col-sm-6 ">
									<a href="#">							
									<div id="card" class="card">
										<img src="resources/views/img/earphone.jpg" alt="project image" class="img-responsive"/>
										<!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->
										<div class="pad-lr-25">
										<a href="{{ route('campaign') }}">	<h5 class="author pad-15"> Nura - Headset reinvented for perfect silence 
			and luxury that your ears deserve<span> </span> </h5></a>
											<ul class="list-inline  bdr-btm">
											<li>  Nura Inc.  </li> 
											<li class="pull-right">   New Delhi, DL </li> 								
											</ul>
											<p class="par"> Project description econdo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit. </p>
											
																			
											<div class="progress mt-20">
											  <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
												<span class="sr-only">70% Complete</span>
											  </div>
											</div>

											<ul class="list-inline card-stage">
											<li>  55% <p> Funded </p> </li> 
											<li>  $125 <p> Pledged </p> </li>  
											<li>  12 <p> Days to go </p> </li> 
											
											</ul>
										</div>
									</div></a>
								</div><!-----card end------->
							</div>
						</div><!-----tab end------->
						<div class="tab-pane " id="Backed">
							<div class="row ">									
								<div class="col-md-4 col-sm-6 ">
									<a href="#">							
									<div id="card" class="card">
										<img src="resources/views/img/earphone.jpg" alt="project image" class="img-responsive"/>
										<!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->
										<div class="pad-lr-25">
										<a href="{{ route('campaign') }}">	<h5 class="author pad-15"> Nura - Headset reinvented for perfect silence 
			and luxury that your ears deserve<span> </span> </h5></a>
											<ul class="list-inline  bdr-btm">
											<li>  Nura Inc.  </li> 
											<li class="pull-right">   New Delhi, DL </li> 								
											</ul>
											<p class="par"> Project description econdo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit. </p>
											
																			
											<div class="progress mt-20">
											  <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
												<span class="sr-only">70% Complete</span>
											  </div>
											</div>

											<ul class="list-inline card-stage">
											<li>  55% <p> Funded </p> </li> 
											<li>  $125 <p> Pledged </p> </li>  
											<li>  12 <p> Days to go </p> </li> 
											
											</ul>
										</div>
									</div></a>
								</div><!-----card end------->
								
								<div class="col-md-4  col-sm-6">
									<a href="campaign.php">
									<div class="card">
										<img src="resources/views/img/Meenakari_e.jpg" alt="project image" class="img-responsive"/>
										<!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->
										<div style="border 1px solid #000!important;" class="pad-lr-25">
											<h5 class="author pad-15"> Nura - Headset reinvented for perfect silence 
			and luxury that your ears deserve<span> </span> </h5>
											<ul class="list-inline bdr-btm">
											<li>  Nura Inc.  </li> 
											<li class="pull-right">   New Delhi, DL </li> 								
											</ul>
											<p class="par"> Project  econdo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.description in sit description. </p>
											
																			
											<div class="progress mt-20">
											  <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
												<span class="sr-only">70% Complete</span>
											  </div>
											</div>

											<ul class="list-inline card-stage">
											<li>  125% <p> Funded </p> </li> 
											<li>  $125 <p> Pledged </p> </li>  
											<li>  52 <p> Days to go </p> </li> 
											
											</ul>
										</div>
									</div></a>
								</div><!-----card end------->
								 
								
							</div> <!-----row end------->
                 	 
						</div>
						 
						 
					</div>
				</div>
			</div>
			
		</div>
	</div>
					 

  

@include('includes.footer')
