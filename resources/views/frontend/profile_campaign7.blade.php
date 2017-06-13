<?php

	foreach($q1 as $q1) {
		$campaign_image = $q1->campaign_image;
		$cpm_name =  $q1->cpm_name;
		$host_name =  $q1->host_name;
		$cpm_region = $q1->cpm_region;
		$description = $q1->description;
		$cpm_dur = $q1->cpm_dur;
		$funding_goal = $q1->funding_goal;
	} 	

?>


<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = Session::get('email');
    $funding_goal = Session::get('funding_goal');
    $description = Session::get('description');
    $host_name = Session::get('host_name');
    $c_dur = Session::get('c_dur');
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif



 
<style>
.fund-info{
	font-size:14px;
    color:#444;
    font-weight: bold;
}
    .card-1{background: #fff;position: relative;opacity: .8;border-radius: 10px;margin: auto;}
    .card-2{margin: auto;}
</style>
<div class="wrapper "  ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
		<div class="container">
			<div class="row">								
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="text-center card-1">
						<h1 style="font-size:100px;color:#33b780">
							<i class="fa fa-check-circle"></i>	
						</h1>	
						<h2> Woohoo! Your campaign is completed.</h2>
						<h4 class="mt-20"> You have now successfully created your campaign. Allow us 3-5 business days to review your campaign, it's rewards and other significant details. </h4>
					</div>
							<div class="col-xs-12 card-2 mt-40 ">
								<a href=" preview-campaign.php">							
								<div id="card" class="card">
									<img src="resources/views/campaign_images/{{ $campaign_image }}" alt="project image" class="img-responsive"/>
									<!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->
									<div class="pad-lr-25">
									<!--<a href="campaign.php">	<h5 class="author pad-15"> Nura - Headset reinvented for perfect silence 
		and luxury that your ears deserve<span> </span> </h5></a>-->
                                    <a href="campaign.php">	<h5 class="author pad-15"> <?php echo $cpm_name ?><span> </span> </h5></a>
										<ul class="list-inline  bdr-btm">
                                            <li><?php echo $host_name ?></li>
                                            <li class="pull-right"><?php echo $cpm_region ?></li>		
										</ul>
										<p class="par"> <?php echo $description ?> </p>
										
																		
										<div class="progress mt-20">
										  <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
											<span class="sr-only">70% Complete</span>
										  </div>
										</div>

										<!--<ul class="list-inline card-stage">-->
										<ul class="list-inline">
                                            <li><center><?php echo  $funding_goal?></center><p class="fund-info"> Funded </p> </li> 
                                            <!--	<li>  $125 <p> Pledged </p> </li>  -->
                                            <li class="pull-right"><center><?php echo  $cpm_dur?></center><p class="fund-info"> Days to go </p> </li> 
										</ul>
									</div>
								</div></a>
							</div>
							<div class="col-xs-12 card-1 text-center">
								<p> <b>Note:</b> While we review your campaign, you can preview it's page, but can't edit.</p>
								<h4 class="mt-20"> Click on your campaign card above, to preview it's page, before it goes live. </h4>
							</div>
				</div>
			</div>
		</div>
	</div>

	@include('includes.footer')
