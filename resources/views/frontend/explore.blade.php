<?php
    if (Session::has('email')) {
      Session::get('email');
      
    }
?>







<!-- <link rel="stylesheet" href="{{ URL::to('public/src/css/style.css') }}"> -->

<link rel="stylesheet" href="{{ URL::to('public/src/css/slider.css') }}">

<?php
    if (Session::has('email')) { ?>
      @include('includes.profile_header')
    <?php } else {?>
      @include('includes.header')
    <?php }?>




<script src="{{ URL::to('public/src/js/slider.js') }}"></script>
<script src="{{ URL::to('public/src/js/wowslider.js') }}"></script>



<style>
/* End Box (Popup When Scroll Down) */

.endpage-box {
    position: fixed;
    bottom: 0px;
    right: -90px;
    padding: 25px;

}      
.chat
    {
        background: transparent;
        font-size: 60px;
        color: #0275d8;
    }
    
/*
#slidebox{
    *width:150px;
    *height:100px;
    padding:10px;
    *background-color:#fff;
    *border:1px solid #0275d8;
    position:fixed;
    bottom:55px;
    box-shadow: -2px -1px 88px 0px rgba(0,0,0,0.17);
   -webkit-box-shadow: -2px -1px 88px 0px rgba(0,0,0,0.17);
    -moz-box-shadow:-2px -1px 88px 0px rgba(0,0,0,0.17);

}
.chat
    {
        font-size: 60px;
        position: fixed;
        background: transparent;
        color: #0275d8;
    }
*/
/*    -----------------------------------------*/
/*padding for this page specific*/
     .wrapper
     {
         padding: 40px 0;    
     }
     .bottom{border-bottom: 1px solid #ccc;}
/*    disabled right click: start      */
    .card{     
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;  
    }
/*    disabled right click: finished    */   
     .img-responsive{border-top-left-radius: 10px;border-top-right-radius: 10px;}
   #myProgress {
    position: relative;
    width: 300px;
    height: 5px;margin:0 auto;
    background-color: #ddd;
  }

  #myBar {
    position: absolute;
    width: 1%;
    height: 100%;
    background-color: #3d81bb;
  }

   
  .no-js #loader { display: none;  }
  .js #loader { display: block; position: absolute; left: 100px; top: 0; }
  .se-pre-con {
    position: absolute;
    left: 0px; *border:1px solid red;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(resources/views/img/.png) center no-repeat #fff;
  }
/*  .spot{margin-bottom:5px;padding-top: 5px;}*/
/*  .trend{margin-bottom:-38px;}*/
/*    remove img-responsive use s-75 in spotlight img*/
     .s-75
     {
           display: block;
           max-width: 100%;
           height: auto;
     }
/*     spotlight and trending custom media quaries*/
 @media screen and (min-width: 993px) and (max-width: 1200px) {
    
        .mt-65
        {
           margin-top: 25px;
        }
        .desc {
          padding: 20px 0;font-size:14px;
        }
/*      .trend{margin-bottom:-21px;}*/

    }
@media screen and (min-width: 769px) and (max-width: 992px) {
    
        .s-75
        {
           max-width: 70%;
           margin-left: 15%;
        }
        .cnt
        {
            width: 70%;
            margin-left: 15%;
        }
        .mt-65
        {
           margin-top: 25px;
        }
        .pad-10
        {
            padding-bottom: 7px;
            padding-top: 7px;
        }
        .desc {
          padding: 20px 0;font-size:14px;
        }
/*      .trend{margin-bottom:-21px;}*/
    }
    @media screen and (min-width: 481px) and (max-width: 768px) {
    
        .s-75
        {
           max-width: 70%;
           margin-left: 15%;
        }
        .cnt
        {
            width: 70%;
            margin-left: 15%;
        }
        .mt-65
        {
           margin-top: 15px;
        }
        .pad-10
        {
            padding-bottom: 7px;
            padding-top: 7px;
        }
        .desc {
          padding: 12px 0;font-size:14px;
        }
/*      .trend{margin-bottom:-21px;}*/
    }
    @media only screen and (min-width: 1200px)
    {
     /*spotlight margin left-right8th feb*/
    .mrg{margin-left: 15px;margin-right: 15px;}
     }
     @media only screen and (max-width: 480px)
    {
        .s-75
        {
            max-width: 100%;
            margin-left: 0%;
        }
        .cnt
        {
            width: 100%;
            margin-left: 0%;
        }
        .mt-65
        {
           margin-top: 10px;
        }
        .pad-10
        {
            padding-bottom: 10px;
            padding-top: 10px;
        }
        .desc {
          padding: 7px 0;font-size:12px;
        }
        .stage p 
        {
            font-size: 14px;
            font-weight: 600; 
        }
        .stage  p span{
            font-size:12px;
            font-weight:500;
        }
        .card-stage li {
            font-size: 14px;
            font-weight: 600; 
        }
        .card-stage li p {
            font-size:12px;
            font-weight:500;
        }
/*      .trend{margin-bottom:-21px;}*/
        

    }
 /*media quaries finished for spotlight and trending*/
 </style>


<div class="wrapper bottom" >
  <div class="container">
    <div class="row">       
                <div class="col-md-12">  
                <h1 class = "heading spot"> Spotlight</h1>                  
            <div class="row mrg">
              <div class="col-md-6">
              <a href="{{ route('campaign') }}">  
                  <img src="resources/views/img/Meenakari_e.jpg" alt="project image" class="m-bt s-75"/></a>

                 
              </div>
              
              <div class="col-md-6 cnt">              
                
                                <a href="campaign.php"> 
                                    <h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>
                                </a>
                 
                  <h5 class="author pad-10"> <img class="profile" src="resources/views/img/dp.png" alt="profile pic"/> Meena T <span> </span> </h5>
                 
                 
                  <ul class="list-inline ">
                    <li  class="btn"> <i class="fa fa-map-marker"></i> New Delhi, DL </li> 
                    <li class="btn"> <i class="fa fa-tag"></i> Sketch Artist </li>  
                    
                    
                  </ul>
                 

                    <p class="desc"> Project description econdo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue. </p>
                
                  
                
<div class="progress mt-65">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  <span class="sr-only">50% Complete</span>
  </div>
</div>

<!--                    <div class="barWrapper mt-65">
                            <span class="progressText"><B></B></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" >
                                         <span class="poptool tooltext" data-toggle="tooltip" data-placement="top" title="50%">
                                         </span>    
                                    </div>
                                </div>
                            </div> -->

                    <div class="row "> 
                      <div class="col-md-3 col-sm-3 col-xs-3 stage text-center">
                         <p>15% <span> Funded </span></p>
                      </div>
                      <div class="col-md-3 col-sm-3  col-xs-3 stage  text-center">
                         <p class="currency" data-currencyName="inr">64.67</p><span> Pledged </span>
                      </div>
                      <div class="col-md-3 col-sm-3  col-xs-3 stage  text-center">
                         <p> 85 <span> Backers </span></p>
                      </div>
                      <div class="col-md-3 col-sm-3  col-xs-3 stage  text-center">
                         <p> 12  <span> Days to go </span></p>
                      </div>
                    </div>
                
              </div>
            </div>
                    
                </div>
            
      
    </div>
  
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <div class="row">       
             <div class="col-md-12">                    
            <div class="">
              <h1 class = "heading trend">Trending</h1>

<!-- ======================= OWL CAROWSEL DIV : START ==================== -->
        <div class="owl-carousel">
        @foreach($fetch as $fetch)
                        <div>
                            <div id="card" class="card">
                <a href="#">
                  <div class="campaign_img">
                    <img src="resources/views/campaign_images/{{ $fetch->campaign_image }}" alt="project image" class="img-responsive"/>
                    <div class="brand_badge">
                      <img class="" src="resources/views/img/badge.png" alt="badge"/>
                    </div>
                  </div>
                  <!--<h3 class="project-title"> Project : Meenakari-Zentangle Art </h3>-->
                  <div class="pad-lr-25">
                  <h5 class="author pad-10">{{ $fetch->cpm_name }}<span> </span> </h5>
                    <ul class="list-inline  bdr-btm">
                    <li>  {{ $fetch->host_name }}  </li> 
                    <li class="pull-right">   {{ $fetch->cpm_region }} </li>                 
                    </ul>
                    <p class="par"> {{ $fetch->description }}
                        </p>
                    
                                    
                    <div class="progress mt-10">
                      <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                      <span class="sr-only">70% Complete</span>
                      </div>
                    </div>

                    <ul class="list-inline card-stage">
                    <li>  55% <p> Funded </p> </li> 
                    <li><span class="currency" data-currencyName="inr">125</span>   <p> Pledged </p> </li>  
                    <li>  {{ $fetch->cpm_dur }} <p> Days to go </p> </li> 
                    
                    </ul>
                  </div>
                </a>
                    </div>
                        </div>
          @endforeach
       </div> <!-- end owl caraousel --> 

<!-- ======================= OWL CAROWSEL DIV : END ==================== -->
                </div>
             </div>
          
        </div>
  </div>
</div>
     <!-- Endpage Box (Popup When Scroll Down) Start -->
     <div id="scroll-down-popup" class="endpage-box">
           <!-- <a href="https://m.me/213299209167709" target="_blank"><span class="chat"><i class="fa fa-comments-o" aria-hidden="true"></i></span></a> -->
           
           <a href="https://m.me/213299209167709" target="_blank"><span class="chat"><img src="resources/views/img/fb_messenger.png" alt="Chat Bot" style="width:60px"></span></a>
     </div>
      <!-- Endpage Box (Popup When Scroll Down) End -->

<!--
<div id="slidebox">
  <span class="chat"><i class="fa fa-comments-o" aria-hidden="true"></i></span>
</div>
-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>-->
  <script>
//    $(document).ready(function(){
//     
// 
//        $(window).load(function() {
//             
//             $(".se-pre-con").fadeOut( 1000);;
//             
//             var elem = document.getElementById("myBar");   
//              var width = 1;
//              var id = setInterval(frame, 10);
//              function frame() {
//                if (width >= 100) {
//                  clearInterval(id);
//                } else {
//                  width++; 
//                  elem.style.width = width + '%'; 
//                }
//              }
//              
//              
//          });
//         
         
    
    
   // });
        
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                margin:10,
                singleItem: true,
                transitionStyle: "slide",
                smartSpeed: 900,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:false
                    },
                    992:{
                        items:3,
                        nav:true,
                        loop:false
                    }
                }
            }); 
        });
    
  </script>
<!--
<script type="text/javascript">
$(function() {
  $(window).scroll(function(){
    

    if  ($(window).scrollTop() > 450 && $(window).scrollTop() < 750 )
      $('#slidebox').animate({'right':'80px'},300);
    
        else
            $('#slidebox').stop(true).animate({'right':'-50px'},100);
  });

  
});
</script>
-->

<!-- ===================== CHAT SCROLL EFFECT: START =======================  -->
<script type="text/javascript">
$(function() {
  $(window).scroll(function(){
    

    if  ($(window).scrollTop() > 450 && $(window).scrollTop() < 750 )
      $('#scroll-down-popup').animate({'right':'10px'},300);
    
        else
            $('#scroll-down-popup').stop(true).animate({'right':'-90px'},100);
  });

  
});
</script>
<!-- ===================== CHAT SCROLL EFFECT: END =======================  -->
@include('includes.footer')



