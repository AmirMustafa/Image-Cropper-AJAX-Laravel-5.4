<!-- Fetching data from usr_dtls table: Start -->

<?php
	foreach($fetch as $fetch) {
		$first_name = $fetch->first_name;
		$last_name = $fetch->last_name;
		$username = $fetch->username;
		$uemail = $fetch->email;
	}
?>

<?php
	$uemail = Session::get('email');
	$fetch2 = DB::select(DB::raw("SELECT * FROM usr_dtls WHERE email = '$uemail'"));

	foreach($fetch2 as $row) {
	      $gen = $row->gender;		         //fetch gender
	      $lang = $row->U_lng;		         //fetch language
	      $country = $row->U_cnty;	         //fetch country
	      $timezone = $row->U_tmzn;	         //fetch timezone
	      $url = $row->U_link;		         //fetch url
	      $mobile = $row->U_mtel;	         //fetch mobile

	      $alert1 = $row->U_a_alert;         //fetch mobalert
	      $alert2 = $row->U_b_alert;  		 //fetch emalert
	      $alert3 = $row->U_c_alert;         //fetch brwalert
	      $alert4 = $row->U_social_net;      //fetch social_net
	      $uid = $row->uid;      			 //fetch social_net

	      //$a = explode(" ", $name);
		  $b = explode(",", $alert1);
	      $c =count($b);
		  $d = explode(",", $alert2);
	      $e =count($d);
		  $f = explode(",", $alert3);
	      $g =count($f);
		  $h = explode(",", $alert4);
	      $j =count($h);
	}		
?>

<!-- Fetching data from usr_dtls table: End -->


@if(Session::has('email'))
	@include('includes.profile_header')

@else
	@include('includes.header')
@endif

<style>
    .nice-select .list{height: 105px!important;}
    .modal-dialog{
        width: 300px;
    }
/*    css for url text box:start*/
/*
    .url
    {
    }
    @media screen and (min-width: 992px) and (max-width: 1200px)
    {
        .url
        {
            width: 63%!important;
            margin-left: 9%!important;
        }
    }
    @media screen and (min-width: 768px) and (max-width: 991px)
    {
        .url
        {
            width: 58%!important;
            margin-left: 14%!important;
        }
    }
    @media screen and (min-width: 572px) and (max-width: 767px)
    {
        .url
        {
            width: 57%!important;
            margin-left: 15%!important;
        }
    }
    @media screen and (min-width: 368px) and (max-width: 571px)
    {
        .url
        {
            width: 51%!important;
            margin-left: 20%!important;
        }
    }
    @media screen and (min-width: 0px) and (max-width: 367px)
    {
        .url
        {
            width: 46%!important;
            margin-left: 25%!important;
        }
    }
*/
/*    css for url text box:finished*/
    .form-group{margin-bottom: 0px!important;}
    
</style>

	<div class="wrapper"><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" /><h1></h1>
		<div class="container">
			<div class="row">				
				 <div id="wrapper" data-spy="scroll" data-target="#spy" class="">
					<!-- Sidebar -->
					<div id="sidebar-wrapper" class="col-sm-3 hidden-xs">
						<nav id="spy">
							<ul class="sidebar-nav nav">
								<li class=" active"> 
									<a hrfd-c="#home" data-scroll="" >
									<i class="fa fa-user solo"></i> Profile
									</a>									
								</li>
								
								<li class=""> 
									<a hrfd-c="#anch2" data-scroll="" >
										<i class="fa fa-cog solo"></i> Account Details
									</a>
								</li>
								<li class=""> 
									<a hrfd-c="#anch3" data-scroll="" >
										<i class="fa fa-bell solo"></i> Notifications
									</a>
								</li>
								<li class=""> 
									<a hrfd-c="#anch4" data-scroll="" >
										<i class="fa fa-globe  solo"></i> Social Networks
									</a>
								</li>
								
							</ul>
						</nav>
					</div>
					<!-- Page content -->
					<div id="page-content-wrapper" class="col-xs-12 setting"> 
							 <form class=" " action="{{ route('setting_dbm') }}" method="post" role="form" enctype="multipart/form-data" >
								<div class="well">
									<legend id="home" class=""> Profile</legend>
									
									<div class="row">
										<div class="col-xs-4">
											<label for="inputEmail">First Name</label>
										</div>
										<div class="col-xs-12">	
											<input type="text" name = "user_fname" class="form-control" id="inputEmail" placeholder="First Name" onkeypress="return onlyAlphabets(event);" value="{{ $first_name }}" disabled>
											<!--<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_fname"];?></div></font></small></center>-->
										</div>
										<div class="col-xs-12">	
											<input type="text" name = "user_fname" class="form-control" id="inputEmail" placeholder="Last Name" onkeypress="return onlyAlphabets(event);" value="{{ $last_name }}" disabled>
											<!--<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_fname"];?></div></font></small></center>-->
										</div>
										<div class="col-xs-4">
											<label for="inputEmail">Last Name</label>
										</div>
										<!--<div class="col-xs-12">	
											<input type="text" name = "user_lname" class="form-control" id="inputEmail" placeholder="Last Name" onkeypress="return onlyAlphabets(event);" value="<?php //echo $a[1];?>" disabled>
											<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_fname"];?></div></font></small></center>
										</div>-->
										<div class="col-xs-4">
											<label for="inputEmail"> Gender </label>
										</div>
										<div class="col-xs-12 form-group">	
											<select class="selectpicker mf drop form-control"  name = "gender" value = "" required autofocus>						
                                                 <option><?php if($gen != "") {echo $gen;} 
                                                           else{echo "Select Gender";}?></option>
                                                 <option value="Male"> Male </option>
                                                 <option value="Female" > Female</option>
                                                 <option value="Not Specified"> Not Specified </option>
											</select>
											<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_gen"];?></div></font></small></center>
										</div>
										<div class="col-xs-4">
											<label for="inputEmail"> Language </label>
										</div>
										<div class="col-xs-12 form-group">	
											<select class="selectpicker drop form-control" name = "user_lang" required>
												<option><?php if($lang != ""){echo $lang;} else {echo "Select  language...";} ?></option>  
												 <option value = "Eng"> English </option>
												 <option value = "French"> French </option>
												 <option value = "German"> German  </option>
												 <option value = "Hindi"> Hindi </option>
												 <option value = "Italian"> Italian </option>
												 <option value = "Spanish"> Spanish </option>
											</select>
											<center><small><font color = "#cc0000"><div id = "errors"></div></font></small></center>
										</div>
										<div class="col-xs-4">
											<label for="inputEmail"> Country </label>
										</div>
										<div class="col-xs-12 form-group">	
											<select class="selectpicker drop form-control" name = "user_country" required>
												  <option><?php if($country !=""){ echo $country;} else {echo "Select country...";} ?></option>  
												  <option value="India">India</option> 
												  <option value="United States">United States</option> 
												  <option value="Afghanistan">Afghanistan</option> 
												  <option value="Albania">Albania</option> 
												  <option value="Algeria">Algeria</option> 
												  <option value="American Samoa">American Samoa</option> 
												  <option value="Andorra">Andorra</option> 
												  <option value="Angola">Angola</option> 
												  <option value="Anguilla">Anguilla</option> 
												  <option value="Antarctica">Antarctica</option> 
												  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
												  <option value="Argentina">Argentina</option> 
												  <option value="Armenia">Armenia</option> 
												  <option value="Aruba">Aruba</option> 
												  <option value="Australia">Australia</option> 
												  <option value="Austria">Austria</option> 
												  <option value="Azerbaijan">Azerbaijan</option> 
												  <option value="Bahamas">Bahamas</option> 
												  <option value="Bahrain">Bahrain</option> 
												  <option value="Bangladesh">Bangladesh</option> 
												  <option value="Barbados">Barbados</option> 
												  <option value="Belarus">Belarus</option> 
												  <option value="Belgium">Belgium</option> 
												  <option value="Belize">Belize</option> 
												  <option value="Benin">Benin</option> 
												  <option value="Bermuda">Bermuda</option> 
												  <option value="Bhutan">Bhutan</option> 
												  <option value="Bolivia">Bolivia</option> 
												  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
												  <option value="Botswana">Botswana</option> 
												  <option value="Bouvet Island">Bouvet Island</option> 
												  <option value="Brazil">Brazil</option> 
												  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
												  <option value="Brunei Darussalam">Brunei Darussalam</option> 
												  <option value="Bulgaria">Bulgaria</option> 
												  <option value="Burkina Faso">Burkina Faso</option> 
												  <option value="Burundi">Burundi</option> 
												  <option value="Cambodia">Cambodia</option> 
												  <option value="Cameroon">Cameroon</option> 
												  <option value="Canada">Canada</option> 
												  <option value="Cape Verde">Cape Verde</option> 
												  <option value="Cayman Islands">Cayman Islands</option> 
												  <option value="Central African Republic">Central African Republic</option> 
												  <option value="Chad">Chad</option> 
												  <option value="Chile">Chile</option> 
												  <option value="China">China</option> 
												  <option value="Christmas Island">Christmas Island</option> 
												  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
												  <option value="Colombia">Colombia</option> 
												  <option value="Comoros">Comoros</option> 
												  <option value="Congo">Congo</option> 
												  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
												  <option value="Cook Islands">Cook Islands</option> 
												  <option value="Costa Rica">Costa Rica</option> 
												  <option value="Cote D'ivoire">Cote D'ivoire</option> 
												  <option value="Croatia">Croatia</option> 
												  <option value="Cuba">Cuba</option> 
												  <option value="Cyprus">Cyprus</option> 
												  <option value="Czech Republic">Czech Republic</option> 
												  <option value="Denmark">Denmark</option> 
												  <option value="Djibouti">Djibouti</option> 
												  <option value="Dominica">Dominica</option> 
												  <option value="Dominican Republic">Dominican Republic</option> 
												  <option value="Ecuador">Ecuador</option> 
												  <option value="Egypt">Egypt</option> 
												  <option value="El Salvador">El Salvador</option> 
												  <option value="Equatorial Guinea">Equatorial Guinea</option> 
												  <option value="Eritrea">Eritrea</option> 
												  <option value="Estonia">Estonia</option> 
												  <option value="Ethiopia">Ethiopia</option> 
												  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
												  <option value="Faroe Islands">Faroe Islands</option> 
												  <option value="Fiji">Fiji</option> 
												  <option value="Finland">Finland</option> 
												  <option value="France">France</option> 
												  <option value="French Guiana">French Guiana</option> 
												  <option value="French Polynesia">French Polynesia</option> 
												  <option value="French Southern Territories">French Southern Territories</option> 
												  <option value="Gabon">Gabon</option> 
												  <option value="Gambia">Gambia</option> 
												  <option value="Georgia">Georgia</option> 
												  <option value="Germany">Germany</option> 
												  <option value="Ghana">Ghana</option> 
												  <option value="Gibraltar">Gibraltar</option> 
												  <option value="Greece">Greece</option> 
												  <option value="Greenland">Greenland</option> 
												  <option value="Grenada">Grenada</option> 
												  <option value="Guadeloupe">Guadeloupe</option> 
												  <option value="Guam">Guam</option> 
												  <option value="Guatemala">Guatemala</option> 
												  <option value="Guinea">Guinea</option> 
												  <option value="Guinea-bissau">Guinea-bissau</option> 
												  <option value="Guyana">Guyana</option> 
												  <option value="Haiti">Haiti</option> 
												  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
												  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
												  <option value="Honduras">Honduras</option> 
												  <option value="Hong Kong">Hong Kong</option> 
												  <option value="Hungary">Hungary</option> 
												  <option value="Iceland">Iceland</option>
												  <option value="Indonesia">Indonesia</option> 
												  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
												  <option value="Iraq">Iraq</option> 
												  <option value="Ireland">Ireland</option> 
												  <option value="Israel">Israel</option> 
												  <option value="Italy">Italy</option> 
												  <option value="Jamaica">Jamaica</option> 
												  <option value="Japan">Japan</option> 
												  <option value="Jordan">Jordan</option> 
												  <option value="Kazakhstan">Kazakhstan</option> 
												  <option value="Kenya">Kenya</option> 
												  <option value="Kiribati">Kiribati</option> 
												  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
												  <option value="Korea, Republic of">Korea, Republic of</option> 
												  <option value="Kuwait">Kuwait</option> 
												  <option value="Kyrgyzstan">Kyrgyzstan</option> 
												  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
												  <option value="Latvia">Latvia</option> 
												  <option value="Lebanon">Lebanon</option> 
												  <option value="Lesotho">Lesotho</option> 
												  <option value="Liberia">Liberia</option> 
												  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
												  <option value="Liechtenstein">Liechtenstein</option> 
												  <option value="Lithuania">Lithuania</option> 
												  <option value="Luxembourg">Luxembourg</option> 
												  <option value="Macao">Macao</option> 
												  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
												  <option value="Madagascar">Madagascar</option> 
												  <option value="Malawi">Malawi</option> 
												  <option value="Malaysia">Malaysia</option> 
												  <option value="Maldives">Maldives</option> 
												  <option value="Mali">Mali</option> 
												  <option value="Malta">Malta</option> 
												  <option value="Marshall Islands">Marshall Islands</option> 
												  <option value="Martinique">Martinique</option> 
												  <option value="Mauritania">Mauritania</option> 
												  <option value="Mauritius">Mauritius</option> 
												  <option value="Mayotte">Mayotte</option> 
												  <option value="Mexico">Mexico</option> 
												  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
												  <option value="Moldova, Republic of">Moldova, Republic of</option> 
												  <option value="Monaco">Monaco</option> 
												  <option value="Mongolia">Mongolia</option> 
												  <option value="Montenegro">Montenegro</option>
												  <option value="Montserrat">Montserrat</option> 
												  <option value="Morocco">Morocco</option> 
												  <option value="Mozambique">Mozambique</option> 
												  <option value="Myanmar">Myanmar</option> 
												  <option value="Namibia">Namibia</option> 
												  <option value="Nauru">Nauru</option> 
												  <option value="Nepal">Nepal</option> 
												  <option value="Netherlands">Netherlands</option> 
												  <option value="Netherlands Antilles">Netherlands Antilles</option> 
												  <option value="New Caledonia">New Caledonia</option> 
												  <option value="New Zealand">New Zealand</option> 
												  <option value="Nicaragua">Nicaragua</option> 
												  <option value="Niger">Niger</option> 
												  <option value="Nigeria">Nigeria</option> 
												  <option value="Niue">Niue</option> 
												  <option value="Norfolk Island">Norfolk Island</option> 
												  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
												  <option value="Norway">Norway</option> 
												  <option value="Oman">Oman</option> 
												  <option value="Pakistan">Pakistan</option> 
												  <option value="Palau">Palau</option> 
												  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
												  <option value="Panama">Panama</option> 
												  <option value="Papua New Guinea">Papua New Guinea</option> 
												  <option value="Paraguay">Paraguay</option> 
												  <option value="Peru">Peru</option> 
												  <option value="Philippines">Philippines</option> 
												  <option value="Pitcairn">Pitcairn</option> 
												  <option value="Poland">Poland</option> 
												  <option value="Portugal">Portugal</option> 
												  <option value="Puerto Rico">Puerto Rico</option> 
												  <option value="Qatar">Qatar</option> 
												  <option value="Reunion">Reunion</option> 
												  <option value="Romania">Romania</option> 
												  <option value="Russian Federation">Russian Federation</option> 
												  <option value="Rwanda">Rwanda</option> 
												  <option value="Saint Helena">Saint Helena</option> 
												  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
												  <option value="Saint Lucia">Saint Lucia</option> 
												  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
												  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
												  <option value="Samoa">Samoa</option> 
												  <option value="San Marino">San Marino</option> 
												  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
												  <option value="Saudi Arabia">Saudi Arabia</option> 
												  <option value="Senegal">Senegal</option> 
												  <option value="Serbia">Serbia</option> 
												  <option value="Seychelles">Seychelles</option> 
												  <option value="Sierra Leone">Sierra Leone</option> 
												  <option value="Singapore">Singapore</option> 
												  <option value="Slovakia">Slovakia</option> 
												  <option value="Slovenia">Slovenia</option> 
												  <option value="Solomon Islands">Solomon Islands</option> 
												  <option value="Somalia">Somalia</option> 
												  <option value="South Africa">South Africa</option> 
												  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
												  <option value="South Sudan">South Sudan</option> 
												  <option value="Spain">Spain</option> 
												  <option value="Sri Lanka">Sri Lanka</option> 
												  <option value="Sudan">Sudan</option> 
												  <option value="Suriname">Suriname</option> 
												  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
												  <option value="Swaziland">Swaziland</option> 
												  <option value="Sweden">Sweden</option> 
												  <option value="Switzerland">Switzerland</option> 
												  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
												  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
												  <option value="Tajikistan">Tajikistan</option> 
												  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
												  <option value="Thailand">Thailand</option> 
												  <option value="Timor-leste">Timor-leste</option> 
												  <option value="Togo">Togo</option> 
												  <option value="Tokelau">Tokelau</option> 
												  <option value="Tonga">Tonga</option> 
												  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
												  <option value="Tunisia">Tunisia</option> 
												  <option value="Turkey">Turkey</option> 
												  <option value="Turkmenistan">Turkmenistan</option> 
												  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
												  <option value="Tuvalu">Tuvalu</option> 
												  <option value="Uganda">Uganda</option> 
												  <option value="Ukraine">Ukraine</option> 
												  <option value="United Arab Emirates">United Arab Emirates</option> 
												  <option value="United Kingdom">United Kingdom</option>  
												  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
												  <option value="Uruguay">Uruguay</option> 
												  <option value="Uzbekistan">Uzbekistan</option> 
												  <option value="Vanuatu">Vanuatu</option> 
												  <option value="Venezuela">Venezuela</option> 
												  <option value="Viet Nam">Viet Nam</option> 
												  <option value="Virgin Islands, British">Virgin Islands, British</option> 
												  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
												  <option value="Wallis and Futuna">Wallis and Futuna</option> 
												  <option value="Western Sahara">Western Sahara</option> 
												  <option value="Yemen">Yemen</option> 
												  <option value="Zambia">Zambia</option> 
												  <option value="Zimbabwe">Zimbabwe</option>
												</select>
												<center><small><font color = "#cc0000"><div id = "errors"><?php echo @$_GET["e_country"];?></div></font></small></center>
										</div>
										<div class="col-xs-4">
											<label for="inputEmail"> Time zone </label>
										</div>
										<div class="col-xs-12 form-group">	
											<select class="selectpicker drop form-control" name = "user_zone" required>
												<option><?php if($timezone != ""){echo $timezone;} else {echo "Select time zone...";}?></option> 
												<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="(GMT-12:00) International Date Line West">(GMT-12:00) International Date Line West</option>
												<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="(GMT-11:00) Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>
												<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>
												<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="(GMT-09:00) Alaska">(GMT-09:00) Alaska</option>
												<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="(GMT-08:00) Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
												<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="(GMT-08:00) Tijuana, Baja California">(GMT-08:00) Tijuana, Baja California</option>
												<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>
												<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="(GMT-07:00) Chihuahua, La Paz, Mazatlan">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
												<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="(GMT-07:00) Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
												<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="(GMT-06:00) Central America">(GMT-06:00) Central America</option>
												<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="(GMT-06:00) Central Time (US & Canada)">(GMT-06:00) Central Time (US & Canada)</option>
												<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="(GMT-06:00) Guadalajara, Mexico City, Monterrey">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
												<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="(GMT-06:00) Saskatchewan">(GMT-06:00) Saskatchewan</option>
												<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="(GMT-05:00) Bogota, Lima, Quito, Rio Branco">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
												<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="(GMT-05:00) Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>
												<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="(GMT-05:00) Indiana (East)">(GMT-05:00) Indiana (East)</option>
												<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="(GMT-04:00) Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>
												<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="(GMT-04:00) Caracas, La Paz">(GMT-04:00) Caracas, La Paz</option>
												<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="(GMT-04:00) Manaus">(GMT-04:00) Manaus</option>
												<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="(GMT-04:00) Santiago">(GMT-04:00) Santiago</option>
												<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="(GMT-03:30) Newfoundland">(GMT-03:30) Newfoundland</option>
												<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="(GMT-03:00) Brasilia">(GMT-03:00) Brasilia</option>
												<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="(GMT-03:00) Buenos Aires, Georgetown">(GMT-03:00) Buenos Aires, Georgetown</option>
												<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="(GMT-03:00) Greenland">(GMT-03:00) Greenland</option>
												<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="(GMT-03:00) Montevideo">(GMT-03:00) Montevideo</option>
												<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="(GMT-02:00) Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
												<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="(GMT-01:00) Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
												<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="(GMT-01:00) Azores">(GMT-01:00) Azores</option>
												<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="(GMT+00:00) Casablanca, Monrovia, Reykjavik">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
												<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
												<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
												<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
												<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="(GMT+01:00) Brussels, Copenhagen, Madrid, Paris">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
												<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
												<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="(GMT+01:00) West Central Africa">(GMT+01:00) West Central Africa</option>
												<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Amman">(GMT+02:00) Amman</option>
												<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Athens, Bucharest, Istanbul">(GMT+02:00) Athens, Bucharest, Istanbul</option>
												<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Beirut">(GMT+02:00) Beirut</option>
												<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Cairo">(GMT+02:00) Cairo</option>
												<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="(GMT+02:00) Harare, Pretoria">(GMT+02:00) Harare, Pretoria</option>
												<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
												<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Jerusalem">(GMT+02:00) Jerusalem</option>
												<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Minsk">(GMT+02:00) Minsk</option>
												<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="(GMT+02:00) Windhoek">(GMT+02:00) Windhoek</option>
												<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="(GMT+03:00) Kuwait, Riyadh, Baghdad">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
												<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="(GMT+03:00) Moscow, St. Petersburg, Volgograd">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
												<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="(GMT+03:00) Nairobi">(GMT+03:00) Nairobi</option>
												<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="(GMT+03:00) Tbilisi">(GMT+03:00) Tbilisi</option>
												<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="(GMT+03:30) Tehran">(GMT+03:30) Tehran</option>
												<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="(GMT+04:00) Abu Dhabi, Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
												<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="(GMT+04:00) Baku">(GMT+04:00) Baku</option>
												<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="(GMT+04:00) Yerevan">(GMT+04:00) Yerevan</option>
												<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="(GMT+04:30) Kabul">(GMT+04:30) Kabul</option>
												<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="(GMT+05:00) Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
												<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="(GMT+05:00) Islamabad, Karachi, Tashkent">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
												<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="(GMT+05:30) Sri Jayawardenapura">(GMT+05:30) Sri Jayawardenapura</option>
												<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
												<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="(GMT+05:45) Kathmandu">(GMT+05:45) Kathmandu</option>
												<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="(GMT+06:00) Almaty, Novosibirsk">(GMT+06:00) Almaty, Novosibirsk</option>
												<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="(GMT+06:00) Astana, Dhaka">(GMT+06:00) Astana, Dhaka</option>
												<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="(GMT+06:30) Yangon (Rangoon)">(GMT+06:30) Yangon (Rangoon)</option>
												<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="(GMT+07:00) Bangkok, Hanoi, Jakarta">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
												<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="(GMT+07:00) Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
												<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
												<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="(GMT+08:00) Kuala Lumpur, Singapore">(GMT+08:00) Kuala Lumpur, Singapore</option>
												<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="(GMT+08:00) Irkutsk, Ulaan Bataar">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
												<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="(GMT+08:00) Perth">(GMT+08:00) Perth</option>
												<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="(GMT+08:00) Taipei">(GMT+08:00) Taipei</option>
												<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="(GMT+09:00) Osaka, Sapporo, Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
												<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="(GMT+09:00) Seoul">(GMT+09:00) Seoul</option>
												<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="(GMT+09:00) Yakutsk">(GMT+09:00) Yakutsk</option>
												<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="(GMT+09:30) Adelaide">(GMT+09:30) Adelaide</option>
												<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="(GMT+09:30) Darwin">(GMT+09:30) Darwin</option>
												<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="(GMT+10:00) Brisbane">(GMT+10:00) Brisbane</option>
												<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="(GMT+10:00) Canberra, Melbourne, Sydney">(GMT+10:00) Canberra, Melbourne, Sydney</option>
												<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="(GMT+10:00) Hobart">(GMT+10:00) Hobart</option>
												<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="(GMT+10:00) Guam, Port Moresby">(GMT+10:00) Guam, Port Moresby</option>
												<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="(GMT+10:00) Vladivostok">(GMT+10:00) Vladivostok</option>
												<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="(GMT+11:00) Magadan, Solomon Is., New Caledonia">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
												<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="(GMT+12:00) Auckland, Wellington">(GMT+12:00) Auckland, Wellington</option>
												<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="(GMT+12:00) Fiji, Kamchatka, Marshall Is.">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
												<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="(GMT+13:00) Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
											</select>
											<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_zone"];?></div></font></small></center>
										</div>

									</div>
									
									 
									 
								</div>
							 								 
								<div class=" well">
									<legend id="anch2" class=""> Account Details </legend>
									  
										<div class="row">
											<div class="col-xs-4">
												<label for="inputEmail">Username</label>
											</div>
											<div class="col-xs-12">	
												<input type="text" class="form-control" id="User" placeholder = "@Username" value="<?php echo '@'.$username; ?>" disabled>
											</div>
											<div class="col-xs-4">
												<label for="inputEmail"> Profile Link </label>
											</div>
											<div class=" col-xs-12 col-sm-5 col-md-4 col-lg-4">	
												<span class="txt-xs">https://www.fundlr.com/</span>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8"> 
												<input type="url" name = "user_url" class="form-control" id="User" placeholder="Username or Campaign name" required/>
											</div>
											<div class="col-xs-4">
												<label for="inputEmail">Email</label>
											</div>
											<div class="col-xs-12">	
												<input type="email" class="form-control" id="inputEmail" placeholder="Email@domain.com" value="{{ $uemail }}" disabled>
											</div>
											<div class="col-xs-4">
												<label for="inputEmail">Mobile</label>
											</div>
											<div class="col-xs-8">	
												
								<input  class="form-control" type="tel" name = "user_mobile" id="mobile-number" value ="<?php echo $mobile?>" placeholder="e.g. +1 702 123 4567" onkeypress="return isNumberKey(event);" required/>
								</div>
								<div class="col-xs-4" style="display:block;">
								    <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"  >Verify</a>
								</div>
											
											<div class="col-xs-4">
												<label for="inputEmail">Password</label>
											</div>
											<div class="col-xs-12">	
												<a  class="btn btn-primary" style="width:100%" href="reset-password.php" target="blank"> Change password </a>
											</div>
										</div>
									 
								</div>
								<div class="well">
									<legend id="anch3" class=""> Notifications</legend>
									 <table class="table table-striped unborder-th">
										<tr class="">
											<th>Notify me: </th>
											<th> <i class="fa fa-tablet"><i/> </th>
											<th> <i class="fa fa-envelope"><i/> </th>
											<th> <i class="fa fa-globe"><i/> </th>
										</tr>
										<tr>
										<?php
										
										 ?>
											<td> When the campaign I backed is successfull. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value = "scs-c" <?php  for($i =0; $i<$c; $i++){ if(($b[$i] == "scs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom"  name = "e_alert[]" value = "scs-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "scs-c")){ echo "checked = 'checked'";}}?>><label></label></td>
											<td> <input type="checkbox" class="checkbox-custom"  name = "b_alert[]" value = "scs-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "scs-c")){ echo "checked = 'checked'";}}?>><label></label></td>
										</tr>
										<tr>
											<td> When the campaign I backed is overfunded. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value = "ovf-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "ovf-c")){ echo "checked = 'checked'";}}?>> <label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value = "ovf-c"  <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "ovf-c")){ echo "checked = 'checked'";}}?>> <label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value = "ovf-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "ovf-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
										<tr>
											<td> When the campaign I backed is underfunded (a week before goal date). </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value ="uscs-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "uscs-c")){ echo "checked = 'checked'";}}?>><label></label></td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value ="uscs-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "uscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value ="uscs-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "uscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
										<tr>
											<td> When the campaign I backed goes unsuccessful. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value = "bckuscs-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "bckuscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value = "bckuscs-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "bckuscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value = "bckuscs-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "bckuscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
										<tr>
											<td> About rfd-cund from an unsuccessful campaign. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value = "rfduscs-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "rfduscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value = "rfduscs-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "rfduscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value = "rfduscs-c"<?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "rfduscs-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
										<tr>
											<td> When the campaign I backed is sending out rewards (as product or service). </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value = "rwd-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "rwd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value = "rwd-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "rwd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value = "rwd-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "rwd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
										</tr>
										<tr>
											<td> When the campaigner wants to message. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value="msg-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "msg-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value="msg-c"  <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "msg-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value="msg-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "msg-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
										<tr>
											<td> When someone re-funds my campaign. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value="rfd-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "rfd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value="rfd-c" <?php  for($i =0; $i<$e; $i++){ if(($d[$i] == "rfd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value="rfd-c" <?php  for($i =0; $i<$g; $i++){ if(($f[$i] == "rfd-c")){ echo "checked = 'checked'";}}?>> <label></label></td>
										</tr>
										<tr>
											<td> A week before my campaign's goal date. </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "m_alert[]" value="wkb-c" <?php for($i =0; $i<$c; $i++){ if(($b[$i] == "wkb-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "e_alert[]" value="wkb-c" <?php for($i =0; $i<$e; $i++){ if(($d[$i] == "wkb-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
											<td> <input type="checkbox" class="checkbox-custom" name = "b_alert[]" value="wkb-c" <?php for($i =0; $i<$g; $i++){ if(($f[$i] == "wkb-c")){ echo "checked = 'checked'";}}?>><label></label> </td>
										</tr>
									 
									 </table>
									
									 
									 
								</div>
							 								 
								<div class=" well">
									<legend id="anch4" class=""> Connect Social Networks </legend>
									<div class="social-network">
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <i class="fa fa-facebook"></i> </a> 
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Facebook
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "Fcbk" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "Fcbk")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
										
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <i class="fa fa-twitter"></i> </a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Twitter
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "twt" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "twt")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
										
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <i class="fa fa-linkedin"></i> </a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Linkedin
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "Lin" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "Lin")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <i class="fa fa-google-plus"></i> </a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Google+
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "GGP" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "GGP")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <img src="resources/views/img/gmail.png" alt="gmail"/> </a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Gmail
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "Gml" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "Gml")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
<!--
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<a hrfd-c="" class=""> <img src="img/outlook.png" alt="gmail"/> </a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
											    Facebook
											</div>
											<div class="col-xs-5 col-sm-3 col-sm-offset-4 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5 text-right">												
													<label class="switch">
													    <input type="checkbox" name = "social[]" value = "otl" <?php for($i =0; $i<$j; $i++){ if(($h[$i] == "otl")){ echo "checked = 'checked'";}}?>/>
													    <div class="slider round"></div>
													</label>
											</div>											 
										</div>
-->
									</div>
								</div>
								 
								<div class="save-div">
									<div class="row">
										<div class=" col-xs-12 text-right">
											<a hrfd-c="" class="btn btn-default">  Cancel </a>  
											<input type="submit" name = "submit" hrfd-c="" class="btn btn-primary " value="Save"/>  
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
	 
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog login">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Verify Mobile Number</h4> 
      </div>
      <div class="modal-body">
          <p>An OTP was sent to verify your mobile number: <b></b></p>
      
      <div class="row">
      <div class="col-xs-12 mt-20">	
        <div class="col-xs-6">
            <input type="text" name = "name" class="form-control" id="inputEmail" style ="margin-left:-17px;" placeholder="Enter OTP">
											
        </div>
          <div class=" col-xs-2"><span class="btn btn-default" data-toggle="tooltip" title="Resend"><i class="fa fa-repeat" aria-hidden="true"></i></span>
          </div>
           <div class="col-xs-offset-1 col-xs-3">
            <input  style="margin-left:-17px; "type="submit" name = "submit" hrfd-c="" class="btn  btn-primary " value="Submit"/>  
          </div>
      </div>
       </div>
        </div>
    </div>

  </div>
</div>

@include('includes.footer')

