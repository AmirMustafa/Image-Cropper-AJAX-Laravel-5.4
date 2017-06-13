@if(Session::has('email'))
	@include('includes.profile_header')

@else
	@include('includes.header')
@endif

<style>

	.error
	{
		color:#cc0000;
	}

	#container
	{
		cursor:auto;
	}
    

:hov

.cls

element.style {
}
.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
/*    specify for this page*/
    .radio u-hide js-radio, .radio u-hide js-radio-label {
        margin:0px;
    }
</style>



<div class="wrapper bg-signup">
<img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
	<div class="container">
		<div class="row">		
			<div class="col-md-offset-4 col-md-4">
				<div class="black-transparent">					
					<h1> Feedback  </h1>
					<form method = "POST" action = "{{ route('post_feedback') }}" name = "feedback">
						<div id = "container">
							<!--User Name-->
							<input type = "text" name = "webname" placeholder = "Full name" class="form-control" onkeypress="return onlyAlphabets(event);" required autofocus/>
							
							<!--User Email-->
							<input type = "email" name = "webemail" placeholder = "someone@somewhere.com" class="form-control"/>
							
							<!--1st question-->
							<div class="form-group  ">
								<label>1. Is this the 1st time you are visiting the website?</label>
								<div class="row">
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="vYes" class="radio u-hide js-radio" value="Yes" name="vweb" required >
                                            <span class="radioInput"></span>Yes
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                        <input type="radio" id="vNo" class="radio u-hide js-radio" value="No" name="vweb" >
                                        <span class="radioInput"></span>No
                                        </label>
                                    </div>
								</div>	
							</div>
							<!--<div id = "q_error"><?php //echo @$_GET["e_first"];?></div>-->
							
							<!--2nd question-->
							<div class="form-group  ">
								<label>2. Did you find what you were looking for?</label>
								<div class="row">
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="lYes" class="radio u-hide js-radio" value="Yes" name="lweb" >
                                            <span class="radioInput"></span>Yes
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="lNo" class="radio u-hide js-radio" value="No" name="lweb" >
                                            <span class="radioInput"></span>No
                                        </label>
                                    </div>
								</div>	
							</div>							
							<!--<div id = "q_error"><?php //echo @$_GET["e_second"];?></div>-->
							<!--3rd question-->
                            <div class="form-group  ">
								<label>3. How would you rate our website?</label>
								<div class="row">
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="rpoor" class="radio u-hide js-radio" value="Yes" name="rweb" >
                                            <span class="radioInput"></span>Poor
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="raverage" class="radio u-hide js-radio" value="No" name="rweb" >
                                            <span class="radioInput"></span>Average
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="rgood" class="radio u-hide js-radio" value="No" name="rweb" >
                                            <span class="radioInput"></span>Good
                                        </label>
                                    </div>
								</div>		
							</div>
						<!--<div id = "q_error"><?php //echo @$_GET["e_third"];?></div>-->
							<!--4th question-->
							<div id = "hidepart">
							<div class="form-group  ">
								<label>4. Write your suggestion/problem below?</label>
								<div class="row">
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="fYes" class="radio u-hide js-radio" value="Yes" name="fweb" >
                                            <span class="radioInput"></span>Yes
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label radio-custom-label">
                                            <input type="radio" id="fNo" class="radio u-hide js-radio" value="No" name="fweb" >
                                            <span class="radioInput"></span>No
                                        </label>
                                    </div>
								</div>	
							</div>
								<!--<div id = "q_error"><?php //echo @$_GET["e_fourth"];?></div>-->
								<!-- comments or message -->
								<textarea name = "fback" rows="5" maxlength = "500" class="form-control" id = "style-area" placeholder = "Write to us within 500 letters"></textarea>
							</div>
							<div class="row">
							    <div class="col-md-offset-8 col-md-4 col-sm-offset-8 col-sm-4 col-xs-offset-8 col-xs-4">
							        <input type = "submit" name = "submit" class=" btn btn-primary sbtn-align" value = "Submit"/>
							    </div>
							</div>
							
							
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
		
		<!--<script src = "https://cdn.jsdelivr.net/jquery/1.12.4/jquery.js"></script>
		<script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.js"></script>
		<script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/additional-methods.js"></script> -->
		<script src="{{URL::to('public/src/js/v.feedback.js')}}"></script>

@include('includes.footer')
	