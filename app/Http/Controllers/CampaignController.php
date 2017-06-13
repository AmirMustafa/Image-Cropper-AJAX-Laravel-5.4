<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use Illuminate\Contracts\Validation\Validator;


session_start();

class CampaignController extends Controller
{
	public function getProfileCampaign1() {
		/*if (Session::has('cid')) {	//for fetching db value for incomplete campaign case
		  $cid = Session::get('cid');
		  $users = DB::select(DB::raw("SELECT * FROM cmp_card WHERE camp_id='$cid'"));
		  //print_r($users);
		  return view('frontend.profile_campaign1', ['users' => $users]);
		}
		else {*/			//For fresh campaign case
			Session::forget('cid');	
			return view('frontend.profile_campaign1');
		// }
		
	}
										//Receiving Data from profile_campaign1.blade.php
	public function postProfileCampaign1(Request $request) {	
		$uemail = Session::get('email');	//Session getting from login
		$cid = Session::get('cid');			//Session getting from camppro function in 								this page (i.e. for the case of incomplete campaign)

		$cname = $_POST['cname'];			//Receiving all the three name i/p variable
		$ccateg = $_POST['ccateg'];
		$cregion = $_POST['cregion'];

		Session::put('cname', $cname);		//setting session
		Session::put('ccateg',$ccateg);
		Session::put('cregion', $cregion);

		if($uemail && !$cid) {		//Fresh Case
			//echo "Fresh";
			$profile_campaign1_query = DB::insert('insert into cmp_card (cpm_name, cpm_category, cpm_region, email) values (?, ?, ?, ?)', [$cname, $ccateg, $cregion, $uemail]);					//Insert Query
		}

		if($uemail && $cid) {		//Update Case
			//echo "Update";
														//Update Query
			$users = DB::select(DB::raw("UPDATE cmp_card SET cpm_name='$cname', cpm_category='$ccateg', cpm_region='$cregion' WHERE camp_id = '$cid'"));

			Session::forget('cid');		//comment this line if one campaign per email
		}												



		return redirect()->route('profile_campaign2');
	}

	public function getProfileCampaign2() {
		$uemail = Session::get('email');
		$cname = Session::get('cname');
		$fetch = DB::select(DB::raw("SELECT * FROM cmp_card WHERE email='$uemail' AND cpm_name='$cname'"));	//fethcing based on email and campaign name
		// print_r($fetch);die;

		return view('frontend.profile_campaign2', ['fetch' => $fetch]);
	}

	public function postProfileCampaign2(Request $request) {	

		if (Session::has('campaign_images')) {  //for fetching session value
		  	$campaign_image = Session::get('campaign_images');
		}
		else {
			$campaign_image = "";
		}

		$chostname = $_POST['chostname'];
		$host_name = $_POST['host_name'];
        $c_dur = $_POST['c_dur'];
    	//$select = $_POST['select'];
		$funding_goal = $_POST['funding_goal'];
		$description = $_POST['description'];

		Session::put('chostname', $chostname);
		Session::put('host_name', $host_name);
		Session::put('c_dur', $c_dur);
		//Session::put('select', $select);
		Session::put('funding_goal', $funding_goal);
		Session::put('description', $description);

		$cname = Session::get('cname');
		// echo $cname;die;

		$cpmid = DB::table('cmp_card')
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cpmid = $cpmid[0]->total;		//Receiving exact id
		
		$q = DB::select(DB::raw("update  cmp_card  set campgn_host = '$chostname', host_name = '$host_name', cpm_dur	= '$c_dur', funding_goal= '$funding_goal', description = '$description', campaign_image = '$campaign_image' where camp_id = '$cpmid'"));							//Update Query

		
		Session::forget('campaign_images');

		return redirect()->route('profile_campaign3');



		//EXECUTE SELECT QUERY
		//EXECUTE FETCH QUERY
		//REDIRECT TO profile_campaign3.blade.php WITH FETCH DATA

	}

	public function getProfileCampaign3() {			//Video Page
		$uemail = Session::get('email');
		$cname = Session::get('cname');
		$fetch = DB::select(DB::raw("SELECT * FROM videos WHERE email='$uemail' AND cpm_name='$cname'"));	//fethcing based on email and campaign name
		// print_r($fetch);die;

		return view('frontend.profile_campaign3', ['fetch' => $fetch]);
	}

	public function postProfileCampaign3(Request $request) {
		// Video Upload in Folder
		//echo "Hiii";
		
			$videoTitle = $_POST['title'];
			$videoDesc = $_POST['info']; 
			$videoTags = $_POST['tags'];

			$uemail = Session::get('email');	//getting from session
			$cname = Session::get('cname');		//for purpose of fetch


			if($_FILES["videoFile"]["name"] != ''){
				//print_r($_FILES["videoFile"]["name"]);die;
			    $fileSize = $_FILES['videoFile']['size'];
			    $fileType = $_FILES['videoFile']['type'];
			    $fileName = str_shuffle('nityanandamaity').'-'.basename($_FILES["videoFile"]["name"]);
				$targetDir = "resources/views/videos/";
				$targetFile = $targetDir . $fileName;
				$allowedTypeArr = array("video/mp4", "video/avi", "video/mpeg", "video/mpg", "video/mov", "video/wmv", "video/rm");
				if(in_array($fileType, $allowedTypeArr)) {
				    if(move_uploaded_file($_FILES['videoFile']['tmp_name'], $targetFile)) {
				        $videoFilePath = $targetFile;
				    }else{
				        
						exit();
				    }
				}else{
					
					exit();
				}


			$profile_campaign1_query = DB::insert('insert into videos (video_title, video_description, video_tags, video_path, cpm_name, email) values (?, ?, ?, ?, ?, ?)', [$videoTitle, $videoDesc, $videoTags, $fileName, $cname, $uemail]);
		

			}else{

				exit();
			}

			return redirect()->route('profile_campaign4'); 
	}

	public function getProfileCampaign4() {		//Host Page
		$uemail = Session::get('email');
		$cname = Session::get('cname');
		$fetch = DB::select(DB::raw("SELECT * FROM cmp_card WHERE email='$uemail' AND cpm_name='$cname'"));	//fethcing based on email and campaign name

		return view('frontend.profile_campaign4', ['fetch' => $fetch]);
	}

	public function postProfileCampaign4(Request $request) {
		
		//echo "Hiiiiii";

		$cname = Session::get('cname');		//keeping session value in variable

		$dob = $_POST['dob'];
		$website = $_POST['website'];
		$location = $headquarter = $_POST['location'];

    	Session::put('dob', $dob);			//setting session
		Session::put('location', $location);
		Session::put('website', $website);
		Session::put('headquarter', $headquarter);

		$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cpmid = $cpmid[0]->total;			//Receiving exact id
		
		$q = DB::select(DB::raw("update  cmp_card  set dob = '$dob', location = '$location', website	= '$website', headquarter= '$headquarter' where camp_id = '$cpmid'"));							//Update Query

		

		//echo Session::get('headquarter');

		return redirect()->route('profile_campaign5');
	}

	public function getProfileCampaign5() {
		$uemail = Session::get('email');
		$cname = Session::get('cname');
		/*$fetch = DB::select(DB::raw("SELECT * FROM cmp_card WHERE email='$uemail' AND cpm_name='$cname'"));	//fethcing based on email and campaign name*/

		$fetch = DB::select(DB::raw("SELECT * FROM rewardcard WHERE email='$uemail' AND cpm_name='$cname'"));	//fethcing based on email and campaign name
		/*echo "<pre>";
		print_r($fetch);die;*/

		return view('frontend.profile_campaign5', ['fetch' => $fetch]);
	}

	public function postProfileCampaign5(Request $request) {
		$uemail = Session::get('email');
		$re = strtolower($uemail);
		//echo $re; die;
		$cname = Session::get('cname');	//keeping session value in variable (campaign name)

		$RewardTitle = $u_title = $_POST['u_title'];
		$tinymce1 = $reward_description = $_POST['reward_description'];
        $Cost = $u_cost = $_POST['u_cost'];
    	$Quantity = $u_quantity = $_POST['u_quantity'];
		$SelectMonth = $u_dlv_mnth = $_POST['u_dlv_mnth'];
		$SelectYear = $u_dlv_year = $_POST['u_dlv_year'];

		Session::put('u_title', $u_title);			//setting session
		Session::put('reward_description', $reward_description);
		Session::put('u_cost', $u_cost);
		Session::put('u_quantity', $u_quantity);
		Session::put('u_dlv_mnth', $u_dlv_mnth);
		Session::put('u_dlv_year', $u_dlv_year);

		//echo Session::get('u_dlv_year');

		$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cpmid = $cpmid[0]->total;			//Receiving exact id
		
		$q = DB::select(DB::raw("update  cmp_card  set title = '$u_title', reward_description = '$$reward_description', cost	= '$u_cost', qunatity= '$u_quantity', est_delivery_month = '$u_dlv_mnth', est_delivery_year = '$u_dlv_year' where camp_id = '$cpmid'"));
						 //Update Query into cpm_card


		$q1 = DB::select(DB::raw("INSERT INTO rewardcard (title, description, cost, Quantity, est_month, est_year, email, cpm_name) values ('$RewardTitle', '$tinymce1', '$Cost', '$Quantity', '$SelectMonth','$SelectYear','$re', '$cname')"));	//Insert Query into Reward Card


		return redirect()->route('profile_campaign6');
	}

	public function getProfileCampaign6() {
		return view('frontend.profile_campaign6');
	}

	public function postProfileCampaign6(Request $request) {
		$cname = Session::get('cname');		//keeping session value in variable

		$user_mobile = $_POST['user_mobile'];
		$identity = $_POST['identity'];
        $bank = $_POST['bank'];
    	$branch = $_POST['branch'];
		$account = $_POST['account'];
		$ifsc = $_POST['ifsc'];
    	$rtgs = $_POST['rtgs'];

    	Session::put('user_mobile', $user_mobile);		//setting the session
    	Session::put('identity', $identity);
    	Session::put('bank', $bank);
    	Session::put('branch', $branch);
    	Session::put('account', $account);
    	Session::put('ifsc', $ifsc);
    	Session::put('rtgs', $rtgs);

    	//echo Session::get('rtgs');

    	$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cpmid = $cpmid[0]->total;			//Receiving exact id

		$q = DB::select(DB::raw("update  cmp_card  set  mobile = '$user_mobile', identiti = '$identity', bank = '$bank', branch = '$branch', account = '$account', ifscode = '$ifsc', rtgs = '$rtgs' where camp_id = '$cpmid'"));	//Firing Update QUERY 

		$q1 = DB::select(DB::raw("UPDATE cmp_card  SET camp_check= '1' where camp_id = '$cpmid'"));	// 0 or 1 case for Campaign



		return redirect()->route('profile_campaign7');
	}

	public function getProfileCampaign7() {
		$uemail = Session::get('email');
		$re = strtolower($uemail);
		//echo $re; die;
		$cname = Session::get('cname');	//keeping session value in variable (campaign name)

		//echo Session::get('u_dlv_year');

		$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cpmid = $cpmid[0]->total;

		$q1 = DB::select(DB::raw("SELECT * FROM cmp_card WHERE camp_id = '$cpmid'"));	
		//print_r($q1); die;

		return view('frontend.profile_campaign7', ['q1' => $q1]);
	}

	public function postProfileCampaign7() {
		echo "Hiii";
		//return redirect()->route('profile_campaign8');
	}

	public function getCampaign() {
		$reward_mail = Session::get('email');
		

		$q = DB::select(DB::raw("SELECT info FROM cpm_poc WHERE poc_id=(
                                   SELECT max(poc_id) FROM cpm_poc
                            )"));	//Fetching Max Data from cpm_poc

		/*$q = DB::select(DB::raw("SELECT info FROM cpm_poc WHERE poc_id=(
                                   SELECT max(poc_id) FROM cpm_poc
                            ) AND email = '$reward_mail'"));*/	//Fetching Max Data from cpm_poc
//print_r($q);die;
		/*$q1 = DB::select(DB::raw("SELECT a.cost, a.Quantity, a.time, c.cpm_name, c.cpm_region, c.timestamp, c.host_name, c.cpm_dur, c.funding_goal
    FROM rewardcard a
    JOIN cmp_card c ON a.email = c.email
    WHERE a.email =  '$reward_mail'"));*/	//Fetching data from cpm_card + rewardcard
    $q1 = DB::select(DB::raw("SELECT * FROM rewardcard WHERE email = '$reward_mail'"));

    /*$q1 = DB::table('rewardcard')->where('email','=', 'a@gmail.com')->get();*/

    // print_r($q1);die;





		/*$q2 = "SELECT a.cost, a.Quantity, a.time, c.cpm_name, c.cpm_region, c.timestamp, c.host_name, c.cpm_dur, c.funding_goal
    FROM rewardcard a
    JOIN cmp_card c ON a.email = c.email
    WHERE a.email =  '$reward_mail'";

    echo $q2; die;*/

		/*$q = DB::table('cpm_poc')        
						->where('poc_id','=', DB::raw("(
                                   SELECT max(poc_id) FROM cpm_poc
                            )")) 
						->get();*/

		$q3 = DB::select(DB::raw("SELECT * FROM usr_dtls WHERE email = '$reward_mail'"));		
	    return view('frontend.campaign', ['q' => $q, 'q1' => $q1, 'q3' => $q3]);
		
	}

	public function explore() {
		
		$fetch = DB::select(DB::raw("SELECT * FROM cmp_card ORDER BY 1 DESC"));
		return view('frontend.explore', ['fetch' => $fetch]);
	}

	public function preview_campaign() {
		$reward_mail = Session::get('email');

		$q = DB::select(DB::raw("SELECT info FROM cpm_poc WHERE poc_id=(
                                   SELECT max(poc_id) FROM cpm_poc
                            )"));	//Firing Update QUERY	

		$q1 = DB::select(DB::raw("SELECT * FROM rewardcard WHERE email = '$reward_mail'"));

		return view('frontend.preview_campaign', ['q' => $q, 'q1' => $q1]);
	}

	public function manage_campaign() {
		$reward_mail = Session::get('email');
		
		$q = DB::select(DB::raw("SELECT info FROM cpm_poc WHERE poc_id=(
                                   SELECT max(poc_id) FROM cpm_poc
                            )"));	//Firing Fetch QUERY	

		$q1 = DB::select(DB::raw("SELECT * FROM rewardcard WHERE email = '$reward_mail'"));

		return view('frontend.manage_campaign', ['q' => $q, 'q1' => $q1]);
	}

	public function campaign_edit() {

		$uemail = Session::get('email');

		$q = DB::select(DB::raw("SELECT info FROM cpm_poc WHERE poc_id=(
                                   SELECT max(poc_id) FROM cpm_poc
                            )"));	//Firing Fetch QUERY

        $q1 = DB::select(DB::raw("SELECT * FROM usr_dtls WHERE email = '".$uemail."'"));	//Firing Fetch QUERY	

		return view('frontend.campaign_edit', ['q' => $q, 'q1' => $q1]);
	}

	public function post_campaign_edit() {
		$uemail = Session::get('email');
		$editer = $_REQUEST['medium_editor'];

		$search = array("'", "(", ")");

		$replace = array("\'", "\(", "\)");

 		$a = str_replace($search, $replace, $editer); 

 		//echo $a; die;


 		$q = DB::select(DB::raw("update  usr_dtls  set  count2 = '1' where email = '$uemail'"));	//Firing Update QUERY

 		$q1 = DB::select(DB::raw("INSERT INTO cpm_poc(info, email) VALUES('$a', '$uemail')"));	//Firing Update QUERY



 		if(count($q) > 0) {
				echo "all good";
		}
		else {
			
			echo "Hiiiii";
			return redirect()->route('manage_campaign');
		}

	}

	public function add_reward() {			//For Add reward Page
		$uemail = Session::get('email');//getting email from session
		$cname = Session::get('cname');	//getting campaign name from session
		$re = strtolower($uemail);		
		$RewardTitle = $_GET['RewardTitle'];//Receiving All Data with AJAX
		$tinymce1=$_GET['tinymce1'];
		$Cost =$_GET['Cost'];
		$Quantity=$_GET['Quantity'];
		$SelectMonth=$_GET['SelectMonth'];
		$SelectYear=$_GET['SelectYear'];

		$q1 = DB::select(DB::raw("INSERT INTO rewardcard (title, description, cost, Quantity, 	est_month, est_year, email, cpm_name) values ('$RewardTitle', '$tinymce1', '$Cost', '$Quantity', '$SelectMonth','$SelectYear','$re', '$cname')"));				//Insert Query into Reward Card
		//echo $SelectYear;

		//return view('frontend.get_reward');
	}


	public function get_reward() {			//For Delivery Page
		return view('frontend.get_reward');
	}

	public function camppro() {

		$id = $_GET['js_camp_id'];		//receiving ID From AJAX

		Session::put('cid', $id);
		// echo Session::get('cid');

		//$users = DB::select(DB::raw("UPDATE cmp_card SET cpm_name='hello2' WHERE camp_id = '$id'"));								//Firing Update QUERY
		//echo $q1 = "update * FROM cmp_card WHERE id = '$id'";

		

		//return view('frontend.camppro');
	}

	public function camppro2() {
		if (Session::has('cid')) {	//for fetching db value for incomplete campaign case
		  $cid = Session::get('cid');
		  $users = DB::select(DB::raw("SELECT * FROM cmp_card WHERE camp_id='$cid'"));
		  //print_r($users);
		  return view('frontend.camppro', ['users' => $users]);
		}
	}

/* ============ Added for Image Cropper of Campaign Card: Start ============ */
		public function image() {
			return view('frontend.image');
		}

		public function postImage() {
			//echo "HIIIIII";

			$data = $_POST['image'];

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$imageName = time().'.png';
			file_put_contents('resources/views/campaign_images/'.$imageName, $data);

			Session::put('campaign_images', $imageName);
			
			echo "Image Uploaded";
		}


/* ============ Added for Image Cropper of Campaign Card: End ============ */



		public function hostname_ajax() {
			//echo "hiiiii";

			$host_name = $_GET['host_name'];
			$uemail = Session::get('email');
			$re = strtolower($uemail);
			//echo $re; die;
			$cname = Session::get('cname');	//keeping session value in variable (campaign name)

			//echo Session::get('u_dlv_year');

			$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cid = $cpmid = $cpmid[0]->total;

		$q = DB::select(DB::raw("update  cmp_card  set host_name = '$host_name' where camp_id = '$cpmid'"));							//Update Query


		}

		public function campaign_dur_ajax() {
			//echo "hiiiii";

			$c_dur = $_GET['c_dur'];

			$uemail = Session::get('email');
			$re = strtolower($uemail);
			//echo $re; die;
			$cname = Session::get('cname');	//keeping session value in variable (campaign name)

			//echo Session::get('u_dlv_year');

			$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cid = $cpmid = $cpmid[0]->total;

		$q = DB::select(DB::raw("update  cmp_card  set cpm_dur = '$c_dur' where camp_id = '$cpmid'"));							//Update Query
			


		}

		public function funding_goal_ajax() {
			//echo "hiiiii";

			$funding_goal = $_GET['funding_goal'];

			$uemail = Session::get('email');
			$re = strtolower($uemail);
			//echo $re; die;
			$cname = Session::get('cname');	//keeping session value in variable (campaign name)

			//echo Session::get('u_dlv_year');

			$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cid = $cpmid = $cpmid[0]->total;

		$q = DB::select(DB::raw("update  cmp_card  set funding_goal = '$funding_goal' where camp_id = '$cpmid'"));							//Update Query
			


		}

		public function description_ajax() {
			//echo "hiiiii";

			$description = $_GET['description'];

			$uemail = Session::get('email');
			$re = strtolower($uemail);
			//echo $re; die;
			$cname = Session::get('cname');	//keeping session value in variable (campaign name)

			//echo Session::get('u_dlv_year');

			$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cid = $cpmid = $cpmid[0]->total;

		$q = DB::select(DB::raw("update  cmp_card  set description = '$description' where camp_id = '$cpmid'"));							//Update Query
			


		}

		public function campaign_type_ajax() {
			//echo "hiiiii";

			$type = $_GET['chostname'];

			$uemail = Session::get('email');
			$re = strtolower($uemail);
			//echo $re; die;
			$cname = Session::get('cname');	//keeping session value in variable (campaign name)

			//echo Session::get('u_dlv_year');

			$cpmid = DB::table('cmp_card')		//selecting id where to update
								->select('camp_id as total') 
								->where('cpm_name','=', $cname)
		
								->get();

		$cid = $cpmid = $cpmid[0]->total;

		$q = DB::select(DB::raw("update  cmp_card  set campgn_host = '$type' where camp_id = '$cpmid'"));							//Update Query
			


		}




		
}	/*End CampaignController Class*/