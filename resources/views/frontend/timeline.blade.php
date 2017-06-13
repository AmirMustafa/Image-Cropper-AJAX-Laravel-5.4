<?php $reward_mail = Session::get('email');
// echo $reward_mail; die;

if($reward_mail) { ?>
<?php 
/* ============== Timeline During Login Case: Start ============== */
$results = DB::select("SELECT SUM(cost) as total from rewardcard WHERE email = '$reward_mail'");



$sum_cost = ($results[0]->total);

//echo $sum_cost;die;

$query2 = DB::select("SELECT a.cost, a.Quantity, a.time, c.cpm_name,c.camp_id, c.cpm_region, c.timestamp2, c.host_name, c.cpm_dur, c.funding_goal as funding
FROM rewardcard a
JOIN cmp_card c ON a.email = c.email
WHERE a.email =  '$reward_mail'");
/*echo "<pre>";
print_r($query2);die;*/

if(!empty($query2)) {
	$funding_goal = $query2[0]->funding;		//getting funding goal of that email
	$cpm_dur = $query2[0]->cpm_dur;		//getting funding goal of that email
	$time = $query2[0]->time;		//getting funding goal of that email
	$timestamp = $query2[0]->timestamp2;	//getting funding goal of that email


	$twenty_five_percent = (0.25 * $funding_goal);
	$fifty_percent = (0.50 * $funding_goal);
	$seventy_five_percent = (0.75 * $funding_goal);
	$hundred_percent = $funding_goal;
				

	$percentage = (($sum_cost/$funding_goal))*100;
	//$percentage = 100;
	//echo $percentage;die;

	$q2 = DB::select(DB::raw("SELECT cost as cost FROM rewardcard WHERE email = '$reward_mail'"));

	$first_funding = $q2[0]->cost;
}
 ?>




	
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{URL::to('public/src/css/reset.css')}}">
	<link rel="stylesheet" href="{{URL::to('public/src/css/style3.css')}}">
	<script src="{{URL::to('public/src/js/modernizr.js')}}"></script><!-- Modernizr -->
  	
	<title>Responsive Vertical Timeline</title>
</head>
<body><br>
	<!-- <p style="font-size: 20px;"><b>Timeline</b></p> -->

	<div id="timeline" style="width: 60%; height: 50%;">
	<p style="font-size: 25px; margin-left: 23%;"><b>Time / Funding Goals <br>( <?php if(!empty($query2)) {echo $cpm_dur;; } ?> days / &#8377; <?php if(!empty($query2)) {echo $funding_goal; }  ?>  )</b></p>Total Collected: <?php if(!empty($query2)) { echo $sum_cost; } else {echo "Not Started";}  ?>
		<section id="cd-timeline" class="cd-container">


<!-- <h3>CURRENT PERCENTAGE --> <?php //echo $percentage."%";  ?> <!-- </h3> -->



<!-- 		<div class="cd-timeline-block">
	<div class="cd-timeline-img cd-movie">
		<img src="img/delivery.png" alt="Movie">
	</div> cd-timeline-img

	<div class="cd-timeline-content">
		<h2>Delivery</h2>
		<p>Time to deliver the rewards to your Backers</p>
		<a href="#0" class="cd-read-more">Read more</a>
		<span class="cd-date">Feb 15</span>
	</div> cd-timeline-content
</div> cd-timeline-block
<div class="cd-timeline-block">
	<div class="cd-timeline-img cd-picture">
		<img src="img/cd-icon-picture.svg" alt="Picture">
	</div> cd-timeline-img

	<div class="cd-timeline-content">
		<h2>Funding</h2>
		<p>100% Funded Successful</p>
		<a href="#0" class="cd-read-more">Read more</a>
		<span class="cd-date">Feb 10</span>
	</div> cd-timeline-content
</div> cd-timeline-block



<div class="cd-timeline-block">
	<div class="cd-timeline-img cd-movie">
	<i class="fa fa-linkedin "></i>
				<img src="img/li.png" alt="Movie">
	</div> cd-timeline-img

	<div class="cd-timeline-content">
		<h2>LinkedIn</h2>
		<p>Invited LinkedIn Contacts</p>
		<a href="#0" class="cd-read-more">Read more</a>
		<span class="cd-date">Feb 01</span>
	</div> cd-timeline-content
</div> cd-timeline-block -->

<!-- This block will display only if there is one reward in reward card: Start -->		
<?php if(!empty($query2)) { ?>
		<div id="hundred"  class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>100% Funded</h2>

				<p><?php echo $hundred_percent; ?> of <?php echo $funding_goal; ?> collected</p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date"><?php if(!empty($query2)) { echo $time; } ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="seventy_five"  class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>75% Funded</h2>

				<p><?php echo $seventy_five_percent; ?> of <?php echo $funding_goal; ?> collected</p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date"><?php echo $time; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="fifty"  class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>50% Funded</h2>

				<p><?php echo $fifty_percent; ?> of <?php echo $funding_goal; ?> collected</p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date"><?php echo $time; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="twenty_five" class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>25% Funded</h2>

				<p><?php echo $twenty_five_percent; ?> of <?php echo $funding_goal; ?> collected</p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date"><?php echo $time; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
<!-- This block will display only if there is one reward in reward card: End -->
<?php } ?>

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<!-- <img src="img/cd-icon-location.svg" alt="Location"> -->
			</div> <!-- cd-timeline-img -->
												<!-- Reward Card Fetching -->
			<div class="cd-timeline-content">
				<h2>1st Funding</h2>
				
				<p>First Funding<?php if(!empty($query2)) { echo " of ".$first_funding; } else {echo ": Not Started";} ?> </p>
				<!-- <a href="#0" class="cd-read-more">Read more</a> -->
				<span class="cd-date"><?php if(!empty($query2)) { echo $timestamp; }?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		
	</section> <!-- cd-timeline -->
	<p style="font-size: 25px; margin-left: 23%;"><b>Campaign Launched <br> <?php if(!empty($query2)) { echo "(".$timestamp.")"; } ?></b></p>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{URL::to('public/src/js/main.js')}}"></script><!-- Main JS -->
</body>
</html>
<script>
$(document).ready(function(){
	$("#twenty_five").hide();
	$("#fifty").hide();
	$("#seventy_five").hide();
	$("#hundred").hide();
	var val = '<?php if(!empty($query2)) {  echo($percentage); } ?>';
if(val>=25)
{
	$("#twenty_five").show(300);
}
if(val>=50)
{
	$("#fifty").show(300);
}
if(val>=75)
{
	$("#seventy_five").show(300);
}
if(val>=100)
{
	$("#hundred").show(300);
}
});
</script>
<!-- ============== Timeline During Login Case: End ============== -->

<?php 
	} 
/* ============== Timeline During Logout Case: Start ============== */
	else {
		echo "TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE ";
	}

/* ============== Timeline During Logout Case: End ============== */
?>