<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = Session::get('email');
    $uname = Session::get('host_name');

/*    foreach($fetch as $fetch) {	//getting data from rewardcard table

		echo $title = $fetch->title;
		echo $description = $fetch->description;
		echo $cost = $fetch->cost;
		echo $Quantity = $fetch->Quantity;
		echo $est_month = $fetch->est_month;
		echo $est_year = $fetch->est_year;echo "<br><br><br><br><br><br>";
	}die;*/
?>
<span ng-app="myApp"> <!-- Angular Module Added for RewardCard -->
@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif

		
	<!-- ============ INCLUDED EXT LIBRARIES : START =============   -->

		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

		<script src="{{URL::to('public/plugin/tinymce/tinymce.min.js')}}"></script><!-- Tiny MCE -->
		<script src="{{URL::to('public/plugin/tinymce/init-tinymce.js')}}"></script><!-- Init-TinyMCE -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.js"></script><!-- Angular JS -->
		<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script> <!-- AngularJS Sanitize -->
		<script src="{{URL::to('public/src/js/one.js')}}"></script>

    <!-- ============ INCLUDED EXT LIBRARIES : END =============   -->



    	<!-- ===============  ANGULAR JS : START ================   -->

		  <script>
		    $(window).load(function() {
		      var this_scope = angular.element($('#container')).scope();
		      this_scope.from_js = {
		        "from_js": ""
		      };
		      this_scope.$apply();
		    });
		  </script>

        <!-- ===============  ANGULAR JS : END ================   -->

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
   
	<style>
	 
	/*css for numeric keyboard : start */
	    input[type=number]::-webkit-inner-spin-button, 
	    input[type=number]::-webkit-outer-spin-button { 
	      -webkit-appearance: none; 
	      margin: 0; 
	        
	    }
	/*css for numeric keyboard : finished */
	.host-rew

	    {
	    
	    }
	  
	/*
	    .next-btn{pointer-events: none;}
	    .add-btn{pointer-events: none;}
	*/
	</style>


    <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image"/>
        <div class="container">
            <div class="row">
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
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step complete"><!-- complete -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme">Campaign Host</div>
                        <a href="{{ route('profile_campaign4') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step active"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Rewards</div>
                        <a href="{{ route('profile_campaign5') }}" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step bs-step-last disabled"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Link Accounts</div>
                        <a href="profile-campaign7.php" class="bs-step-dot"></a>
                    </div>
                </div>
            </div>
     			 	
			<div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 col-lg-offset-1" > 
				    <div class="p-camp5-form reset-form campaign-form">
				    <h3> Rewards Page</h3>
						<!--<form method="post" action="p-camp5-dbm.php"> -->
						<form method="post" action="{{ route('profile_campaign5b') }}"> 
							<div class="row">
								<div class="col-xs-4">
									<label>  Title: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input type="text" class="form-control" maxlength="70"  name="u_title" ng-model="title" placeholder="Reward Title"  id="RewardTitle"  required autofocus>	
								</div>	
							</div>	
							<div class="row">						 
								<div class="col-xs-4">
									<label>Description: </label>
								</div>
								<!-- <div class="col-xs-8">
									<form method="post" >
										<textarea ng-model="description" name = "editor1" id="editor1" ></textarea>
										<script>
											CKEDITOR.replace('editor1');
                                            </script> 
									  </form>
									  <div id="lp-message">
										</div>
									  <br />
								</div> -->	

								<div class="col-xs-8 txt-box" id="container">
									<!-- <textarea ng-model="a.data" placeholder="Enter your code here"></textarea>
									 -->

									<!-- <textarea class="tinymce" data-ui-tinymce id="tinymce1" data-ng-model="from_js.from_js" placeholder="Enter your Description"></textarea> </br> -->

									<textarea data-ui-tinymce id="tinymce1" data-ng-model="from_js.from_js" placeholder="Enter your Description" name="reward_description" class="form-control"></textarea><br>
								<?php
									/*echo nl2br("<textarea data-ng-model='from_js.from_js' cols='10' rows='5'>Hiiii</textarea>");*/
									?>
									

								</div>
							</div>	
							<div class="row">
								<div class="col-xs-4">
									<label>  Cost: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input type="number" pattern="[0-9]*" inputmode="numeric" class="form-control" name="u_cost" ng-model="cost"  placeholder="Cost for this Reward" onkeypress="return isNumberKey(event);" data-type="number" id="Cost" required autofocus>	
								</div>	
							</div>	
							<div class="row">						 
								<div class="col-xs-4">
									<label>  Quantity: </label>
								</div>
								<div class="col-xs-8 txt-box">
									<input type="number" pattern="[0-9]*" inputmode="numeric" data-type="number" class="form-control" name="u_quantity" maxlength="20"  ng-model="quantity" placeholder="Set reward quantity" onkeypress="return isNumberKey(event);" id="Quantity" required autofocus>	
								</div>	
							</div>	
							<div class="row">						 
								<div class="col-xs-4">
									<label> Estimated  Delivery: </label>
								</div>
								<div class="col-xs-4 txt-box form-group">									 
									<select class="date drop form-control selectpicker" id="SelectMonth" ng-model="delivery" name="u_dlv_mnth" required style="width:100%;"> 									
										<option value="" disabled>Select Month</option>
										<option value="jan"> January</option>
										<option value="feb"> Februrary</option>
										<option value="mar"> March</option>
										<option value="april"> April</option>
										<option value="may"> May</option>
										<option value="june"> June</option>
										<option value="july"> July</option>
										<option value="aug"> August</option>
										<option value="sep"> September</option>
										<option value="oct"> October</option>
										<option value="nov"> November</option>
										<option value="dec"> December</option>
									</select>
								</div>         
								<div class="col-xs-4 txt-box form-group">  
                                    <select class="date drop form-control selectpicker" id="SelectYear" ng-model="date" name = "u_dlv_year" required style="width:100%;">             
                                        <option value="" disabled>Select Year</option>
										<option value="2016"> 2016 </option>
										<option value="2017"> 2017 </option>
										<option value="2018"> 2018 </option>
										<option value="2019"> 2019 </option>
										<option value="2020"> 2020 </option>
										<option value="2021"> 2021 </option> 
									</select>         
								</div>							 
							</div>	
							<div class="row">	
								<div class="col-xs-5">  <hr/>
									
									<h4 class="crt-rew"> &nbsp;<input type="text" name="TextBox" id="TextBox" value="0" style="width:21px;border:3px solid #fff;background:#fff;" disabled="true"/> Rewards Created</h4>
<!--									<input type="text" name="TextBox" id="TextBox" value="0" />-->
								</div>
								<div class="col-xs-7 txt-box text-right">  <hr/>
								<!--<a href="profile-campaign4.php" class="btn  btn-info"  value="Save & Continue">Add another reward</a>-->
								<!--<input type="submit" class="btn btn-info add-btn" id = "add_another"  value = "Add another reward" onclick = "myFunction(); hello()">-->
					<input type="button" class="btn btn-info add-btn" id="add_another"  value = "Add another reward" name = "another" onclick = "myFunction();">

					<!-- <input type="button" class="btn btn-info add-btn" id="add_another"  value = "Add another reward" name = "another"> -->

								<!-- <a href="profile-campaign6.php" class="btn  btn-primary"  value="Save & Continue">Next Step</a> -->
<!--<button type="submit" onclick="myFunction();" id="add_another" class="btn btn-primary next-btn" name = "another" >Add another reward&nbsp;&nbsp;</button>-->
								<!--<button type="submit" onclick="Submit();" id="submit-btn" class="btn btn-primary next-btn" >Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button>-->
<!--<button type="submit" onclick="Submit(); myFunction();" id="submit-btn" class="btn btn-primary next-btn" >Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button>--><input type="submit" class="btn btn-primary next-btn" id = "another"  value = "Next" name = "another">
						<!--	<input type="submit" onclick="Submit(); myFunction();" id="submit-btn" class="btn btn-primary next-btn" value= "Next" i class="fa fa-angle-right" aria-hidden="true" >-->
								<!--<input type="submit" class="btn  btn-primary " value="Reset"/>-->
								</div>
							</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
						</form>
					</div>
					
				</div>


				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id= "myList2" > 
                        
							<div class="rewards mt-40" >
								<div class="ttl_n_desc">
								
									<h4 class="pledge"><span ng-bind="title"></span></h4>
									 <span style="text-align: justi"></span>
									<p><span ng-bind="description"></span></p>
									<!-- ===========BINDING FROM EDITER ANGULAR JS : START =========== -->
										
										<p ng-bind-html="from_js.from_js | htmlresolve"></p>

	      								<!-- <reference-object from_js="from_js"></reference-object> -->

      								<!-- ===========BINDING FROM EDITER ANGULAR JS : END =========== -->
								</div>
								<div class="ttl_n_desc2" >
									<div class="row">
										<div class="col-xs-3">											
											<a href="" class="like"> <i class="fa fa-star"></i> </a>
										</div>
										<div class="col-xs-6 text-center">										
											<h6> <span ng-bind="quantity"></span></h6>
										</div>
										<div class="col-xs-3  text-right">										
											<a href="" class="share"> <i class="fa fa-share-alt"></i> </a>
										</div>
									 
										<div class="col-xs-12 text-center">	
											<a href="" class="btn btn-reward" id="get_reward" > Get Reward </a>
											<a href="" class="btn btn-reward" style="display:none;" id="edit_reward"> Edit </a>
											<h3 class="pledge">  <span ng-bind="cost | INR"></span></h3>
										</div>
									 
										<div class="col-xs-12 ">
											<div class="under">
												<div class="col-xs-6">
													<h6>Estimated delivery</h6>
													<h5><span ng-bind="delivery"></span><span ng-bind="date"></span></h5>
												</div>
												<div class="col-xs-6 text-right">
													<h6>Ships to</h6>
													<h5>Only India</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								 
							</div>	<!----reward end-------->
                         
				</div>
				
				
			 
			</div>
		</div>
	
	
	<div class="wrapper   host-rew" >
		<div class="container">
			<div class="row " id="myList1" >
           
<!-- Reward Card Added to fetch from DB(i.e. rewardcard table for edit case): Start -->

			<?php 
			    foreach($fetch as $fetch) {	//getting data from rewardcard table

				$title = $fetch->title;
				$description = $fetch->description;
				$cost = $fetch->cost;
				$Quantity = $fetch->Quantity;
				$est_month = $fetch->est_month;
				$est_year = $fetch->est_year;
			?>
            <div class="col-md-4">
			<div class="rewards mt-40" >
								<div class="ttl_n_desc">
								
									<h4 class="pledge">{{ $title }}</h4>
									 
									<p>{!! $description !!}</p>
									
								</div>
								<div class="ttl_n_desc2" >
									<div class="row">
										<div class="col-xs-3">											
											<a href="" class="like"> <i class="fa fa-star"></i> </a>
										</div>
										<div class="col-xs-6 text-center">										
											<h6>{{ $Quantity }}</h6>
										</div>
										<div class="col-xs-3  text-right">										
											<a href="" class="share"> <i class="fa fa-share-alt"></i> </a>
										</div>
									 
										<div class="col-xs-12 text-center">	
											<a href="" class="btn btn-reward" id="get_reward" > Get Reward </a>
											<a href="" class="btn btn-reward" style="display:none;" id="edit_reward"> Edit </a>
											<h3 class="pledge">{{ $cost }}</h3>
										</div>
									 
										<div class="col-xs-12 ">
											<div class="under">
												<div class="col-xs-6">
													<h6>Estimated delivery</h6>
													<h5>{{ $est_month }} {{ $est_year }}<span ng-bind="date"></span></h5>
												</div>
												<div class="col-xs-6 text-right">
													<h6>Ships to</h6>
													<h5>Only India</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								 
							</div>	<!----reward end-------->
</div>
			<?php } ?>
<!-- Reward Card Added to fetch from DB(i.e. rewardcard table for edit case): End --> 	
             	
              		 
			</div>
		</div>
	</div>
	
</div>
</span>	<!-- End RewardCard Angular Module -->

<!--styling dropdown list-->
<!--
<script src="select/js/jquery.nice-select.js"></script>
<script src="select/js/fastclick.js"></script>
  <script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();      
      FastClick.attach(document.body);
    });    
  </script>
  
-->

 <style>
     .count {font-weight: 600;}
</style> 
<script>
/* ============= JavaScript Called on Add Reward Click: Start ================ */
function myFunction() {
	//alert ("hello");
		var another = document.getElementById( "another" ).value;
         var RewardTitle = document.getElementById( "RewardTitle" ).value;
		 var tinymce1 = document.getElementById( "tinymce1" ).value;
		 var Cost = document.getElementById( "Cost" ).value;
		 var Quantity = document.getElementById( "Quantity" ).value;
		var SelectMonth = document.getElementById( "SelectMonth" ).value;
		var SelectYear = document.getElementById( "SelectYear" ).value;

		//alert(SelectMonth);
	 if(RewardTitle,tinymce1, Cost, Quantity, SelectMonth, SelectYear)
	 {
		$.ajax({
		    type: 'get',
		    url: 'add_reward',
		    data: {
		     another:another, RewardTitle:RewardTitle, tinymce1:tinymce1, Cost:Cost, Quantity:Quantity, SelectMonth:SelectMonth, SelectYear:SelectYear,
		    },
		    success: function (response) {
		      //alert(response);
		    },
		      error: function (response) {
		      //alert(response);
		    }
		});
	 }
		
}
</script>
<!--  ============= JavaScript Called on Add Reward Click: End ================  -->

 <!-- ======= JavaScript Added for Creating Multiple Add Reward Card: Start ===== --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	   $(document).ready(function(){
        //$("#TextBox").hide();
         //$("#submit-btn").attr('disabled','disabled');
        $("#add_another").click(function(){
            $("#myList1>#myList2").removeClass("col-sm-offset-1 col-sm-4").addClass("col-sm-4");
            $("#myList1 #edit_reward").show();
            $("#myList1 #get_reward").hide();
            //alert("hii");
            var counter = $('#TextBox').val();
            var textbox1 = $('#RewardTitle').val();
            var textbox2 = $('#tinymce1').val();
            var textbox3 = $('#Cost').val();
            var textbox4 = $('#Quantity').val();
            var textbox5 = $('select').val();
//            var textbox6 = $('#SelectYear').val();
             
            if(!(textbox1=='' || textbox3=='' || textbox4==''))
                {	//if validation fails i.e. one textbox is empty
                    //alert("hii");
                    counter++ ;
                    var itm = document.getElementById("myList2");
                    var cln = itm.cloneNode(true);
                    document.getElementById("myList1").append(cln);
                   
                    //$('#TextBox').val(counter);
                    //$('#add_another').removeClass('add-btn');
                }
            //counter++;
            $('#TextBox').val(counter);
            $('#TextBox').addClass('count');
            $(".form-control").val('');
            $("select").val('');
//                 $("select").on('change',function() {
//                    var x = this.selectedIndex;
//
//                    if (!(x == "")) {
//                       counter++;
//                    } 
//                });
            if(counter == "10")
                {
                    $("#add_another").attr('disabled','disabled');
                }
            if(counter == "3")
                {
                    $("#submit-btn").removeAttr('disabled');
                }
            setTimeout(function()
                {
                   $('#TextBox').removeClass('count');

                }, 1000);
            
            
          });
   
    });
</script>



@include('includes.footer')