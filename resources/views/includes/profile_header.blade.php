<!-- ======= Fetching Data for Profile header dropdown: Start ===== -->
         <?php
             $uemail = Session::get('email');   //Keeping Session in var
            // echo $uemail;die;
             $results = DB::select("SELECT * FROM usr_dtls WHERE email = '$uemail'");

             $q = DB::select("SELECT count(*) as total FROM cmp_card WHERE email = '$uemail'");     //query written for finding total no. of campaign(more button show on count > 3)
             $total_campaign = $q[0]->total;
             //echo $total_campaign;die;
              

              foreach($results as $row)
              {
                  $username = $row->username;//fetch name
                  $first_name = $row->first_name;//fetch first name
                  $last_name = $row->last_name;//fetch last name
              }
          ?>

<!-- ======= Fetching Data for Profile header dropdown: End ===== -->

<!DOCTYPE html>
<html class="no-js" lang="en">  
<head>
    <title>Fundlr</title>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}" /> 
  <link rel="shortcut icon" type="image/png" href="resources/views/img/badge.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

  <!-- =================  External Script Files Included: Start ================= -->

  <script src="{{URL::to('public/src/js/angular.js')}}"></script>
  <script src="{{URL::to('public/src/js/jquery-1.10.2.min.js')}}"></script>
  <script src="{{URL::to('public/src/js/bootstrap.min.js')}}"></script>        
  <script src="{{URL::to('public/src/js/custom.js')}}"></script>
  <script src="{{URL::to('public/src/js/video.js')}}"></script> 
  <script src="{{URL::to('public/src/js/editor.js')}}"></script>   
  <script src="{{URL::to('public/src/js/m.no.js')}}"></script>  
  <script src="{{URL::to('public/src/js/strength.js')}}"></script>
  <script src="{{URL::to('public/src/js/custom.js')}}"></script>
  <script src="{{URL::to('public/src/js/custom1.js')}}"></script>
  <script src="{{URL::to('public/src/js/angular.js')}}"></script>
  <script src="{{URL::to('public/src/js/pace.js')}}"></script>
  <script src="{{URL::to('public/src/js/clipboard.min.js')}}"></script>
  <script src="{{URL::to('public/src/js/submit_disabled_enabled.js')}}"></script>
  <script src="{{URL::to('public/src/js/OwlCarousel.js')}}"></script>
  <script src="{{URL::to('public/src/js/amaje.kickstart.min.js')}}"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>

  




  <!-- =================  External Script Files Included: End ================= -->




    <link href="{{URL::to('public/src/css/bootstrap.css')}}" rel="stylesheet" media="screen">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('public/src/css/style.css')}}">    
    <link rel="stylesheet" href="{{URL::to('public/src/css/mob.css')}}">    
    <link rel="stylesheet" href="{{URL::to('public/src/css/editor.css')}}">    
    <link rel="stylesheet" href="{{URL::to('public/src/css/video-js.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/src/css/OwlCarousel.css')}}" />    
    <link rel="stylesheet" href="{{URL::to('public/src/css/amaje.min.css')}}">   
    <link rel="stylesheet" href="{{URL::to('public/src/css/feedback.css')}}">   
    <link rel="stylesheet" href="{{URL::to('public/src/css/media.css')}}">   
    <link rel="stylesheet" href="{{URL::to('public/src/css/checkbox.css')}}">   
    <link rel="stylesheet" href="{{URL::to('public/src/css/radiobtn.css')}}">
    <!-- <link rel="stylesheet" href="{{URL::to('public/src/css/prog-style.css')}}"> -->
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
 

  <style>
  .btnd
  {
    margin-top:12px;
    font-size:15px;
    margin-right:19px;
  }
  .btnd a
  {
    color: #707173;
  }
  .uname
  {
    margin-left:20px;
  }

/* for show hide in js for url and embed in: Start */
  #cpd{display:none;}

  #embed_span{display:none;}

/* for show hide in js for url and embed in: End */

/*    navbar toggle:start*/
    .navbar-toggle .icon-bar:nth-of-type(2) {
    top: 1px;
    }

    .navbar-toggle .icon-bar:nth-of-type(3) {
        top: 2px;
    }

    .navbar-toggle .icon-bar {
          position: relative;
          transition: all 500ms ease-in-out;
    }

    .navbar-toggle.active .icon-bar:nth-of-type(1) {
          top: 6px;
          transform: rotate(45deg);
    }

    .navbar-toggle.active .icon-bar:nth-of-type(2) {
          background-color: transparent;
    }

    .navbar-toggle.active .icon-bar:nth-of-type(3) {
          top: -6px;
          transform: rotate(-45deg);
    }
/*    navbar toggle:finished*/
        
/*    border of top navbar*/
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #ccc;
    }
/*    background color of hamburger*/
    .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:active, .navbar-inverse .navbar-toggle.active {
        background-color: transparent;
    }
/*        31/01/17*/  
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus, .dropdown-submenu:hover>a, .dropdown-submenu:focus>a{color: #fff!important;background: #0275d8!important;}
        .dropdown-menu .divider {
            background-color: #e5e5e5!important;
        }
        .dropdown-menu>li>a
        {
            color: #333!important;
        }
    #btn{
      background: #fff;
      border:none;
    }
/*        31/01/17*/
      .prev-btn{background: transparent;border: none;margin-left: -6px!important;}
            #loadMore:hover i
      {
          transform: rotate(360deg);
          transition: all 1s ease-in-out;
          color:#fff;
      }
</style>

<!-- Copying URL From Address Bar: Start -->
<script>
  function copyTextToClipboard(text) {
    // alert(text);
  var textArea = document.createElement("textarea");
  $(".urllink", function(){     //jquery function for changing text after clicked: Start
    $("#cpd").show(0);
    // $("#cpd").hide(1500)
});                 //jquery function for changing text after clicked: End
  // alert(text);

  //
  // *** This styling is an extra step which is likely not required. ***
  //
  // Why is it here? To ensure:
  // 1. the element is able to have focus and selection.
  // 2. if element was to flash render it has minimal visual impact.
  // 3. less flakyness with selection and copying which **might** occur if
  //    the textarea element is not visible.
  //
  // The likelihood is the element won't even render, not even a flash,
  // so some of these are just precautions. However in IE the element
  // is visible whilst the popup box asking the user for permission for
  // the web page to copy to the clipboard.
  //

  // Place in top-left corner of screen regardless of scroll position.
  textArea.style.position = 'fixed';
  textArea.style.top = 0;
  textArea.style.left = 0;

  // Ensure it has a small width and height. Setting to 1px / 1em
  // doesn't work as this gives a negative w/h on some browsers.
  textArea.style.width = '2em';
  textArea.style.height = '2em';

  // We don't need padding, reducing the size if it does flash render.
  textArea.style.padding = 0;

  // Clean up any borders.
  textArea.style.border = 'none';
  textArea.style.outline = 'none';
  textArea.style.boxShadow = 'none';

  // Avoid flash of white box if rendered for any reason.
  textArea.style.background = 'transparent';


  textArea.value = text;

  document.body.appendChild(textArea);

  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
    // alert("successfully copied");
  } catch (err) {
    console.log('Oops, unable to copy');
  }

  document.body.removeChild(textArea);
}

function CopyLink(button_name) {
  // alert(button_name);
  copyTextToClipboard(location.href);

}
</script>
<!-- Copying URL From Address Bar: End -->

<!-- Copying URL From Embed Bar: Start -->
<script>

function c(text){

   $(".embedlink", function(){      //jquery function for changing text after clicked: Start
      $("#embed_span").show(0);
      // $("#cpd").hide(1500)
  }); 
    var id = "mycustom-clipboard-textarea-hidden-id";
    var existsTextarea = document.getElementById(id);

    if(!existsTextarea){
        console.log("Creating textarea");
        var textarea = document.createElement("textarea");
        textarea.id = id;
        // Place in top-left corner of screen regardless of scroll position.
        textarea.style.position = 'fixed';
        textarea.style.top = 0;
        textarea.style.left = 0;

        // Ensure it has a small width and height. Setting to 1px / 1em
        // doesn't work as this gives a negative w/h on some browsers.
        textarea.style.width = '1px';
        textarea.style.height = '1px';

        // We don't need padding, reducing the size if it does flash render.
        textarea.style.padding = 0;

        // Clean up any borders.
        textarea.style.border = 'none';
        textarea.style.outline = 'none';
        textarea.style.boxShadow = 'none';

        // Avoid flash of white box if rendered for any reason.
        textarea.style.background = 'transparent';
        document.querySelector("body").appendChild(textarea);
        console.log("The textarea now exists :)");
        existsTextarea = document.getElementById(id);
    }else{
        console.log("The textarea already exists :3")
    }

    existsTextarea.value = text;
    existsTextarea.select();

    try {
        var status = document.execCommand('copy');
        if(!status){
            console.error("Cannot copy text");
        }else{
            console.log("The text is now on the clipboard");
        }
    } catch (err) {
        console.log('Unable to copy.');
    }
}
  function CopyEmbed(abc) {
    var $a = '<iframe width="560" height="315" src="https://www.youtube.com/embed/zKkUN-mJtPQ?list=PL6n9fhu94yhWKHkcL7RJmmXyxkuFB3KSl&quot; frameborder="0" allowfullscreen></iframe>';
    //alert(a);

    c($a);

    // $a.select();
    // var successful = document.execCommand('copy');
  }
    
    //    navbar toggle:start js
    $(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
    });
</script>

<!-- Copying URL From Embed Bar: End -->
<!-- ========== COPY CURRENT URL FROM BUTTON / LINK CLICK: END ==========   -->

</head>



<body> 

 
<!--  navbar -->
  <div class="navbar  navbar-inverse navbar-fixed-top " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display navbar-fixed-top-->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="navbar-brand">
        <a href="{{ route('/') }}">
            <img class="logo" src="resources/views/img/logo.png" alt="logo"/>
        </a>
    </div>
    
     <!--<center><div><a href="index1.php"><img class="logo" src="img/logo.png" alt="logo"/></a><div class="btn btn-default" style="float: right; margin-top:0.75%; margin-right: 0.75%;"><a href="logout.php" style="color: inherit;">Logout</a></div></div></center>-->
    
    <div class="collapse navbar-collapse" id="navbar-collapse-1"> 
     
      <ul class="nav navbar-nav navbar-left">
      <li><a href="{{ route('explore') }}">Explore</a></li>
      <li><a href="{{ route('profile_campaign1') }}">Start a Campaign</a></li>
      <!-- <li><a href="https://m.me/213299209167709" target="_blank">Chat Here</a></li> -->
      </ul>

     
      <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><i class="fa fa-search"></i><span>Search</span>  </a></li>
      <li><a href="" data-target="#login" data-toggle="modal"> <i class="fa fa-user"></i><span>Sign in</span>  </a></li>-->

      <!-- <ul class = "pull-left btnd" ><a href = "logout.php"><b>Temp Logout</b></a></ul> -->
      <a href="{{ route('search') }}">
          <form class="search navbar-left dropdown" role="search">
          <div class="search-box "> 
            <input placeholder="Search here.." class="form-control" type="text">
            <i class="fa fa-search"></i>
          </div>
          </form>      
      </a>

  

      <li class="dropdown">
          <a href="#" class="dropdown-toggle1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-circle user-pic" src="resources/views/img/campnr_profile.jpg" alt="profile image"/> <span class="caret"></span></a>
            <div class = "user_menuhide"></div>
          <ul class="dropdown-menu  user-menu">
      
           <li> <span class="usernm"><?php echo $first_name;?>&nbsp;<?php echo $last_name;?></span></li>
          <li><span class="uname"><small>@<?php echo $username;?></small></span></li>
          <li class="divider">  </li>
 
          <li> <span class="usernm"> My Campaign(s) </span>  </li> 
          <!--<li><a href="preview-campaign.php"> Yeo Garrett</a> </li>-->

          <!-- ======= Fetching Data for My Campaign in dropdown : Start ===== -->
         <!-- <li><a href=""><button onclick="test(5)">Click Me</button></a></li> -->

        <?php
            $fetch = DB::select("select cpm_name,camp_check, camp_id from cmp_card  where email = '$uemail' limit 3");    //Limiting campaign data to 3
            //print_r($fetch);die;

              foreach($fetch as $row)
              {
                  $cpm_name = $row->cpm_name;//fetch campaign name
                  $camp_check = $row->camp_check;//fetch campaign check
                  $camp_id = $row->camp_id;//fetch campaign check

                  echo "<li  class=''><a><button name='camp_id' id='camp_id' class='prev-btn' onclick='test(";
                  echo  $camp_check.", ".$camp_id;
                  echo ")'>".$cpm_name."</button></a></li>";

                  $qe = $camp_check;
              }
                            //This will work when campaign >3 when clicked on More button
              $fetch = DB::select("select cpm_name,camp_check, camp_id from cmp_card  where email = '$uemail' limit 3, 100");   
            //print_r($fetch);die;

              foreach($fetch as $row)
              {           //fetching data above query
                  $cpm_name = $row->cpm_name;//fetch campaign name
                  $camp_check = $row->camp_check;//fetch campaign check
                  $camp_id = $row->camp_id;//fetch campaign check
                          //class collapse is must for show/hide in more button
                  echo "<li  class='collapse'><a><button name='camp_id' id='camp_id' class='prev-btn' onclick='test(";
                  echo  $camp_check.", ".$camp_id;
                  echo ")'>".$cpm_name."</button></a></li>";

                  $qe = $camp_check;
              }

              /*$results2 = DB::select("SELECT count(*) FROM cmp_card WHERE email = '$uemail'");*/
             
              if($total_campaign > 3) {   //will show Load more button if campaign >3
                  echo "<li id= 'loadMore' class='prev-btn prev-btn1'> <a href='#demo3' data-toggle='collapse' style='margin-left:6px;'>More <i class='fa fa-chevron-circle-down arrowmore' style='font-size:14px;'></i></a></li>";
              }
            ?>

  <script type="text/javascript">


    function test(getval,camp_id){    //Test function called on click of respective campaign
      //alert(getval);
      //alert(camp_id);
      
      var js_camp_id  = camp_id;
      
      //alert(js_camp_id);

      if(getval==0){
            $.ajax({
              type: 'get',
              url: 'camppro',
              data: {
                  js_camp_id,
              },
              success: function (response) {
                //alert(response);
                window.location = "{{ route('camppro2') }}";    //fetching to seperate page(same as 1st page of SAC)
              },
                error: function (response) {
                alert(response);
              }
            });
      }

      if(getval==1){
          window.location = "{{ route('preview_campaign') }}";
                      //If campaign is finished move to preview campaign page    
      }


      

    }
</script> 
          
                 
       <!-- ======= Fetching Data for My Campaign in dropdown : End ===== -->

    <style>
    
    .user_menuhide{
      position: fixed;
      top:50px;
      right:0;
      left:0;
      bottom:0;
    
      z-index: 98;
      display:none;
    }






    </style>
      
       <script>
$(document).ready(function () {
  $("a[href='#demo3']").click(function(){
    //alert("test");
    $(".collapse").toggle();
  });
  $(".dropdown-toggle1").click(function(){
    //alert("test");
    $(".user-menu").toggle();
    $(".user_menuhide").show();
  });
  $(".user_menuhide").click(function(){
    //alert("test");
    $(".user-menu").hide();
  });
  

});
       </script>   




      
          
        
       <!-- <li id="loadMore" onclick ="add();">Show more</li>-->
      
          <li class="divider">  </li>
          <li><a href="{{ route('profile_page') }}"> Profile preview </a></li>
          <li><a href="self-profile.php"> Profile </a></li>
          <li><a href="#" class="notifications"> Notifications <span class=""> +91 </span></a></li>
          <li><a href="{{ route('setting') }}">Account Settings</a></li>
          <li class="divider">  </li>
          <li><a href="{{ route('logout') }}"> Log out</a></li>         
          </ul>
        </li>
      <!--<li><a href="#">Sign up</a></li>-->
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div>
 
  
 <div class="modal fade login in" id="login"  >
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Sign In  </h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box ">
                             <div class="row ">
                 <div class="content col-xs-12">
                  <div class="social">
                    <a class="circle facebook" href="#">
                      <i class="fa fa-facebook "></i>
                    </a>
                    <a class="circle twitter" href="#">
                      <i class="fa fa-twitter "></i>
                    </a>
                    <a class="circle google" href="#">
                      <i class="fa fa-google-plus "></i>
                    </a>
                    
                    <a class="circle linkedin" href="#">
                      <i class="fa fa-linkedin "></i>
                    </a>
                  </div>
                  <div class="division">
                    <div class="line l"></div>
                      <span>or</span>
                    <div class="line r"></div>
                  </div>
                  
                  <div class="form loginBox ">
                    <form action="" method="post" accept-charset="UTF-8">
                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <span class="error2"> Incorrect login details </span>
                    <span class="frgt-p"> <a href="reset-password.php">Forgot? </a></span>
                     <div class="col-xs-12">
                       <div class="row">
                         <div class="col-xs-6">
                         <div class="row"><a   href="signup.php"class="btn btn-lg btn-default " type="button" value="Sign Up" >Sign Up</a></div>
                        </div>
                         <div class="col-xs-6">
                         <div class="row"><input  type="submit" value="Sign In" style="margin-left: 8px;"class="btn btn-lg btn-primary"> </div>
                        </div>
                      </div> 
                    </div> 
                    </form>
                  </div>
                 </div>
                             </div>
                        </div>
                        
                    </div>
                   <!-- <div class="modal-footer">
                        <div class="forgot login-footer">
                           <input class="btn btn-lg btn-default btn-block " type="button" value="Sign Up" >
                        </div>                        
                    </div>  -->      
              </div>
          </div>
      </div>
      
      
      <!-- Change address popup -->   
      
      <div class="modal fade login in" id="view-reward--img"  >
          <div class="modal-dialog ">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Preview</h4>
                    </div>
                    <div class="modal-body ">  
          <img src="resources/views/img/thirs.png" class="img-responsive" alt="reward-img" />
                        
                    </div>
                   <div class="modal-footer">           
                        <a class="btn btn-primary " data-dismiss="modal" aria-hidden="true" > Close</a>
                                            
                    </div>       
              </div>
          </div>
      </div>
      
    
   <!-- Change address popup -->    
      
      <div class="modal fade adress in" id="change_addresss"  >
          <div class="modal-dialog ">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Select delivery address:</h4>
                    </div>
                    <div class="modal-body ">  
                        <div class="box  ">
                             <div class="row ">
                <form class="" method="" action="" name="" />
                   <div class="adress-card_box">
                     <div class="col-xs-6">
                      <div class="adress-card">
                        <p><strong>Swadesh Thakur</br>
                        +91-9810357310 </br> 7524, Arakashan road, Paharganj, </br>New Delhi - 110055, IN </strong></p>
                      </div>
                    </div>
                    <div class="col-xs-6">   
                      <div class="adress-card">
                        <p><strong>Karan Thakur</br>
                        +91-9999386666 </br> 7524, Ashok vihar,     Phase-3,  </br>New Delhi - 110052, IN </strong></p>
                      </div>
                    </div>
                  </div>
                
                   <div class="col-xs-4">
                    <label> Contact Name:  </label> 
                  </div>
                  <div class="col-xs-8">                    
                    <input type="text" name="" placeholder="Contact Name" class="form-control"/>  
                   </div>
                   <div class="col-xs-4">
                    <label> Address:  </label>  
                  </div>
                  <div class="col-xs-8">
                    <input type="text" name="" placeholder="Address line 1" class="form-control"/>  
                    <input type="text" name="" placeholder="Address line 2" class="form-control"/>
                  </div>
                   <div class="col-xs-4">
                    <label>Landmark:  </label>  
                  </div>
                  <div class="col-xs-8">
                    <input type="text" name="" placeholder="Landmark" class="form-control"/>   
                  </div>
                   <div class="col-xs-4">
                    <label>City/Town:  </label> 
                  </div>
                  <div class="col-xs-8">
                    <input type="text" name="" placeholder="City/Town" class="form-control"/>   
                  </div>
                   <div class="col-xs-4">
                    <label>State/Region:  </label>  
                  </div>
                  <div class="col-xs-8">
                    <input type="text" name="" placeholder="State/Region" class="form-control"/>   
                  </div>
                   <div class="col-xs-4">
                    <label>Pincode:  </label> 
                  </div>
                  <div class="col-xs-8">
                    <input type="text" name="" placeholder="Pincode" class="form-control"/>  
                     
                  </div>
                   
                  
                    
                </form>                  
                             </div>
                        </div>
                        
                    </div>
                   <div class="modal-footer">           
                        <input class="btn btn-primary " type="submit" value="Submit" >
                                            
                    </div>       
              </div>
          </div>
      </div>

<!-- Share popup -->    
      
      <div class="modal fade in   share_popup" id="connect"  >
          <div class="modal-dialog ">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"> Connect to Campaign</h4>
                    </div>
                    <div class="modal-body ">  
                        <div class="box">
                            
                 <div class="pad-10 text-left">
                  <a href="" class="web">
                  <i class="fa fa-globe"></i> chasingpapers.com</a>
                 </div>
                 <div class="pad-10 text-left">
                  <a href="" class="fb">
                  <i class="fa fa-facebook"></i> facebook.com/xyz_123</a>
                 </div>
                
                 <div class="pad-10 text-left">
                  <a href="" class="twtr">
                  <i class="fa fa-twitter"></i>  twitter.com/xyz_123 </a>
                 </div>
              
                 <div class="pad-10 text-left">
                  <a href="" class="google-plus">
                  <i class="fa fa-google-plus"></i>  google.com/xyz_123 </a>
                 </div>
                 
                 <div class="pad-10 text-left">
                  <a href="" class="linkedin">
                  <i class="fa fa-linkedin"></i>  linkedin.com/xyz_123</a>
                 </div>
                
                        </div>
                        
                    </div>
                   <!-- <div class="modal-footer">
                        <div class="forgot login-footer">
                           <input class="btn btn-lg btn-default btn-block " type="button" value="Sign Up" >
                        </div>                        
                    </div>  -->      
              </div>
          </div>
      </div>
      <div class="modal fade in share_popup" id="share"  >
          <div class="modal-dialog ">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"> Share Campaign</h4>
                    </div>
                    <div class="modal-body ">  
                        <div class="box">
                             
                 <div class="pad-10 text-center">
                  <a href="" class="fb">
                  <i class="fa fa-facebook"></i> 180k</a>
                 </div>
                
                 <div class="pad-10 text-center">
                  <a href="" class="twtr">
                  <i class="fa fa-twitter"></i> 205k </a>
                 </div>
              
                 <div class="pad-10 text-center">
                  <a href="" class="google-plus">
                  <i class="fa fa-google-plus"></i> 20k </a>
                 </div>
                 
                 <div class="pad-10 text-center">
                  <a href="" class="linkedin">
                  <i class="fa fa-linkedin"></i> 404k</a>
                 </div>

                 <div class="pad-10 text-center">
                  <a href="" class="urllink" onclick="CopyLink(this)">
                  <i class="fa fa-link"></i> URL Link <span id = "cpd">Copied</span></a>

                 </div>
                 
                 <div class="pad-10 text-center">
                  <a href="" class="embedlink" onclick="CopyEmbed(this)">
                   <i class="fa fa-code"></i>Embed <span id = "embed_span">Copied</span></a>
                 </div>

                 <!-- For Passing Embed Variable through some php variable: Start -->

                 <?php $a = "Amir"; ?>
                <!-- <div class="pad-10 text-center">
                  <a href="" class="embedlink" onclick="CopyEmbed('<?php echo $a;?>')">
                   <i class="fa fa-code"></i>Embed <span id = "embed_span">Copied</span></a>
                 </div> -->

                <!-- For Passing Embed Variable through some php variable: End -->
                                 
          
                        </div>
                        
                    </div>
                   <!-- <div class="modal-footer">
                        <div class="forgot login-footer">
                           <input class="btn btn-lg btn-default btn-block " type="button" value="Sign Up" >
                        </div>                        
                    </div>  -->      
              </div>
          </div>
      </div>
<!--nice select for form-group dropdown-->
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
   
       <!--<script>
       $(document).ready(function(){
       $('#test').click(function() {
    var text = $(this).text();
    alert('Text is ' + text);

       });
          });
       </script>-->
      <script>
    </script>
      <style>
      #showLess {
    color:red;
    cursor:pointer;
    display:block;
}
      </style>
