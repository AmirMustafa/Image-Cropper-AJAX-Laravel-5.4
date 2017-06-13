<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = Session::get('email');
    $uname = Session::get('host_name');

    	foreach($fetch as $fetch) {

		$location = $fetch->location;		//fetch location 
		$headquarter = $fetch->headquarter; //fetch headquarter
		$website = $fetch->website;			//fetch website url
		$dob = $fetch->dob;					//fetch dob
		$campgn_host = $fetch->campgn_host;  //for Individual/Organization we will see Location/Headquarter respectively
		}
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif

  
<style>
/*custom checkbox with label : start*/

.checkbox-custom{
    opacity: 0;
    position: absolute;
    cursor: pointer;  
}

.checkbox-custom, .checkbox-custom-label {
     display: inline-block;
    vertical-align: middle;
}

.checkbox-custom-label {
    position: relative;
}

.checkbox-custom + .checkbox-custom-label:before{
    content: '';
    background: #fff;
    border: 1px solid #000;
    border-radius:3px;
    display: inline-block;
    vertical-align: middle;
    width: 15px;
    height: 15px;
    text-align: center;
    font-size:9.5px;
    padding-left: 0px;
    margin-right: 5px;
    margin-bottom: 1px;
    margin-left: -20px;
}


.checkbox-custom:checked + .checkbox-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    background: #0275d8;
    color: #fff;
    border: 1px solid #0275d8;
}

/*custom checkbox with label : finish*/
    @media screen and (min-width: 0px) and (max-width: 1200px)
    {
       .checkbox-custom + .checkbox-custom-label:before
        {
            margin-left: 0px;
        }
    }
    @media screen and (min-width: 0px) and (max-width: 320px)
    {
        .hideme{display: none;}
    }


</style>
    <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
        <div class="container">
            <div class="row" >
                <div class=" bs-step" >                
                    <div class="col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-1 bs-step-step bs-step-first complete">
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Campaign Summary</div>
                        <a href="{{ route('profile_campaign2') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step complete"> 
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum"> Video Upload</div>
                        <a href="{{ route('profile_campaign3') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step active"><!-- complete -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme">Campaign Host</div>
                        <a href="{{ route('profile_campaign4') }}" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step disabled"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Rewards</div>
                        <a href="profile-campaign6.php" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step bs-step-last disabled"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Link Accounts</div>
                        <a href="profile-campaign7.php" class="bs-step-dot"></a>
                    </div>
                </div>
            </div>
		 	<br><br>	
			<div class="row">								
				<div class="col-xs-12" > 
				
					 <div class="p-camp4-form reset-form campaign-form">
						<h3> Host's Details</h3>
						 
						<form class="" method = "post" action="{{ route('profile_campaign4b') }}" > <br>
						<!--<form class="" method="" action="" > <br>-->
							<div class="row">
								<div class="col-xs-4">
									<label>  Name: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input type="text" class="form-control" placeholder="Host Name" value="<?php echo $uname?>" readonly required autofocus>	
								</div>
							</div>



							<div class="row">
								<div class="col-xs-4">
									<label>  Date of Birth: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input value="<?php if(empty($dob)) {echo '';} else {echo $dob; } ?>" data-date-format="DD MMMM YYYY" type="date" class="form-control" id="date"  name="dob" placeholder="D.O.B" value="<?php if(empty($video_title)) {echo '';} else {echo $video_title; } ?>" required>	  
								</div>
							</div>
<!-- For Person Selected is Individual - Location will show: Start -->
							
						@if($campgn_host == "Individual")
							<div class="row">
								<div class="col-xs-4">
									<label> Location: </label>
								</div>
								<div class="col-xs-8 txt-box">									 
									<input type="text" class="form-control" name="location" placeholder="Location" value= "<?php if(empty($location)) {echo '';} else {echo $location; } ?>" required>	 
								</div>	
							</div>
<!-- For Person Selected is Individual - Location will show: End -->

<!-- For Person Selected is Organization - Headquarter will show: Start -->
						@elseif($campgn_host == "Organization")
							<div class="row">
								<div class="col-xs-4">
									<label> Headquarter: </label>
								</div>
								<div class="col-xs-8 txt-box">									 
									<input type="text" class="form-control" name="location" value="<?php if(empty($headquarter)) {echo '';} else {echo $headquarter; } ?>" placeholder="Headquarter" required>	 
								</div>	
							</div>
						@endif

							
<!-- For Person Selected is Organization - Headquarter will show: End -->

							<div class="row">						 
								<div class="col-xs-4">
									<label> Website: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input type="url" class="form-control" name="website" placeholder="www.example.com" value="<?php if(empty($website)) {echo '';} else {echo $website; } ?>">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-4">
									<label> Terms & conditions: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<div class="tnc-scrol form-control">
									   <ol>
                                        <li>You could change your campaign's name and certain other details before you submit for review. Otherwise, we will keep the campaign details saved in your account always.</li><br>
                                        <li>Once the campaign goes live you will not be able to do anymore changes to your campaign, other than the additional rewards, for strech goals.
                                        </li>
                                      </ol>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-8 col-xs-offset-4">
									<div class="checkbox mt-10">
									  <input type="checkbox" class="checkbox-custom" id="checkme" value=""><label for="checkme" class="checkbox-custom-label">I agree with the above mentioned terms & condition and other terms of usage.</label>
									</div>									
								</div>
							</div>
								
							<div class="row">
                                <div class="col-xs-2 back-btn">
                                    <a href="{{ route('profile_campaign3') }}" class="btn btn-default"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                                </div>								 
								<div class="col-xs-10 txt-box text-right">  <hr/>
<!--								<a href="view-campaign.php" class="btn btn-default "> Preview </a>-->

								<button class="btn btn-primary" name="submit" id="sendNewSms" disabled="disabled">Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button>
								<!-- <a href="profile-campaign5.php" class="btn  btn-primary"  value="Save & Continue">Next Step</a> -->
								<!--<input type="submit" class="btn  btn-primary " value="Reset"/>-->
								</div>
							</div>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							 
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>

<!-- JS added for Check Me(I agree) functionality: Start -->					 
	<script type="text/javascript">
	  	var checker = document.getElementById('checkme');
		var sendbtn = document.getElementById('sendNewSms');
		 // when unchecked or checked, run the function
		 checker.onchange = function(){
		if(this.checked){
		    sendbtn.disabled = false;
		} 
		else {
		    sendbtn.disabled = true;
		}

	}
  </script>
  <!-- JS added for Check Me(I agree) functionality: End -->	


  @include('includes.footer')

  <!-- <script>
  	console.log($('*').length);			//To check the weight of the page
  </script> -->