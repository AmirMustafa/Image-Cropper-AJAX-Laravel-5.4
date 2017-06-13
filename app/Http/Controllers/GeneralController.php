<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use Illuminate\Contracts\Validation\Validator;
use Mail;


session_start();

class GeneralController extends Controller
{
	public function search() {
		return view('frontend.search');
	}
		
	public function ip() {


  include("public/geo_ip_files/geoipcity.inc");
  include("public/geo_ip_files/geoipregionvars.php");

  $giCity = geoip_open("public/geo_ip_files/GeoLiteCity.dat", GEOIP_STANDARD);

  //$ip =$_SERVER['REMOTE_ADDR'];
   $ip = file_get_contents('https://api.ipify.org');
   $record = geoip_record_by_addr($giCity, $ip);

   $country_code = $record->country_code;
   $country_code3 = $record->country_code;
   $country_name = $record->country_name;
   $region_code = $record->region;
   $region_name = $GEOIP_REGION_NAME[$record->country_code][$record->region];
   $city = $record->city;
   $postal_code = $record->postal_code;
   $latitude = $record->latitude;
   $longitude = $record->longitude;


   $data = [
   		'ip' => $ip,
   		'country_code' => $country_code,
   		'country_code3' => $country_code3,
   		'country_name' => $country_name,
   		'region_code' => $region_code,
   		'region_name' => $region_name,
   		'city' => $city,
   		'postal_code' => $postal_code,
   		'latitude' => $latitude,
   		'longitude' => $longitude,

   ];

   Session::put('ip', $ip);
   Session::put('country_code', $country_code);
   Session::put('country_code3', $country_code3);
   Session::put('country_name', $country_name);
   Session::put('region_code', $region_code);
   Session::put('region_name', $region_name);
   Session::put('city', $city);
   Session::put('postal_code', $postal_code);
   Session::put('latitude', $latitude);
   Session::put('longitude', $longitude);

   //echo Session::get('longitude');die;


		
   				//Select Query is for fethcing currency symbol
		$users = DB::table('currencies')->select(DB::raw('*'))              ->where('country', '=', $data['country_name'])              ->get();

		return view('frontend.ip', ['users' => $users]);
	}

	public function feedback() {
		return view('frontend.feedback');
	}

	public function post_feedback(Request $request) {
		//echo "Hiiiii Feedback";

		/*$name = $_POST["webname"];	//Receiving Data from Feedback Page
		$email = $_POST["webemail"];
		$q_first = $_POST["vweb"];
		$q_second = $_POST["lweb"];
		$q_third = $_POST["rweb"];
		$q_fourth = $_POST["fweb"];
		$msg = $_POST["fback"];
		$to = "feedback@chasingpapers.com";
		$headers = "From: $name<$email>";
		$message = "Name: $name\n Email: $email\n\n 1. Is this first time you have visited the website?\n : $q_first\n 2. Did you find what are you looking for?\n: $q_second\n 3. How would you rate our website?\n: $q_third\n 4. Feed us back please in the below area?\n: $q_fourth\n\n Message: $msg";*/

		$name = $_POST["webname"];	//Receiving Data from Feedback Page
		$email = $_POST["webemail"];
		$q_first = $_POST["vweb"];
		$q_second = $_POST["lweb"];
		$q_third = $_POST["rweb"];
		$q_fourth = $_POST["fweb"];
		$msg = $_POST["fback"];
		$to = "feedback@chasingpapers.com";
		$headers = "From: $name<$email>";
		$message = "Name: $name\n Email: $email\n\n 1. Is this first time you have visited the website?\n : $q_first\n 2. Did you find what are you looking for?\n: $q_second\n 3. How would you rate our website?\n: $q_third\n 4. Feed us back please in the below area?\n: $q_fourth\n\n Message: $msg";

		$data = [//Storing received data in array to passin Mail Facade 
			'name' => $name,//Now this key is treated as Variable in view
			'email' => $email,
			'q_first' => $q_first,
			'q_second' => $q_second,
			'q_third' => $q_third,
			'q_fourth' => $q_fourth,
			'msg' => $msg,
			'to' => $to,
			'headers' => $headers,
			'message' => $message
		];


		Mail::send( 'emails.feedback_mail', $data, function( $message ) use ($data)
		{
		    $message->from($data['email']);						//FROM
		    $message->to('amirengg15@chasingpapers.com');			//TO
		    $message->subject('A New Feedback Mail has arrived!');

		});

		//WAY TO POPUP SUCCESSFUL ALERT MESSAGE BEFORE REDIRECTION 

	//Session::flash('success_mail', 'Your feedback was sent successfully!');

	return redirect()->route('/');
	}

	public function newsletter(Request $request) {
		//echo "Amir";

		$email = $request['email'];
		//echo $email;
		?>
			<div class="success_newsletter_subscribe">
								
									<div class="icon">
										<i class="fa fa-check-circle"> </i>
									 </div>
									 <div class="subscriber_mail">
										<p> &nbsp; Subscribed using: <br/>&nbsp;<span> <?php echo $email; ?>  </span></p>
									 </div>												
			</div>

		<?php
	}




}	/*End GeneralController Class*/