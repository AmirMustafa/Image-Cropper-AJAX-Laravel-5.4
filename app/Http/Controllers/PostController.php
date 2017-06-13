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

class PostController extends Controller
{
	public function signup() {

		/*$users = DB::table('usr_dtls')->get();*/
		return view('frontend.signup');
	}

	public function signup_dbm(Request $request) {

 /*================== Laravel Validation for signup: Start ==================*/ 
		$this->validate($request, [
			'full_name' => 'required | min:4',
			'last_name' => 'required | min:4',
			'user_name' => 'required | min:4',
			'uemail' => 'required | email',
			'user_pass1' => [
				'required',
				'min:8',
				'regex:/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,13}$/',
			 ],
			'user_pass2' => 'required| min:8 | same:user_pass1'
		]);

/*================== Laravel Validation for signup: End ==================*/

		/* =================== To check Laravel is connected to DB: Start =================== */

		/*		if (DB::connection()->getDatabaseName())
				{
				   return 'Connected to the DB: ' . DB::connection()->getDatabaseName();
				}

		*/

		/* =================== To check Laravel is connected to DB: End =================== */


/*		echo $full_name = $request->full_name;
		echo $last_name = $request->last_name;
		echo $user_name = $request->user_name;
		echo $uemail = $request->uemail;
		echo $user_pass1 = $request->user_pass1;
		echo $user_pass2 = $request->user_pass2;*/

		$data['first_name'] = $request->full_name;
		$data['last_name'] = $request->last_name;
		$data['user_name'] = $request->user_name;
		$data['uemail'] = $request->uemail;
		$data['user_pass1'] = $request->user_pass1;
		$data['user_pass2'] = $request->user_pass2;

		// print_r($data);die;

		Session::put('email', $data['uemail']);
		
/*		if (Session::has('email')) {
		  echo Session::get('email');
		}*/


		$insert = DB::insert('insert into usr_dtls (first_name, last_name, username, email,password ) values (?, ?, ?, ?, ?)', [$data['first_name'], $data['last_name'], $data['user_name'], $data['uemail'], $data['user_pass1']]);

		if(!$insert) {
				return view('signup');		
		}

		Session::put('uemail', $data['uemail']);

		$fetch = DB::table('usr_dtls')->select(DB::raw('*'))->where('email', '=', $data['uemail'])->get();

		//return redirect()->route('home', ['fetch' => $fetch]);

		Mail::send( 'emails.signup_mail', $data, function( $message ) use ($data)
		{
		    $message->from('info@fundlr.in');		//FROM
		    $message->to($data['uemail']);			//TO
		    $message->subject('Welcome to Fundlr !!');

		});

		return view('frontend.index', ['fetch' => $fetch]);
		
		

		}

		public function signin_dbm(Request $request) {		
			
			$email = $_GET['uemail'];
			$password = $_GET['password'];

			$q = DB::table('usr_dtls')
					->where('email', '=', $email)
					->where('password', '=', $password)->get();

			if(count($q) > 0) {
				//echo "all good";

				Session::put('email', $email);
				//Redirection is done with the help of ajax

				//return "/home";

			}
			else {
				echo "
                <div class='row' style= 'color: #ff1a1a;'>
                    <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
                    <span style= 'font-size:14px; font-weight: 600; float:left;padding-left:7px;padding-top: 0px;'>Username or password is incorrect.</span> 
                </div>
             ";
			}

		}

		public function camp_signin_dbm(Request $request) {		
			
			$email = $_GET['uemail'];
			$password = $_GET['password'];

			$q = DB::table('usr_dtls')
					->where('email', '=', $email)
					->where('password', '=', $password)->get();

			if(count($q) > 0) {
				//echo "all good";

				Session::put('email', $email);
				//Redirection is done with the help of ajax

			}
			else {
				echo "
                <div class='row' style= 'color: #ff1a1a;'>
                    <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
                    <span style= 'font-size:14px; font-weight: 600; float:left;padding-left:7px;padding-top: 0px;'>Username or password is incorrect.</span> 
                </div>
             ";
			}

		}

		public function setting() {

			$uemail = Session::get('email');

			$fetch = DB::select(DB::raw("SELECT * FROM usr_dtls WHERE email = '$uemail' "));

			return view('frontend.setting', ['fetch' => $fetch]);
		}

		public function setting_dbm(Request $request) {
			$uemail = Session::get('email');

			$gen = $_POST["gender"];
			$lang = $_POST["user_lang"];
			$country = $_POST["user_country"];
			$timezone = $_POST["user_zone"];
			$url = $_POST["user_url"];
			$mobile = $_POST["user_mobile"];
			$mobalert = implode(",",$_POST["m_alert"]);
			@$emalert = implode(",",$_POST["e_alert"]);
			@$brwalert = implode(",",$_POST["b_alert"]);
			@$social_net = implode(",",$_POST["social"]);

			$insert = DB::select(DB::raw("update usr_dtls set gender = '$gen', U_lng = '$lang', U_cnty = '$country', 
			U_tmzn = '$timezone',U_link = '$url',U_mtel = '$mobile',U_a_alert = '$mobalert',
		    U_b_alert = '$emalert',U_c_alert = '$brwalert', U_social_net = '$social_net'
			 where email = '$uemail'"));

			//return view('frontend.setting', ['fetch2' => $fetch2]);

			return redirect()->route('setting');
		}

		public function profile_page() {
			$uemail = Session::get('email');
			//echo $uemail;die;
			$fetch = DB::select(DB::raw("SELECT * FROM usr_dtls WHERE email = '$uemail'"));

			return view('frontend.profile_page', ['fetch' => $fetch]);
		}

/*============= Controller For AJAX Error Message Show: Start ================ */
		public function checkfname() {
			$fname = $_GET['full_name'];
			//echo $fname;die;
			
			if($fname == "null" || $fname == "")
		    {
		        echo "<div class='row' style= 'color: #ff1a1a;'>
		         
		        <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
		        <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>First name is required.</span> 
		        </div>";
		    }else if(strlen($fname) <=4)
		    {
		        
		        echo "<div class='row' style= 'color: #ff1a1a;'>
		         
		        <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
		        <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>At least 4 letters is important.</span> 
		        </div>";
		//echo"Atleast 3 letter is important";
		    }
		//    else if(!preg_match("/^[a-z]+(\ )[a-z]+(\ )?[a-z]+?$/i",$fname))
		//    {
		//        echo"Please enter your name with surname";
		//    }
		    exit();

		}

		public function checklname() {
			$lname = $_GET['lastname'];
			//echo $lname;die;
			
			if($lname == "null" || $lname == "")
		    {
		        echo "<div class='row' style= 'color: #ff1a1a;'>
		         
		        <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
		        <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Last Name is required.</span> 
		        </div>";
		    }else if(strlen($lname) <=4)
		    {
		        
		        echo "<div class='row' style= 'color: #ff1a1a;'>
		         
		        <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
		        <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>At least 4 letters is important.</span> 
		        </div>";
		//echo"Atleast 3 letter is important";
		    }
		//    else if(!preg_match("/^[a-z]+(\ )[a-z]+(\ )?[a-z]+?$/i",$fname))
		//    {
		//        echo"Please enter your name with surname";
		//    }
		    exit();
		}

		public function checkuname() {
			$uname = $_GET['username'];
			//echo $uname;die;
			
			$checkdata= DB::select(DB::raw("SELECT username FROM usr_dtls WHERE username='$uname' "));	//Firing Fetching QUERY
			
			if(count($checkdata) > 0) {
				echo "Oops, username already exits";
			}
			else if($uname == "null" || $uname == "")
			 {
	       		 echo "<div class='row' style= 'color: #ff1a1a;'>
	         
	       		 <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
	       		 <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Username is required.</span> 
	       		 </div>";
			 }
			 else if(strlen($uname) < 4)
	 		{
	        		echo "<div class='row' style= 'color: #ff1a1a;'>
	         
	       		 <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
	       		 <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>At least 4 letters is important.</span> 
	       		 </div>";
	 		}
			 else 
			 {
	   		     echo "<div class='row' style= 'color: #7fca5d;'>
	         
	    		    <i class='fa fa-check-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
	      		  <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Username available.</span> 
	     		   </div>";

	 		}
			 exit();
		}

		public function checkemail() {
			$emailId = $_GET['email'];
			// echo $emailId;die;

			$checkemail= DB::select(DB::raw("SELECT email FROM usr_dtls WHERE email='$emailId' "));	//Firing Fetching QUERY

			if(count($checkemail) > 0) {
				echo "<div class='row' style= 'color: #ff1a1a;'>
         
        		<i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
        		<span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Email id already exists.</span> 
        		</div>";
			}
			else if(!preg_match("/^[a-z]+(_|\.)?[a-z0-9]*?@[a-z]+\.[a-z]+$/i",$emailId))
 			{
        		echo "<div class='row' style= 'color: #ff1a1a;'>
         
       		 <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
       		 <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Invalid email id.</span> 
        		</div>";
     
				//echo "Invalid email address";
			}
			else
			 {
	   		     echo "<div class='row' style= 'color: #7fca5d;'>
	         
	    		    <i class='fa fa-check-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
	      		  <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Email available.</span> 
	     		   </div>";

	 		}
 			exit();
			

		}

		public function checkpass2() {
			$upass1 = $_GET['pass1'];
			// echo $upass1;die;

			if((strlen($upass1) < 8))
    		 {
    		    echo "<div class='row' style= 'color: #ff1a1a;'>
         
     		   <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
     		   <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Password must be 8 characters long.</span> 
     		   </div>";
    		 //echo "Password must be 8 characters long.";
    		 }
    		 if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,13}$/",$upass1))
    		 {
     		   echo "<div class='row' style= 'color: #ff1a1a;'>
         
      		  <i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:15px' ></i> 
      		  <span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Must have Uppercase, Lowercase and number.</span> 
      		  </div>";
      		//echo "Must have Uppercase, Lowercase and number.";
    		 }
 		 //else if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[		A-Za-z\d$@$!%*#?&]$/",$upass1))
		//      {
		//          echo"Should have at least one letter,number & special char";
		//      }
   		 exit();
    
		}



/*============= Controller For AJAX Error Message Show: Start ================ */

		public function logout() {
			Session::flush();

			return redirect()->route('home');
		}

		
}