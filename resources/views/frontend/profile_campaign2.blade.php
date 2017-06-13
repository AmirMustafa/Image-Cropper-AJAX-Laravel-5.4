<?php

	$cname  =  Session::get('cname');
	$cregion = Session::get('cregion');
	$uemail = Session::get('email');

	foreach($fetch as $fetch) {
		$email = $fetch->email;
		$camp_id = $fetch->camp_id;
		$cpm_name = $fetch->cpm_name;
		$campgn_host = $fetch->campgn_host;
		$host_name = $fetch->host_name;
		$cpm_dur = $fetch->cpm_dur;
		$funding_goal = $fetch->funding_goal;	
		$description = $fetch->description;
		$camp_id = $fetch->camp_id;
        $campaign_image = $fetch->campaign_image;
	}
?>

@if(isset($uemail))
	
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
	window.location = "{{ route('camp_signin') }}";
</script>	
@endif

<!-- =========  INCLUDED EXT LIBRARIES : START ===========   -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.js"></script>
		  <!-- AngularJS Sanitize -->
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>

<!-- <script src="{{URL::to('public/src/js/one.js')}}"></script> -->

<link rel="stylesheet" href="{{URL::to('public/select/css/nice-select.css')}}"> 
<link rel="stylesheet" href="{{URL::to('public/src/css/radiobtn.css')}}"> 

<!-- =========  INCLUDED EXT LIBRARIES : END ===========   -->

<!-- ===================  ANGULAR JS : START ============  -->

		  <script>
		    $(window).load(function() {
		      var this_scope = angular.element($('#container')).scope();
		      this_scope.from_js = {
		        "from_js": "<em>italic data in page javascript in head</em>"
		      };
		      this_scope.$apply();
		    });
		  </script>

<!-- ===================  ANGULAR JS : END ============  -->

		<script>
		$(document).ready(function() {
			  updatePreview();
			  $('#tinymce').bind('blur keyup',updatePreview);
			});

			function updatePreview(){
			  var 	tinymce = $('#lp-message');
			  tinymce.html($('#tinymce p').val());
			}
		</script>

<!-- Style Added for Image Uploader: Start -->
  <style>
  	.uploadimg
  	{
  		position: absolute;
  		top:0;

  	}
  	#upload-demo
  	{
  		position: relative;
  	}

  .image-upload > input {
  	visibility:hidden;
  	width:0;
  	height:0;
  	background:transparent;
}

#upload-demo-i
{
	position: absolute;
	top:41px;
	cursor: pointer;
}
#upload-demo-i > img
{
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
image-upload > img
{
		border-top-left-radius:15px;
	border-top-right-radius:15px;
}
  </style>
  <!-- Style Added for Image Uploader: End -->
 
<style>
	/*    .nice-select .list{height: 81px;}*/
	/*css for numeric keyboard : start */
	input[type=number]::-webkit-outer-spin-button,
	input[type=number]::-webkit-inner-spin-button {
	    -webkit-appearance: none;
	    margin: 0;
	}

	input[type=number] {
	    -moz-appearance:textfield;
	}
	/*css for numeric keyboard : finished */
	   .img-responsive{border-top-left-radius: 10px;border-top-right-radius: 10px;}
	    @media screen and (min-width: 0px) and (max-width: 320px)
	    {
	        .hideme{display: none;}
	    }

</style>


    <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
        <div class="container" id="hi">
            <div class="row">
                <div class=" bs-step" >                
                    <div class="col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-1 bs-step-step bs-step-first active">
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Campaign Summary</div>
                        <a href="{{ route('profile_campaign2') }}" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step disabled"> 
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum"> Video Upload</div>
                        <a href="profile-campaign3.php" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step disabled"><!-- complete -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme">Campaign Host</div>
                        <a href="profile-campaign4.php" class="bs-step-dot"></a>
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
	 		
			<div class="row" ng-app="CampaignPage" ng-controller="Main">
                    <div>

			
				<div class="col-xs-12 col-sm-7 col-md-8 col-lg-6 col-lg-offset-1"> 
				
					 <div class="p-camp2-form reset-form campaign-form">
						<h3> Campaign Summary</h3>
						 
						<form class="" method="post" action="{{ route('profile_campaign2b') }}" name = "p_camp_5" > 
							    <div class="row">
                                    <div class="col-xs-4">
                                        <span><label> Campaign Host:   </label></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
                                            <label class="label radio-custom-label radio-btn">
                                                <input id="Individual" class="radio u-hide js-radio type" value="Individual" <?php echo ($campgn_host=='Individual')?'checked':'' ?> name="chostname" onclick="campaign_type_ajax()" type="radio">
                                                <span class="radioInput"></span>Individual
                                            </label>
                                        </div>
                                        <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
                                            <label class="label radio-custom-label radio-btn">
                                                <input id="Organization" class="radio u-hide js-radio type" value="Organization" <?php echo ($campgn_host=='Organization')?'checked':'' ?> name="chostname" onclick="campaign_type_ajax()" type="radio">
                                                <span class="radioInput"></span>Organization
                                            </label>
                                        </div>
                                    </div>	  
							    </div><br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label for="host_name"> Host Name: </label>
                                    </div>
                                    <div class="col-xs-8 txt-box">									 
                                        <!-- <input type="text" name = "c_dur" class="date form-control" maxlength="2" ng-model="duration"  placeholder="30-90 days" onkeypress="return isNumberKey(event);">           

                                        <select class="date" style="width:49.5%" required>                 
                                            <option selected> Select a plan </option>
                                            <option> Fixed duration </option>
                                            <option> Flexi-funding </option>

                                        </select>     -->    
                                        <input type="text" name="host_name" id="host_name" ng-model="host_name"  placeholder = "Eg. John Doe / XYZ Inc."  class="form-control" onkeyup="hostname_ajax()" required autofocus> 
                                    </div>				
                                </div><br>
                                <div class="row">
									<div class="col-xs-4">
										<span><label for="c_dur"> Campaign Duration: </label></span>
									</div>
									<div class="col-xs-8 txt-box">									 
										<input type="text" name="c_dur" id ="c_dur" class="form-control"  pattern="[0-9]*" inputmode="numeric" width="8" maxlength="2" min="30" max="90" ng-model="campaign_duration" placeholder="30-90 days" onkeyup="campaign_dur_ajax()" required>
										
								    </div>	
<!--
									<div class="col-xs-4" style="padding-right:40px;">
										<select id="select" name="select" onChange="changetextbox();" class="form-control"   required>                 
											<option selected disabled> Select a plan </option>
											<option value="A"> Fixed duration </option>
											<option value="B"> Flexi-funding </option>
										</select> 
									</div>       			
-->
								</div><br>			 
								<div class="row">
									<div class="col-xs-4">
										<label for="funding_goal"> Funding Goal: </label>
									</div>
									<div class="col-xs-8 txt-box">
										<!-- <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control"  name="funding_goal" maxlength="15" ng-model="funding_goal" placeholder="INR 1,99,99,99,000 " onkeypress="return isNumberKey(event);" data-type="number" required>	 -->

										<input type="text" name="funding_goal" id="funding_goal" class="form-control" pattern="[0-9]*" inputmode="numeric" maxlength="10" ng-model="funding_goal" onkeypress="return isNumberKey(event);" onkeyup="funding_goal_ajax()" placeholder="INR 1,99,99,99,000 ">
									</div>
								</div><br>
								<div class="row">
									<div class="col-xs-4">
										<label for="description">Brief Description: </label>
									</div>
									<div class="col-xs-8 txt-box">
								        

								        <textarea id="tinymce1" ng-model="from_js" maxlength="115" class="form-control" placeholder="Enter your Description" rows="5" name="description" onkeyup="description_ajax()" required></textarea>
									</div>
								</div>
								<div class="row camp-form2-btn">
								    <div class="">
                                        <!-- <div class="col-xs-2 back-btn">
                                            <a href="profile-campaign1.php" class="btn btn-default"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                                        </div> -->
                                        <div class="col-xs-offset-10 text-right txt-box">
<!--                                            <a href="profile-campaign1.php" class="btn btn-default pre-btn"> Preview </a>-->
                                            
                                            <button type="submit" class="btn btn-primary">Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
								</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</form>
				        </div>
					</div>
					
					
		 
	
	
	
				</div>
				
				               <div class="col-xs-12 col-sm-5 col-md-4 col-lg-5">
								<!-- <a href="#"> -->
								<div class="camp2-card" id="cardrefresh" >
									<!-- <img src="img/thirs.png" alt="project image" class="img-responsive"/> -->

									<!-- <label class="control-label">Select File</label>
									<input id="input-44" name="input44[]" type="file" multiple class="file-loading">
									<div id="errorBlock" class="help-block"></div>
									<script>
									$(document).on('ready', function() {
									    $("#input-44").fileinput({
									        uploadUrl: '/file-upload-batch/2',
									        maxFilePreviewSize: 10240
									    });
									});
									</script> -->

									<form action="profile-campaign3.php" id="clickMe">
										<div class="image-upload" id="image-upload">
											<label for="upload">
                                                <?php 
                /*Added for fetching of Campaign Image when in DB: Start*/
    
                                                    if(!empty($campaign_image)) {
                                                        $image = "campaign_images/".$campaign_image;
                                                    }
                                                    else {
                                                        $image = "img/campaign.png";
                                                    }
                /*Added for fetching of Campaign Image when in DB: End*/
                                                       
               /*Added for title of Campaign Image when in DB: Start*/
    
                                                    if(!empty($campaign_image)) {
                                                        $title = "Click here to upload once again";
                                                        
                                                    }
                                                    else {
                                                        $title = "Click here to upload your campaign image.";
                                                    }
                /*Added for title of Campaign Image when in DB: End*/
                                                       
                                                ?>
											    				<img src='resources/views/{{$image}}' style="border-top-left-radius:10px;border-top-right-radius:10px; cursor: pointer;" title="{{$title}}"/>
											  				</label>
											<input type="file" id="upload" data-target="#myModal" data-toggle="modal" required="required">
											

											<div id="upload-demo-i" title="Click here to upload once again" onclick="editImage()"></div>

									</div>
									<!-- Modal Added For Image Cropper: Start -->

<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      	<div class="modal-header">
        	<button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>
      
      	</div>
      	<div class="modal-body">
          
      		<div id="upload-demo" style="width:350px"></div>

      		<button class="btn btn-success upload-result" data-dismiss="modal">Upload Image</button>
     
    	</div>
    </div>

  </div>
</div>

<!-- Modal Added For Image Cropper: End -->
									</form>



									<!-- <input type="file" name="img_upload" class="img-responsive"> -->
									<!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->

									<div style="padding-left: 25px;
    												padding-right: 25px; margin-top: 3%;">
										<span style="color: #666;"><b><?php echo $cname; ?></b></span>
									</div>
									<div class="pad-lr-25">
										<h5 class="author pad-15" ng-bind="title"> </h5>

										<ul class="list-inline bdr-btm">
											<li ng-bind="host_name"></li> <!-- Angular Binding -->
											<li class="pull-right">   <?php echo $cregion; ?> </li> 								
										</ul>
										<span class="par"> 
											<!-- ===========BINDING FROM EDITER ANGULAR JS : START =========== -->
												
												<p ng-bind-html="from_js | htmlresolve"></p> 
												<!-- Angular Filter added --> 

			      								<!-- <reference-object from_js="from_js"></reference-object> -->

      										<!-- ===========BINDING FROM EDITER ANGULAR JS : END =========== -->

										</span>
										
																		
										<div class="progress mt-20">
										  <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="2" style="width: 2%">
											<span class="sr-only">70% Complete</span>
										  </div>
										</div>
										 
											<ul class="list-inline card-stage">
												<li class="text-left"><!-- <i class="fa fa-inr"></i>  --><span ng-bind="goal"></span>  
													<b><p style="font-size: 16px; font-weight: 600;"ng-bind="funding_goal | INR">  <!-- Angular Binding -->
													 

													</p></b>

													 <span style="font-size: 14px; color: #666; font-weight: 500; text-transform: lowercase;">Funding Goal</span>
												</li> 
												<li>  &nbsp;  &nbsp;  <p>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p> </li>  
												<li class="text-right" > <span ng-bind="duration"></span> 

													<b><p style="font-size: 16px; font-weight: 600; margin-right: 35%;" ng-bind="campaign_duration">  </p></b>

													<span style="font-size: 14px; color: #666; font-weight: 500; text-transform: lowercase;">days to go</span>

												</li>
											</ul>
										 
									</div>
								</div>	<!-- </a>	 -->

 							
							</div>
                  </div>
				
			</div>
		
<!-- Script Added For Laravel Image Uploader: Start -->
<script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 300,
        height: 225,
        type: 'rectangle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    	
    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {

	$.ajax({
			url: "postImage",
			type: "POST",
			data: {
				"_token": "{{ csrf_token() }}",
				"image":resp
			},
			success: function (data) {//alert(data);
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
				console.log(data);
			}
		});
	});
});

function editImage() {
	//alert("hiiiiiii");
	
	location.reload(true);
	editImage2();
	

}

function editImage() {
	$("#upload").click();
}

</script>

<!-- Script Added For Laravel Image Uploader: End -->


		</div>



		<!-- =========== Some Scripts Added: Start ===========  -->
	
		<script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.js"></script>
		<script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/additional-methods.js"></script>
		<script src="{{URL::to('public/src/js/v.p.camp.js')}}"></script>
		

		<script type="text/javascript">
				function changetextbox()
				{
				    if (document.getElementById("select").value === 'B') {
				        document.getElementById("c_dur").disabled = true;
				    }
				    else {
				    	document.getElementById("c_dur").disabled = false;
				    }
				    
				    // alert(document.getElementById("mfi_4_a_i").value);
				}
		</script>
<!--styling dropdown list-->

<script src="{{URL::to('public/select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::to('public/select/js/fastclick.js')}}"></script>
<script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();      
      FastClick.attach(document.body);
    });    
</script>
<!-- ================= Angular JavaScripts Code: Start =================  -->

  <script>	/*storing above fetched data to access in angular js variable*/
    window.host_name = "<?php echo $host_name; ?>";   
    window.description = "<?php echo $description; ?>";
    window.cpm_dur = "<?php echo $cpm_dur; ?>";
    window.funding_goal = "<?php echo $funding_goal; ?>";
/*Way to Receive data from PHP to Angular Controller(Anywhere in Angular)*/

    var app = angular.module('CampaignPage', []);//CampaignPage Angular Module
    
    app.controller("Main", function ($scope) {	//Main - Name of the controller
        var hostname = window.host_name;   //storing line 355 data in js variable
        var description = window.description;
        var cpm_dur = window.cpm_dur;
        var funding_goal = window.funding_goal; /*Way to store in variable*/
        //$scope.a = 'ABC';

        $scope.host_name = hostname; //here host_name is angular model(i.e. ng-model) and b is the above line variable

        $scope.from_js = description;
        $scope.campaign_duration = cpm_dur;
        $scope.funding_goal = funding_goal;
    });

    app.filter("htmlresolve", function ($sce) {	//Angular Filter - Description
	  return function(text) {
	      console.log(text);
	         return $sce.trustAsHtml(text);
	      
	    };
	});

    app.filter('INR', function () {   //Angular Filter for Indian currency      
    return function (input) {
        if (! isNaN(input)) {
            var currencySymbol = '₹';
            //var output = Number(input).toLocaleString('en-IN');   <-- This method is not working fine in all browsers!           
            var result = input.toString().split('.');

            var lastThree = result[0].substring(result[0].length - 3);
            var otherNumbers = result[0].substring(0, result[0].length - 3);
            if (otherNumbers != '')
                lastThree = ',' + lastThree;
            var output = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            
            if (result.length > 1) {
                output += "." + result[1];
            }            

            return currencySymbol + output;
        }
    }
});
</script>

<!-- ================= Angular JavaScripts Code: End =================  -->

<script>
	function hostname_ajax() {
  //alert("hiiiiiiiii");

  var host_name = $('#host_name').val();
  //alert(host_name);

  if(host_name) {
      $.ajax({
        type: 'get',
        url: 'hostname_ajax',
        data: {
         host_name:host_name,
        },
        success: function (response) {
         
         //alert(response)
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }
  

}

function campaign_dur_ajax() {
  //alert("hiiiiiiiii");

  var c_dur = $('#c_dur').val();
  //alert(host_name);

  if(c_dur) {
      $.ajax({
        type: 'get',
        url: 'campaign_dur_ajax',
        data: {
         c_dur:c_dur,
        },
        success: function (response) {
         
         //alert(response)
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }
  

}

function funding_goal_ajax() {
  //alert("hiiiiiiiii");

  var funding_goal = $('#funding_goal').val();
  //alert(host_name);

  if(funding_goal) {
      $.ajax({
        type: 'get',
        url: 'funding_goal_ajax',
        data: {
         funding_goal:funding_goal,
        },
        success: function (response) {
         
         //alert(response)
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }
  

}

function description_ajax() {
  //alert("hiiiiiiiii");

  var description = $('#tinymce1').val();
  //alert(host_name);

  if(funding_goal) {
      $.ajax({
        type: 'get',
        url: 'description_ajax',
        data: {
         description:description,
        },
        success: function (response) {
         
         //alert(response)
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }
  

}

function campaign_type_ajax() {
  //alert("hiiiiiiiii");

  var type = $('input[name="chostname"]:checked').val();
  //alert(description);

  if(type) {
      $.ajax({
        type: 'get',
        url: 'campaign_type_ajax',
        data: {
         chostname:type,
        },
        success: function (response) {
         
         //alert(response)
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }

  
  

}
</script>


@include('includes.footer')
