<link rel="stylesheet" href="{{URL::to('public/signup_image/css/style.css')}}">

<link rel="stylesheet" href="{{URL::to('public/signup_image/css/jquery.Jcrop.min.css')}}">


@include('includes.header')
<script src="{{URL::to('public/signup_image/js/jquery.Jcrop.min.js')}}"></script>

<script src="{{URL::to('public/signup_image/js/script.js')}}"></script>
<script src="{{URL::to('public/dist/jquery.passwordstrength.js')}}"></script>

<script src="{{URL::to('public/signup_image/js/script.js')}}"></script>




<script>
// $(document).ready(function(){
//     $("#user_emailid").click(function(){
//         $("#name_status").hide();
//     });
// });
</script>
<!--internal js-->

<script type="text/javascript">

/* ============= Ajax For Error response in SignUp Form: Start ===============*/ 

function checkfname() {
  //alert("hiiiiiiiii");

  var fname = $('#full_name').val();
  //alert(fname);

  if(fname) {
      $.ajax({
        type: 'get',
        url: 'checkfname',
        data: {
         full_name:fname,
        },
        success: function (response) {
         $( '#fname_status' ).html(response);
         if(response=="OK") 
         {
          return true;  
         }
         else
         {
          return false; 
         }
        }
    });
  }
  else {
    $( '#fname_status' ).html("");
    return false;
  }

}

function checklname() {
  //alert("hiiiiiiiii");

  var lname = $('#full_name2').val();
  //alert(fname);

  if(lname) {
      $.ajax({
        type: 'get',
        url: 'checklname',
        data: {
         lastname:lname,
        },
        success: function (response) {
         $( '#lname_status' ).html(response);
         if(response=="OK") 
         {
          return true;  
         }
         else
         {
          return false; 
         }
        }
    });
  }
  else {
    $( '#lname_status' ).html("");
    return false;
  }

}

function checkuname() {
  //alert("hiiiiiiiii");

  var uname = $('#user_name').val();
  if(uname) {
      $.ajax({
        type: 'get',
        url: 'checkuname',
        data: {
         username:uname,
        },
        success: function (response) {
            $( '#name_status' ).html(response);
            if(response=="OK") 
            {
             return true;  
            }
            else
            {
             return false; 
            }
        }
      });
  }
  else {
      $( '#name_status' ).html("");
      return false;
  }
  
}

function checkemail() {
  //alert("hiiiiiiiii");

  var email = $('#user_emailid').val();
    if(email) {
          $.ajax({
          type: 'get',
          url: 'checkemail',
          data: {
           email:email,
          },
          success: function (response) {
              $( '#email_status' ).html(response);
               if(response=="OK") 
               {
               return true;  
              }
              else
              {
               return false; 
              }
          }
      });
    }
    else {
          $( '#email_status' ).html("");
          return false;
    }
  
}

function checkpass2()
{
   var pass2=document.getElementById( "user_pass2" ).value;
   var pass1=document.getElementById( "user_pass1" ).value;

   if(pass1) {
     //alert(pass2);

     $.ajax({
        type: 'get',
        url: 'checkpass2',
        data: {
         pass1:pass1,
        },
        success: function (response) {
           $( '#pass1_status' ).html(response);
          if(response=="OK") 
           {
            return true;
           }
           else
           {
            return false; 
           }
        }
    });
   }
   else {
      $( '#pass1_status' ).html("");
      return false;
   }

 }

/* ============= Ajax For Error response in SignUp Form: End ===============*/

/* ======== Validate Password Match in SignUp Form with JS: Start ==========*/
function checkPasswordMatch() {
    var password = $("#user_pass1").val();
    var confirmPassword = $("#user_pass2").val();

    if (password != confirmPassword)
    {
        $("#e_pass").html("<p  style='color: #ff1a1a;'><i class='fa fa-times-circle' style='font-size:21px;float:left;padding-left:0px' ></i>&nbsp;&nbsp<span style= 'font-size:12px;float:left;padding-left:7px;padding-top: 3px;'>Password does not match.</span></p>");
      }
    else
    {
        $("#e_pass").html("");
        }
}

/* ======== Validate Password Match in SignUp Form with JS: End ==========*/

$(document).ready(function () {
   $("#user_pass2").keyup(checkPasswordMatch);
});
     //password match validation:finished---------------- 
</script>
<!--/internal js-->

<!--internal css-->

<style>
.progress-bar 
{
    border-radius: 25px;
}
  .navbar-inverse {
    background-color: white;
    border-color: white;
}

  #name_status, #email_status, #fname_status, #pass1_status, #pass2_status, .geterror,#e_pass, #lname_status
  {
        font-family:'Noto Sans', sans-serif!important;
        color:#ff1a1a;
        letter-spacing: 1px;
        font-weight: 600;
        *margin-left:0px;
  }
    .eye{display: none;}

.label {
  cursor:pointer;
}

#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
   *background: url("5.jpg");
}
.pre-btn{position: relative;top:30%;left:0%;color:#0275d8;width: 150px!important;height: 150px!important;border-radius: 50%!important;display: none;border: 1px solid #ccc;}
</style>
<!--/internal css-->



<div class="wrapper bg-signup" ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
  <div class="container">
    <div class="row">   
              
          <div class="col-md-offset-4 col-md-4">
            <div class="black-transparent ">          
              <h1> Sign Up  </h1>
              
                    
            <form action="{{ route('signup_dbm') }}" method="post" name = "signup" role="form" enctype="multipart/form-data" >

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-signin row"> 
                  <!--<input type="file" name="user_photo" />-->
                     <!--<div class="amaje upload "  
                        data-ratio="1:1" 
                        data-service="Qt-plugin/example/sync.php"
                         data-size="640,640"> 
                      <input type="file" name="slim[]"/>
                    </div>-->
                    <!--<div class = "Qt" data-service="Qt-plugin/example/async.php" data-did-remove="handleImageRemoval">
                      <input type = "file"/>
                    </div>-->
                   
                  <!--<div id = "errors"><//?php echo @$_GET["e_photo"];?></div>
          <div class="form-group">
                  <input type="file"  class="form-control gb_ub gbip" placeholder="First Name" name = "full_name" id = "full_name" onkeyup="checkfname();" onkeypress="return onlyAlphabets(event);" required autofocus/> 
                  <div class= "">
          <div id="fname_status"></div>-->
  <script>
  function close_popup()
  {
    //alert ('hello');
  }
  </script>
  <?php //$abc = $_SESSION['picture'];
  //$id =  @$_SESSION['id'];
//$_SESSION['id'];
  if(@$_SESSION['id'] == "") {
    $a="ddp.png";
  }
  else {
     $id =  @$_SESSION['id'];
     $q = "SELECT picture FROM image_signup WHERE id = $id";
                    $r = mysqli_query($conn, $q) or exit(mysqli_error($conn));
                   $fetch = mysqli_fetch_array($r);
//echo $fetch['picture'];
                   $a = $fetch['picture'];

  }

                    


   ?>


              <div class="form-group text-center">
              <!--<label for="upload-photo"><img src="resources/views/img/ddp.png" ></label>-->
               <!--<input type="file" name="photo" id="upload-photo" onclick="close_popup('popup_crop')" />-->
                 <span class = "label" id="ddp" onclick="show_popup('popup_upload')"><img class = "img-circle" style="width: 140px; height: 140px;" src='<?php echo "resources/views/images/$a"; ?>' ></span>

                 <a href="signup.php" class="btn pre-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
             </div>
                  <div class="form-group">
                  <input type="text"  class="form-control" placeholder="First Name" name = "full_name" id = "full_name"  onkeyup ="checkfname()"; "onkeypress="return onlyAlphabets(event);" value="{{ old('full_name') }}" required autofocus/> 
                  <div id="fname_status"></div>
                  <!--required patterns = "[a-zA-Z]{3,15}$"--> 
                  </div>
                  <div class="form-group">
                  <input type="text"  class="form-control" placeholder="Last Name" name = "last_name" id = "full_name2" value="{{ old('last_name') }}"   onkeyup ="checklname()"; onkeypress="return onlyAlphabets(event);" required autofocus/> 
                  <div id="lname_status"></div>
                  <!--required patterns = "[a-zA-Z]{3,15}$"--> 
                  </div>
                                    <!--<center><small><font color = "#cc0000"><div id = "errors"><?//php echo @$_GET["e_name"];?></div></font></small></center>-->
                  <div class="form-group">
                  <input type="text" name="user_name" id="user_name" class="form-control"value="{{ old('user_name') }}" placeholder="@username" onkeyup="checkuname();"  required/>
                    <div id="name_status"></div>
                    <!--required pattern = "[a-zA-Z0-9]{4,8}$"--> 
                  <!--<center><small><font color = "#cc0000"><div id = "errors"><?php //echo @$_GET["e_uname"];?></div></font></small></center>-->
<!--                  <div class = "geterror"><?php//echo @$_GET["e_username"];?></div>-->
                  
                  <div id="disp"></div>
                  </div>
                  <div class="form-group">
                  <input type="email" name="uemail" id="user_emailid" class="form-control" placeholder="someone@somewhere.com" onkeyup="checkemail();" value="{{ old('uemail') }}"  required/>
                  <div id="email_status" class="fade in"></div>
                    <!--required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"--> 
                  
<!--
                  <div class = "geterror"><?php //echo @$_GET["e_email"];?></div>
                  <div class = "geterror"><?php //echo @$_GET["e_user"];?></div>
-->
                  
                  <div id="dispp"></div>
                  </div>
                  <div class="form-group">
                    <input type="password"  class="strength form-control" placeholder="New Password"  id = "user_pass1"  name = "user_pass1" onkeyup="checkpass2();" required/> <!--required pattern = "[a-z0-9]{6,8}$"-->
                    <span onmousedown="invert_inText('#user_pass1')" onmouseup="invert_inPwd('#user_pass1')"  data-toggle="tooltip" title="" class="button_strength" ><span class="eye">Eye</span><img src="resources/views/img/eye.png" alt="show password"></span>

                    <div id="pass1_status"></div>

                  </div>
                  <div class="form-group">
                    <input type="password" name="user_pass2" id="user_pass2" class="form-control" placeholder="Confirm Password" onkeyup="checkPasswordMatch();" required/><!--required pattern = "[a-z0-9]{6,8}$"-->
                   <div id="pass2_status"></div>
                   <div id="e_pass"></div>
<!--                   <div class = "geterror"><?php// echo @$_GET["e_pass"];?></div>-->
                  </div>
                  
                   
                  <div class="col-xs-12">
                     <div class="row">
                       <div class="col-xs-6">
                       <div class="row"><a style="margin-right: 5px;" href="{{ route('signin') }}" class="btn btn-lg btn-default " >Sign In</a></div>
                      </div>
                       <div class="col-xs-6">
                       <div class="row">
                       <input type="submit" name = "submit" style="margin-left: 8px;" class="btn  btn-lg btn-primary"  onclick="crop_photo()"  value="Sign Up"> </div>
                       

                      </div>
                    </div> 
                  </div> 
                    
                    <?php //echo $massege;?>  
                </div>
              </form>
            </div>
            <div class="tnc"> <a href="{{ route('terms') }}"> Terms of Usage </a> &bull;  <a href="{{ route('privacy') }}"> Privacy Policy </a> </div>
          </div>
      </div>
    </div>
  </div>


  @include('includes.footer')
      <!--..........form validation !Important......-->
<!--    <script src = "https://cdn.jsdelivr.net/jquery/1.12.4/jquery.js"></script>
    <script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.js"></script>
    <script src = "https://cdn.jsdelivr.net/jquery.validation/1.15.1/additional-methods.js"></script>
    <script src = "js/v.signup.js"></script> -->
    
    <script>
      //convert textbox into password 
        function invert_inPwd(invert_inPwd) {           // function from line 63 on onmouseup                                 attribute  
              $(invert_inPwd).attr('type', 'password');
          };
        // convert password into  textbox
        function invert_inText(invert_inText) {           // function from line 63 on onmousedown                                 attribute
              $(invert_inText).attr('type', 'text');
          };
    </script>
    
    

    

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <!DOCTYPE html>
<html lang="en">
<head>


</head>


<body>
    

    <!-- The popup for upload new photo -->
    <div id="popup_upload">
        <div class="form_upload modal-dialog">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
        <h2>Upload photo</h2>



            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" class = "btn btn-primary pull-right" id="upload_btn">
            </form>
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>

    <!-- The popup for crop the uploaded photo -->
    <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onclick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
            <!-- This is the image we're attaching the crop to -->
            <img id="cropbox" />
            
            <!-- This is the form that our event handler fills -->
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                <input type="button" value="Crop" class="btn btn-primary pull-right mt-20" id = "crop" onclick="crop_photo();  refresh();" /> 
                <!-- <input type="button" value="Crop Image"  /> -->
            </form> 
        </div>
    </div>
</body>
</html>

<script>
  function refresh() {
     //alert("HIiiiiiiiii");
    //location.reload();
    //location.reload(true);

    //window.location = "a.php";

//info="<a href=signup.php>Test</a>"
// info="<a href=signup.php id=&#34;sign&#34;>Test</a>";

// document.write(info);
// $(document).ready(function() { $('#sign').click(); });

  }
  $(document).ready(function(){
    $("#crop").click(function(){
        $(".pre-btn").show();
        $("#ddp").hide();
    });
    $(".pre-btn").click(function(){
        $(".pre-btn").hide();
    });
});
</script>

<script src="{{URL::to('public/signup_image/js/script.js')}}"></script>
<script>
    $('#user_pass1').passwordStrength();//Added for the Strength Meter(Id of the password textbox)
</script>

