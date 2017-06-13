<!DOCTYPE html>
<html class="no-js" lang="en">  
<head>
    <title>Fundlr</title>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="resources/views/img/badge.png"/>
   
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
    <link rel="stylesheet" href="{{URL::to('public/src/css/checbox.css')}}">   
    <link rel="stylesheet" href="{{URL::to('public/src/css/radiobtn.css')}}">
    <!-- <link rel="stylesheet" href="{{URL::to('public/src/css/prog-style.css')}}"> -->
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">

  

<style type = "text/css">
  #urllink
  {
    color:#37bc9b; 
    
  }
  #urllink:hover
  {
    color:#fff;
    background-color:#37bc9b;
    transition:all .2s ease-in-out;
    border-radius:5px;
    
  } 
  #embedlink
  {
    color:#ff8c1a; 

  }
  #embedlink:hover
  {
    color:#fff;
    background-color:#ff8c1a;
    transition:all .2s ease-in-out;
    border-radius:5px;
    
  } 

  /* for show hide in js for url and embed in: Start */
  #cpd{display:none;}

  #embed_span{display:none;}
    
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
  /* for show hide in js for url and embed in: End */
/*    border of top navbar*/
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #ccc;
    }
/*    background color of hamburger*/
    .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:active, .navbar-inverse .navbar-toggle.active {
        background-color: transparent;
    }
    .form-group-p{position: relative;}
    .forgot-password
    {
        position:absolute;
        top: 7px;
        right: 10px;
    }
    #errors
    {
        color: #cc0000;
        font-weight: bold;
    }
</style>
<!-- ========== COPY CURRENT URL FROM BUTTON / LINK CLICK: START ==========   -->

</head>

<body> 

 
<!--  navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
     

      <ul class="nav navbar-nav navbar-left">
      <li><a href="{{ route('explore') }}">Explore</a></li>
      <li><a href="{{ route('camp_signin') }}">Start a Campaign</a></li>
      <!-- <li><a href="https://m.me/213299209167709" target="_blank">Chat Here</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <!-- Currency change dropdown: Start -->
            <li>
            <select id="currencySelector" style="border-radius:15px;padding:5px 0px 5px 9px;margin-top:7px;">
                <option value="inr"><i class="fa fa-inr" aria-hidden="true"></i>INR</option><!--Indian Rupees must be set to 1 -->
                <option value="usd">USD</option><!--United States Dollar -->
                <option value="aud">AUD</option><!--Australian Dollar -->
                <option value="eur">EUR</option><!--Euro -->
                <option value="gbp">GBP</option><!--British Pound -->
                <option value="cad">CAD</option><!--Canadian Dollar -->
                <option value="jpy">JPY</option><!--Yen -->
                <option value="aed">AED</option><!--United Arab Emirates Dirham -->
                <option value="cny">CNY</option><!--Yuan -->
            </select>
      </li>
      <!-- Currency change dropdown: End -->

      <!-- <li><a href="logout.php" style="color: inherit;">Logout</a></li> -->
      <a href="{{ route('search') }}">
          <form class="search navbar-left" role="search">
          <div class="search-box"> 
            <input placeholder="Search here.." type="text" class="form-control" />
            <i class="fa fa-search"></i>
          </div>
          </form> 
      </a>
      <li><a href="" data-target="#login" data-toggle="modal"> <i class="fa fa-user"></i> </a></li>
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
                    <a class="circle facebook" href="<?php //echo $loginURL ?>">
                      <i class="fa fa-facebook "></i>
                    </a>
                    <a class="circle twitter" href="<?php //echo $url;?>">
                      <i class="fa fa-twitter "></i>
                    </a>
<!--
                    <a class="circle google" href="#">
                      <i class="fa fa-google-plus "></i>
                    </a>
                                    //url link linekedin: linkedinlogin/process.php
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
              
                <div class="form loginBox" id="loginBox">
                
                <form action="" method="get" id = "myForm" name = "signin" role="form">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input class="form-control" type="email" placeholder="someone@somewhere.com" name="uemail" id="uemail" required autofocus = "true"/>
                                    <div class="form-group-p">
                                        <input class="form-control" type="password" placeholder="Password" name="password" id="password" required>
                                        <a onclick="hello()"> <span class="frgt-p forgot-password" style="cursor:pointer"> Forgot? </span> </a>
                                    </div>


                   
                   <div class="col-xs-12">
                     <div class="row">
                       <div class="col-xs-6">
                       <div class="row"><a href="{{ route('signup') }}" class="btn btn-lg btn-default">Sign Up</a></div>
                      </div>
                       <div class="col-xs-6">
                       <div class="row"><input style="margin-left: 5px;"  class="btn  btn-lg btn-primary" id="signin_button" type="submit" name = "login" value="Sign In"/></div>
                      </div>
                    </div> 
                    <div id="error_msg"></div>
                  </div> 
              </form>
                                </div>
                 </div>
                             </div>
                        </div>

                        <div id ="msg" class=" "></div>
                        
                    </div>
    
              </div>
          </div>
      </div>

<script type="text/javascript">

        $(document).ready(function() {
          $("#signin_button").click(function() {
             var loginForm = $("#myForm");
             loginForm.submit(function(e){
                 e.preventDefault();
                 var formData = loginForm.serialize();

                 /*alert(formData);*/

                    $.ajax({
                        url:"signin_dbm",
                        type:'get',
                        data:formData,
                        success:function(data){
                          $("#error_msg").html(data);
                          //alert(data);

                          if(data == "") {      //true case (i.e. when data is correct)
                              window.location.href = "{{ route('home') }}";
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

<!--currency change js:start-->
<script>
var 
    selector = document.getElementById("currencySelector");
var
    currencyElements = document.getElementsByClassName("currency");
var 
    usdChangeRate = {
      INR: 1,
      AUD: 48.55, 
      EUR: 69.35, 
      GBP: 82.73,
      USD: 64.67,
      CAD: 48.03,
      JPY: 0.59,
      AED: 17.59,    
      CNY: 9.39    


        
    };

selector.onchange = function () {
    var 
        toCurrency = selector.value.toUpperCase();
  
    for (var i=0,l=currencyElements.length; i<l; ++i) {
        var 
            el = currencyElements[i];
        var 
            fromCurrency = el.getAttribute("data-currencyName").toUpperCase();
      
      if (fromCurrency in usdChangeRate) {
          var 
              // currency change to usd
              fromCurrencyToUsdAmount = parseFloat(el.innerHTML) * usdChangeRate[fromCurrency];
              console.log(parseInt(el.innerHTML,10) + fromCurrency + "=" + fromCurrencyToUsdAmount + "USD");
          var 
              // change to currency unit selected
              toCurrenyAmount = (fromCurrencyToUsdAmount / usdChangeRate[toCurrency]).toFixed(2);
        
          el.innerHTML = toCurrenyAmount + "<span>" + toCurrency.toUpperCase() + "</span>";
          el.setAttribute("data-currencyName",toCurrency);
      }
    }
};
</script>
<!--currency change js:end-->