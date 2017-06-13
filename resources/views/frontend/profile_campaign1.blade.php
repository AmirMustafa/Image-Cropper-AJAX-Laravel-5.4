@if(Session::has('email'))
	@include('includes.profile_header')

@else
	<script>
	    window.location = "{{ route('camp_signin') }}";
	</script>
@endif

<style>
  #bg1 { position:fixed;
	background-position:-50% -50%;
    background-repeat: no-repeat;
    background-image: url(img/patterns.png); 
}
.bg_pattern{
   position: fixed;
   width:100%;
  transform: translate(0%, -5%); 
}

    
</style>

<script type = "text/javascript">
	function showfield(name){
	  if(name=='Other')document.getElementById('div1').innerHTML='<input type="text" name="ccateg" value = "Other-" placeholder = "Custom category" class = "form-control" />';
	  else document.getElementById('div1').innerHTML='';
	}
</script>


<div class="wrapper ">
			<img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
		<div class="container">
			<div class="row">								
				<div class="col-xs-12">	
					<div class="reset-form camp-form1">
						<h3>  Start a Campaign </h3>
						<form class="" method="post" action="{{ route('profile_campaign1b') }}" > 
							<div class="form-group">
								<input type="text" class="form-control" name = "cname" id="cname" value="" placeholder="Campaign Name" maxlength="105" required autofocus/>
							</div>

							<div class="form-group">
							    <select class="selectpicker form-control" name = "ccateg" id="ccateg" onchange="showfield(this.options[this.selectedIndex].value)">
									<option value = "nullcat" selected disabled>Select Category </option>
									<!--<option></option>-->
									<!--<option></option>-->
									<!--<option value = "Arts"><font color="#000"> Arts </option>-->
									<option value = "Arts"> Arts </option>
									<option value = "Comics"> Comics </option>
									<option value = "Dance"> Dance </option>
									<option value = "Design"> Design  </option>
									<option value = "Fashion"> Fashion  </option>
									<option value = "Film & Theatre"> Film & Theatre </option>
									<option value = "Food">  Food </option>
									<option value = "Games">  Games </option>
									<option value = "Journalism">  Journalism </option>
									<option value = "Music">  Music </option>
									<option value = "Photography">  Photography </option>
									<option value = "Publishing">  Publishing </option>
									<option value = "Technology">  Technology </option>
									<option value = "Other">  Other </option>					
								</select>
				            </div>

                                
							<div id = "div1">
								
							</div>
							<div class="form-group">
						         <select class="form-control selectpicker " name = "cregion" id = "cregion">
									 <!--<option><?php //if($cregion != ""){echo $cregion;} else {echo "Select Region";}?></option>-->
									<option value = "nullreg" selected disabled>Select Region </option>	<option value = "Andaman & Nicobar"> Andaman & Nicobar Islands </option>
									<option value = "Andhra Pradesh">  Andhra Pradesh </option>
									<option value = "Arunachal Pradesh">  Arunachal Pradesh </option>
									<option value = "Assam">  Assam </option>
									<option value = "Bihar">  Bihar </option> 
									<option value = "Chandigharh">Chandigharh</option>
									<option value = "Chhattisgarh">  Chhattisgarh </option>
									<option value = "Dadra & Nagar"> Dadra and Nagar Haveli</option>
									<option value = "Daman & Diu"> Daman and Diu </option>
									<option value = "Delhi/NCR"> Delhi / NCR </option>
									<option value = "Goa">  Goa </option>
									<option value = "Gujrat">  Gujrat </option>
									<option value = "Haryana">  Haryana </option> 
									<option value = "Himachal Pradesh">  Himachal Pradesh  </option>
									<option value = "Jammu & Kashmir">  Jammu & Kashmir  </option>
									<option value = "Jharkhand">  Jharkhand </option>
									<option value = "Karnataka">  Karnataka </option> 
									<option value = "Kerela">  Kerela </option>
									<option value = "Lakshadweep"> Lakshadweep </option>
									<option value = "Madhya Pradesh">  Madhya Pradesh </option>
									<option value = "Maharashtra">  Maharashtra </option>
									<option value = "Manipur">  Manipur </option> 
									<option value = "Meghalaya">  Meghalaya </option> 
									<option value = "Mizoram">  Mizoram </option>
									<option value = "Nagaland">  Nagaland </option>
									<option value = "Odisha">  Odisha </option>
									<option value = "Puducherry"> Puducherry </option> 
									<option value = "Punjab">  Punjab </option> 
									<option value = "Rajasthan">  Rajasthan </option>
									<option value = "Sikkim">  Sikkim</option>
									<option value = "Tamil Nadu">  Tamil Nadu</option>
									<option value = "Telangana">  Telangana</option>
									<option value = "Tripura">  Tripura</option>
									<option value = "UP">  Uttar Pradesh </option>
									<option value = "Uttrakhand">  Uttrakhand </option>
									<option value = "West Bengal">  West Bengal </option>
									
								</select>
							 </div>
							 
							<div class="row">								 
								<div class="col-xs-12 text-right">
								<!--<a href="profile-campaign2.php" class="btn  btn-primary"  value="Save & Continue">Save & Continue</a>-->
<!--								<input type="submit" name = "submit" class="btn  btn-primary"  value=" Next >">-->
								
								<button type="submit" name="submit" class="btn btn-primary">Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></button>
								</div>
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

						</form>
					</div>
				    <br>
				</div>
			</div>
		</div>
	</div>

	@include('includes.footer')