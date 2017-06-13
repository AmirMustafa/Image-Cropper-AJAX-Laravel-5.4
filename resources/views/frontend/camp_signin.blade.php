@include('includes/header')

<style>
    .form-group{position: relative;}
    .forgot-password
    {
        position:absolute;
        top: 7px;
        right: 10px;
    }
    .signin{height: 150px;border-top-left-radius: 10px;border-top-right-radius: 10px;margin-top:-10px;}
    .signin img{}
</style>

  <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
    <div class="container">
      <div class="row">               
        <div class="col-md-offset-4 col-md-4 text-center "> 
            <div class="login login-form">
            <div class="box row"> 
                <div class="row signin">
                @include("includes.signin-slider")
                  
<!--
                    <img src="resources/views/img/1.jpg" alt="">
                    <img src="resources/views/img/2.jpg" alt="">
                    <img src="resources/views/img/3.jpg" alt="">
-->
                </div>
                
                <h3>Sign In</h3>
                <div class="content ">
                    <div class="social">
                    <a class="circle facebook" href="<?php //echo $loginURL ?>">
                      <i class="fa fa-facebook "></i>
                    </a>
                    
                   
                    <a class="circle twitter" href="<?php //echo $url; ?>">
                      <i class="fa fa-twitter "></i>
                    </a>
<!--
                    <a class="circle google" href="#">
                      <i class="fa fa-google-plus "></i>
                    </a>
-->
                    
                    <a class="circle linkedin" href="">
                      <i class="fa fa-linkedin "></i>
                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                
                                <div class="form loginBox">
                                    <form method="get" id="myForm_signin" name = "signin" action="" >
                                    <div class="">
                                        <input class="form-control" type="email" placeholder="someone@somewhere.com" name="uemail" id= "umail" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password" required autofocus>
                                        <a onclick="hello()"> <span class="frgt-p forgot-password" style="cursor:pointer"> Forgot? </span> </a>
                                    <center><small><font color = "#fa1a1a"><b><div id = "errors"></div></b></font></small></center>
                   </div>
                   <div class="col-xs-12">
                     <div class="row">
                       <div class="col-xs-6">
                       <div class="row"><a  href="{{ route('signup') }}"class="btn btn-lg btn-default " type="button" value="Sign Up" >Sign Up</a></div>
                      </div>
                       <div class="col-xs-6">
                       <div class="row"><input style="margin-left: 5px;"  class="btn  btn-lg btn-primary" type="submit" name = "login" id="signin_btn" value="Sign In"/></div>
                      </div>
                    </div> 
                  </div> 
                                   <div id ="mssg" class=" "></div>
                                    </form>
                                     
                                </div>
                             </div>
                        </div>        
          <h5> <a href="">Terms of Usage </a> &bull;  <a href="">Privacy Policy </a> </h5>            
                    </div>    
        
          
          
        </div>
      </div>
    </div>
  </div>
  
@include('includes/footer')

<script type="text/javascript">

        $(document).ready(function() {
          $("#signin_btn").click(function() {
             var loginForm = $("#myForm_signin");
             loginForm.submit(function(e){
                 e.preventDefault();
                 var formData = loginForm.serialize();

                 /*alert(formData);*/

                    $.ajax({
                        url:"camp_signin_dbm",
                        type:'get',
                        data:formData,
                        success:function(data){
                          $("#mssg").html(data);
                          //alert(data);

                          if(data == "") {      //true case (i.e. when data is correct)
                              window.location.href = "{{ route('profile_campaign1') }}";
                          }
                            
                        },
                        error: function (data) {
                            //alert(data);
                            
                        }
                    });
                });

        /*alert('Successfully Loaded');*/
            });                 
        });
</script>
