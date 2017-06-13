<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = $reward_mail = Session::get('email');
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif

<?php
  


//JOIN QUERY
    
                       /*$query2 = "SELECT a.cost, a.Quantity, a.time, c.cpm_name, c.cpm_region, c.timestamp, c.host_name, c.cpm_dur, c.funding_goal
FROM rewardcard a
JOIN cmp_card c ON a.email = c.email
WHERE a.email =  '$reward_mail'";*/
          
          //echo $query2; die;
    
      
  ?>


<!-- ============== INCLUDED EXT LIBRARIES : START =================   -->

 
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>	<!-- jQuery UI -->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.js"></script><!-- AngularJS -->
  
  <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script><!-- AngularJS Sanitize -->

  <script src="{{URL::to('public/src/js/one.js')}}"></script><!-- one.js -->

<!-- ============== INCLUDED EXT LIBRARIES : END =================   -->

 
 <!-- ============= ANGULAR JS : START ==============   -->

   <script>
        $(window).load(function() {
          var this_scope = angular.element($('#container')).scope();
          this_scope.from_js = {
            "from_js": "<em>italic data in page javascript in head</em>"
          };
          this_scope.$apply();
        });
       
          
   </script>

 <!-- ============= ANGULAR JS : END ==============   -->
<script>
  $(document).ready(function(){
                //dropdown hide show
                $(".sme").hide();
                $("#cme").click(function(){
                    $(".sme").toggle(300);
                    $("hr").toggle(300);
                });
//                $(".dwn").click(function(){
//                    $(this).toggleClass("rotate");
//                });
//             arrow hide show
//                $(".upp").hide(); 
//                $(".dwn").click(function(){
//                    $(".dwn").hide();
//                    $(".upp").show();
//                });
//                $(".upp").click(function(){
//                    $(".upp").hide();
//                    $(".dwn").show();
//                });
//      full dropdown menu hide on any option select
//                $(".tmln").click(function(){
//                    $(".fcnt").fadeOut(300);
//                    $("li").removeClass("tmline");
//                    $(".campn").hide();
//                    $(".cmnts").hide();
//                    $(".cmnty").hide();
//                    $(".dwn").click(function(){
//                        $(".fcnt").show(300);
//                    });
//                });
//                $(".cmt").click(function(){
//                    $(".fcnt").fadeOut(300);
//                    $("li").removeClass("cmnts");
//                    $(".campn").hide();
//                    $(".cmnty").hide();
//                    $(".tmline").hide();
//                    $(".dwn").click(function(){
//                        $(".fcnt").show(300);
//                    });
//                });
            });
     /* === Mobile Screen Size - Click to change text in tabs: Start === */

        $(document).ready(function(){
      var manage_tab = $(".sdrpdwn"); 
      
      $(".dwn").click(function(){
        $(this).toggleClass("rotate");
        //alert(ange_rotate);
      });
      $(".sdrpdwn").click(function(){
        $(".dwn").toggleClass("rotate");
        //alert(ange_rotate);
      });
      
      $(manage_tab).click(function(){
        var change_text = $(this).parent("li").html();
        $(this).addClass("active");
         // alert(change_text);
        $(".campn").html(change_text);
        $("#navbar").removeClass("in");
        });
            
 /* === Mobile Screen Size - Click to change text in tabs: End === */
    
 /* ==== Javascript added for giving scrolling effect in tabs: Start ==== */


        var manage_ul = $("#manage_ul li a");   //id of the ul
            $(manage_ul).click(function(){
             event.preventDefault();
                 $('body,html').animate({
                    scrollTop: 590 ,
                 }, 300
                 );
            });
            $("#host-nav>a").click(function(){
               event.preventDefault();
                $('body,html').animate({
                   scrollTop:590, 
                }, 700
                );
            });
    });

    /* ==== Javascript added for giving scrolling effect in tabs: End ==== */
    
</script>

  <!-- =========================  CSS : STARTED =========================   -->


<style>
  #instructions { max-width: 100%;   text-align: left; margin-bottom:30px;margin-top: 0px;  }
  #instructions textarea { width: 100%;   }
  
  /* Show the controls (hidden at the start by default) */
  
    /* video css: start */

    .video-js .vjs-control-bar { 
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
 .my_video_1-dimensions.vjs-fluid {
    padding-top: 61.71875%;
	}
	.video-js {
	  font-size: 10px;
	  color: #fff; 
	}

	.vjs-default-skin .vjs-big-play-button {
	  
	  font-size: 40px; 
	  height: 60px;
	  width: 60px; 
	  border-radius: 50%;
	  border: 0;
	  left: 47%; 
	  top: 43%;
	  right: 0;position:absolute;
	  bottom: 0;
	  background: transparent;
	  opacity: .8;
	  color: #fff;
	  border: 1px solid #fff;
	}
	.vjs-default-skin .vjs-big-play-button:hover
	    {
	        font-weight: 600;
	        transform: rotate(360deg);
	        border: 1.5px solid #fff;
	        transition: all .7s ease-in-out;
	    }
	.video-js .vjs-control-bar,
	.video-js .vjs-big-play-button,
	.video-js .vjs-menu-button .vjs-menu-content {
	  background-color: #2B333F; 
	  background-color: rgba(43, 51, 63, 0.9);
	}

	.video-js .vjs-slider {
	  background-color: #73859f;
	  background-color: rgba(115, 133, 159, 0.5);
	}

	.video-js .vjs-volume-level,
	.video-js .vjs-play-progress,
	.video-js .vjs-slider-bar {
	  background: #fff;
	}

	.video-js .vjs-load-progress {
	  background: ligthen(#73859f, 25%);
	  background: rgba(115, 133, 159, 0.5);
	}

	.video-js .vjs-load-progress div {
	  background: ligthen(#73859f, 50%);
	  background: rgba(115, 133, 159, 0.75);
	}
	/*
	.size
	{
	  margin-right: 3%;
	  margin-left:3%;
	}
	*/
	/* video css */
	/*pledeg:start*/
	.reward { position:relative;margin:20px auto; width: 263px;}
	.reward .ttl_n_desc {  border:1px solid #f4f4f4; background:#f4f4f4;padding:0  15px  10px 15px;  border-radius:10px; position:relative;border-bottom:0; }
	.reward .ttl_n_desc2{ 
	 background:#f4f4f4;padding: 5px;
	}
	.reward .ttl_n_desc2 h4{
	  font-weight:600;
	}

	}
	 .reward .ttl_n_desc2 .like, 
	  .reward .ttl_n_desc2 .share{
	  background: #ccc;
	    padding: 6px 10px;
	    border-radius: 50%;
	    color: #fff;
	    text-align: center;
	    display: inline-block;
	}
	 .reward .ttl_n_desc2 .like:hover{
	  background:#f2c24f;
	}

	 .reward .ttl_n_desc2 .share:hover{
	  background:#666; 
	}
	 .reward .ttl_n_desc2 .btn-reward{
	  padding:5px 10%;border-radius:20px;color:#0275d8;text-align:center;border:1px solid #0275d8;font-weight:600;
	  margin:auto;transition:all 0.2s ease-in-out;
	}
	 .reward .ttl_n_desc2 .btn-reward:hover{
	  color:#fff;background: #0275d8; 
	  
	}
	.reward .ttl_n_desc2 .under{
	   border-top:1px solid #cfcfcf; 
	   position:relative;padding-top:10px ;margin-right: -15px;
	    margin-left: -15px;
	}
	/*pledge:end*/
/*    media query start for nav responsiveness*/
    @media screen and (min-width: 992px) and (max-width: 1200px)
    {
        .rewards {width: auto!important;}
    }
    @media screen and (min-width: 640px) and (max-width: 991px) 
    {
        .rewards{width: 350px;margin:20px auto;}
    }
     @media only screen  and (max-width: 540px)
     {
         .hc-xs-down{display: none!important;}
     }
     @media screen and (min-width:541px)  and (max-width: 767px)
     {
          #instructions { max-width: 70%;margin-left: 15%;}
         .hc-xs-up{display: none!important;}
     }
/*    media query start for nav responsiveness*/
	.htwo a
    {color: #000;}
    .sme{background-color:#f1f1f1; }
    
     .social li a
    {
        padding: 8px 11px;
    }
    .pledge-textbox{border-top-left-radius: 0px!important;border-bottom-left-radius: 0px!important;}
    .rupee-sign{border-top-left-radius: 15px!important;border-bottom-left-radius: 15px!important;}
</style>

 <!-- =========================  CSS : END =========================   -->

     <!-- === Styling Added for hiding + button when published through campaign-edit: Start === -->
        <style>
          .tab-pane .medium-insert-buttons {
            display: none!important;
          }
        </style>

    <!-- === Styling Added for hiding + button when published through campaign-edit: End === -->
 
<div class="campaign">
  <div class="container"> 
     <div class="alert alert-info" id="info-alert">
      <div class="row">
        <div class="col-sm-10">
        <p style="margin-top: 6px;"> This is a <strong> preview </strong>of your campaign, visit your campaign page. </p>
        </div>
        <div class="col-sm-2">
          <a href="{{ route('manage_campaign') }}" 
          class="btn btn-primary">manage</a>
          <a href="#" style="font-size:35px" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
        </div>
      </div>
        </div>
      
    <div class="row"> 
      <div class="col-sm-12 main-heading">   
        <h2 class = "htwo" id="host-nav"><a href="#">Meenakari-Zentangle Art</a></h2>
      </div>

<!--            same card for xs-screen:start-->
            <div class="hc-xs-down col-xs-12 hidden-sm hidden-md hidden-lg">              
        <div class="fund-details-xs">
                    <div class="col-xs-6 ver-align-r">
                        <div class="row">            
                            <div class="col-xs-3">  
                                <img src="resources/views/img/dp.png" class="host-pic" alt="profile pic"/>   
                            </div>                      
                            <div class="col-xs-9">  
                                <h4 class="prof-nm">Meena Thakur</h4>
                                <h5>New Delhi</h5>
                                <h5>example.com</h5> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-offset-3 col-xs-9" style="margin-top:10px;">
                                <h6><span> 9 Backed</span></h6>
                                <h6><span> 2 Hosted</span></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-offset-3">
                                <div class="col-xs-4">
                                    <a href="" class="btn btn-reward">Chase</a> 
                                </div>
                                <div class="col-xs-4 text-left">
                                    <a href="" data-target="#connect" data-toggle="modal" class="btn btn-reward">Connect</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 ver-align-l">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-11">
                                <h4><i class="fa fa-inr"></i> 0 </h4>
                                <h3>Pledges</h3>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-11">
                                <h4>0 </h4>
                                <h3>Backers</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-11">
                                <h4> 16 </h4>
                                <h3>Days to go</h3> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-11">
                            <div class="progress mt-10">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>                           
        </div>
            </div>
<!-- same card for xs-screen:end -->

      <div class="col-md-8 col-sm-8 col-xs-12">     
        <div id="instructions">
          <video id="my_video_1" class="video-js vjs-default-skin" controls preload="none" poster='resources/views/img/Meenakari_e.jpg' data-setup='{ "aspectRatio":"640:350", "playbackRates": [1, 1.5, 2] }'>
            <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
            <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
          </video>
        </div>                     
      </div>
     
                          
      <div class="hc-xs-up col-md-offset-1 col-md-3 col-sm-4 col-xs-12">              
        <div class="fund-details">
          <div class="row">            
            <div class="col-xs-4 text-center">  
              <img src="resources/views/img/dp.png" class="" height="60px" width="60px" alt="profile pic"/>   
            </div>                      
            <div class="col-xs-8 "> 
              <h4 class="prof-nm"> Meena thakur</h4>
              <h5>New Delhi</h5> 
              <h5> <span> 9 Backed</span> | <span> 2 Hosted</span> </h5> 
            </div>
            <div class="col-xs-12 text-right">
                <a href="campaign_edit.php" class="btn btn-reward">Edit</a> 
              <a href="" class="btn btn-reward">Chase</a> 
              <a href="" data-target="#connect" data-toggle="modal" class="btn btn-reward">Connect</a> 
            </div>  
                                       
          </div>
          <div class="saparator2"></div>  
          <div class="row">
            <div class="col-xs-12 ">
              <div class="pad-5">
                <h4><i class="fa fa-inr"></i>0 </h4>
                <h5>Pledges</h5>  
              </div>  
              <div class="pad-5">
                <h4>0 </h4>
                <h5>Backers</h5> 
              </div>    
              <div class="pad-5">           
                <h4> 16 </h4>
                <h5>Days to go</h5>           
              </div>
              <div class="progress mt-10">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                  <span class="sr-only">0% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>
           <p class="mt-30"><b>Note:</b> <br> This is a all-or-nothing campaign which will close on 12am IST 5th Feb., 2016.  </p>
            </div>
         
    </div>
  </div>
</div>

          <div class="details-menu" id="details-menu"> 
            <div class="container" id="project">
              <h2 class="proj-ttl"> Project: Meenakari-Zentangle Art </h2>

              <!--  ============== TAB BUTTON START : START ===================== -->
                            <div class="row bdrbtm navigationMenu">
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <ul class="nav nav-tabs camp_tab "  id="manage_ul">
                                        <li class="active campn" style="margin-left:-12px;">
                                            <a href="#a" data-toggle="tab">Campaign</a>
                                        </li>
                                        <li class="tmline">
                                            <a href="#b" class="notifications" data-toggle="tab">Timeline&emsp;
                                                <span class="badge badge-primary"> +91 </span>
                                            </a>
                                        </li>
                                        <li class="cmnts">
                                            <a href="#c" data-toggle="tab">Comments&emsp;    <span class="badge badge-primary"> 5 </span>
                                            </a>
                                        </li>
                                        <li class="cmnty">
                                            <a href="#d" data-toggle="tab">Community</a> 
                                        </li>
                                        <li>
                                           <a class="dwn collapse hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                               <i class="fa fa-angle-down"></i>
                                           </a>
<!--
                                           <a class="upp collapse hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                               <i class="fa fa-angle-up"></i>
                                           </a>
-->
                                        </li>
                                        <span class="rew pull-right"><a href="#e" class="hidden-sm hidden-md hidden-lg" data-toggle="tab">Rewards</a></span>
                                    </ul>
                                </div>
                                <div class="fcnt container-fluid col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div id="navbar" class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav navbar-right camp_tab_r">
                                            <li>
                                                <a href="#a" class="active sdrpdwn hidden-sm hidden-md hidden-lg" data-toggle="tab">Campaign&emsp;
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#b" class="tmln notifications sdrpdwn hidden-sm hidden-md hidden-lg" data-toggle="tab">Timeline&emsp;
                                                    <span class="badge badge-primary" style="margin-left:5px;"> +91 </span>
                                                </a>
                                            </li>
                                            <li>
                                            <a href="#c" class="cmt hidden-sm hidden-md sdrpdwn hidden-lg" data-toggle="tab">Comments&emsp;<span class="badge badge-primary"> 5 </span>
                                            </a>
                                            </li>
                                            <li>
                                                <a href="#d" class="cmty sdrpdwn hidden-sm hidden-md hidden-lg" data-toggle="tab">Community</a> 
                                            </li><hr/>
                                            <li class="sme hidden-sm hidden-md hidden-lg">
                                                <a href="#">Suggestion to post</a>
                                            </li>
                                            <li class="sme hidden-sm hidden-md hidden-lg">
                                                <a href="#">Repost an issue</a>
                                            </li>
                                            <li class="sme hidden-sm hidden-md hidden-lg">
                                                <a href="#">Flag the campaign</a>
                                            </li>
                                            <li class="rew hidden-xs"><a href="#e"  data-toggle="tab">Rewards</a></li>
                                            <li class="hrt hidden-xs">
                                                <a href="#"  data-toggle="tab">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="shr hidden-xs">
                                                <a href="#"  data-target="#share" data-toggle="modal">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown drp hidden-xs" style="margin-right:-16px;">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > 
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu folow"> 
                                                    <li><a href="#">Suggestion to host</a></li>
                                                    <li><a href="#">Repost an issue</a></li>
                                                    <li><a href="#">Flag the campaign</a></li>          
                                                </ul>
                                            </li>                                            
                                            <div class="row vertical-divider hidden-sm hidden-md hidden-lg">
                                                <div class="col-xs-4">
                                                    <div class="hrt" style="margin-bottom:9px;">
                                                        <a href="#"  data-toggle="tab">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="shr" style="margin-top:11px;">
                                                        <a href="#"  data-target="#share" data-toggle="modal">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <div class="dropdown drp" style="margin-top:11px;">
                                                        <a href="#" id="cme" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > 
                                                        <i class="fa fa-ellipsis-h"></i>
                                                        </a>
                                                        <ul class="dropdown-menu"> 
<!--
                                                            <li class="size"><a href="#">Suggestion to host</a></li>
                                                            <li class="size"><a href="#">Repost an issue</a></li>
                                                            <li class="size"><a href="#">Flag the campaign</a></li>
-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>                        
                                        </ul>
                                    </div>
                                </div>                                   
                            </div>
             
   <!--  ============== TAB BUTTON START : END ===================== -->       
            </div>
            
            
          </div>


<div class="wrapper" ng-controller="TestCtrl">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="tab-content col-md-9 ">
 
                <!--  ============== TAB 1 : START ===================== -->

            <div class="tab-pane fade in active" id="a">
              <br><br>
              @foreach($q as $q)
                      {!! $q->info !!}
              @endforeach 
            </div>
            
                <!--  ============== TAB 1 : END ===================== -->

                <!--  ============== TAB 2 : START ===================== -->

            <div class="tab-pane fade in" id="b">
              <div class="row">
                <!-- TIMELINE EXTERNAL FILE INCLUDED: START -->
				
				      @include('frontend.timeline')
                                
                  

                <!-- TIMELINE EXTERNAL FILE INCLUDED: END -->
              </div>
            </div>
                <!--  ============== TAB 2 : END ===================== -->



            <!--  ============== TAB 4 : START ===================== -->

            

            <!--  ============== TAB 4 : END ===================== -->

            <!--  ============== TAB 5 : START ===================== -->
            <div class="tab-pane fade in" id="c">
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue. Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue. Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue. Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue. Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue. Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>
              <p>Secondo sed ac orci quis tortor imperdiet venenatis.<br> Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</p>

            </div>

            <!--  ============== TAB 5 : END ===================== -->

            <!--  ============== TAB 6 : START ===================== -->

            <div class="tab-pane fade in " id="d" style="margin-top:52px;">

            <!-- Community -->
              <?php include("resources/views/img/india3.svg"); ?>

            </div>    


            <!--  ============== TAB 6 : END ===================== -->         
                    
            <div class="tab-pane hidden-md hidden-lg"   id="e">
<!--            show when click on rewards blue button in sm, xs-->
                <div class="reward ">                
                             <div class="ttl_n_desc"><h4 class="pledge" style="margin-bottom:7px;"> Pledge without reward</h4>
                                     <form action="" method="">
                                         <div class="p-style">
                                              <div class="form-group input-group">
                                                    <span class="input-group-addon rupee-sign" id="basic-addon1"><i class="fa fa-inr" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control pledge-textbox" onkeypress="return isNumberKey(event);" aria-describedby = "basic-addon1" required/>
                                              </div>
                                             <div class="ttl_n_desc2 text-center">
                                                 <a href="#" class="btn btn-reward"> Pledge </a>
                                             </div>
                                         </div>
                                      </form>
                                </div>
                     </div>    
              
              <div class="rewards">
                <div class="ttl_n_desc">
                  <h4 class="pledge"> Reward title here</h4>
                   
                  <p> Rewards description comes 
                    here where the campaigner 
                    can explain about the reward
                    he is giving out for said 
                    pledged amount.<br>
                      ● 1 Hoodie Sweat shirt<br>
                      ● 2 T-shirts (V Neck)<br>
                      ● 1 Golf cap<br>
                      ● 10% off coupon on your next 
                         purchase from our website. <br>

                    (You can comment with your desired 
                    color in sizes: XS, S, M, L, XL, XXL) 
                  </p>
                </div>
                <div class="ttl_n_desc2">
                  <div class="row">
                    <div class="col-xs-3">                      
                      <a href="" class="like"> <i class="fa fa-star"></i> </a>
                    </div>
                    <div class="col-xs-6 text-center">                    
                      <h6> 22 of 75 left</h6>
                    </div>
                    <div class="col-xs-3 text-right">                   
                      <a href="" class="share" data-target="#share" data-toggle="modal"> <i class="fa fa-share-alt"></i> </a>
                    </div>
                   
                    <div class="col-xs-12 text-center"> 
                      <a href="get-reward.php" class="btn btn-reward"> Get Reward </a>
                      <h3 class="pledge"> <i class="fa fa-inr"></i> <span> 10,000 </span> </h3>
                    </div>
                   
                    <div class="col-xs-12 ">
                      <div class="under">
                        <div class="col-xs-6">
                          <h6>Estimated delivery</h6>
                          <h5> July 2016</h5>
                        </div>
                        <div class="col-xs-6 text-right">
                          <h6>Ships to</h6>
                          <h5>Only India</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 
              </div>   <!----reward end-------->
              <div class="rewards">
                <div class="ttl_n_desc">
                  <h4 class="pledge"> Reward title here</h4>
                   
                  <p> Reward description comes 
                    here where the campaigner 
                    can explain about the reward
                    he is giving out for said 
                    pledged amount.<br>
                      ● 1 Hoodie Sweat shirt<br>
                      ● 2 T-shirts (V Neck)<br>
                      ● 1 Golf cap<br>
                      ● 10% off coupon on your next 
                         purchase from our website. <br>

                    (You can comment with your desired 
                    color in sizes: XS, S, M, L, XL, XXL) 
                  </p>
                </div>
                <div class="ttl_n_desc2">
                  <div class="row">
                    <div class="col-xs-3">                      
                      <a href="" class="like"> <i class="fa fa-star"></i> </a>
                    </div>
                    <div class="col-xs-6 text-center">                    
                      <h6> 22 of 75 left</h6>
                    </div>
                    <div class="col-xs-3 text-right">                   
                      <a href="" class="share" data-target="#share" data-toggle="modal"> <i class="fa fa-share-alt"></i> </a>
                    </div>
                   
                    <div class="col-xs-12 text-center"> 
                      <a href="get-reward.php" class="btn btn-reward"> Get Reward </a>
                      <h3 class="pledge"> <i class="fa fa-inr"></i> <span> 10,000 </span> </h3>
                    </div>
                   
                    <div class="col-xs-12 ">
                      <div class="under">
                        <div class="col-xs-6">
                          <h6>Estimated delivery</h6>
                          <h5> July 2016</h5>
                        </div>
                        <div class="col-xs-6 text-right">
                          <h6>Ships to</h6>
                          <h5>Only India</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 
              </div>   <!----reward end-------->
              <div class="rewards">
                <div class="ttl_n_desc">
                  <h4 class="pledge"> Reward title here</h4>
                   
                  <p> Reward description comes 
                    here where the campaigner 
                    can explain about the reward
                    he is giving out for said 
                    pledged amount.<br>
                      ● 1 Hoodie Sweat shirt<br>
                      ● 2 T-shirts (V Neck)<br>
                      ● 1 Golf cap<br>
                      ● 10% off coupon on your next 
                         purchase from our website. <br>

                    (You can comment with your desired 
                    color in sizes: XS, S, M, L, XL, XXL) 
                  </p>
                </div>
                <div class="ttl_n_desc2">
                  <div class="row">
                    <div class="col-xs-3">                      
                      <a href="" class="like"> <i class="fa fa-star"></i> </a>
                    </div>
                    <div class="col-xs-6 text-center">                    
                      <h6> 22 of 75 left</h6>
                    </div>
                    <div class="col-xs-3 text-right">                   
                      <a href="" class="share" data-target="#share" data-toggle="modal"> <i class="fa fa-share-alt"></i> </a>
                    </div>
                   
                    <div class="col-xs-12 text-center"> 
                      <a href="get-reward.php" class="btn btn-reward"> Get Reward </a>
                      <h3 class="pledge"> <i class="fa fa-inr"></i> <span> 10,000 </span> </h3>
                    </div>
                   
                    <div class="col-xs-12 ">
                      <div class="under">
                        <div class="col-xs-6">
                          <h6>Estimated delivery</h6>
                          <h5> July 2016</h5>
                        </div>
                        <div class="col-xs-6 text-right">
                          <h6>Ships to</h6>
                          <h5>Only India</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 
              </div>   <!----reward end-------->
            
            </div>
  
          </div>


           <br><br> 
             <div class="col-md-3 hidden-xs hidden-sm">                   
              <!--<h3 class="tab-title"> Rewards  </h3>   -->             <div class="reward ">                
                             <div class="ttl_n_desc"><h4 class="pledge" style="margin-bottom:7px;"> Pledge without reward</h4>
                                     <form action="" method="">
                                         <div class="p-style">
                                              <div class="form-group input-group">
                                                    <span class="input-group-addon rupee-sign" id="basic-addon1"><i class="fa fa-inr" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control pledge-textbox" onkeypress="return isNumberKey(event);" aria-describedby = "basic-addon1" required/>
                                              </div>
                                             <div class="ttl_n_desc2 text-center">
                                                 <a href="#" class="btn btn-reward"> Pledge </a>
                                             </div>
                                         </div>
                                      </form>
                                </div>
                     </div>    
              
              <div class="rewards">
                 
                 @foreach($q1 as $q1)

                    <div class="ttl_n_desc">

                    <!--  <h4 class="pledge"> Reward title here</h4>-->
                       <h4 class="pledge">{{ $q1->title }}</h4>
                      <p>{!! $q1->description !!}
                      </p>
                    </div>
                    <div class="ttl_n_desc2">
                      <div class="row">
                        <div class="col-xs-3">                      
                          <a href="" class="like"> <i class="fa fa-star"></i> </a>
                        </div>
                        <div class="col-xs-6 text-center">                    
                          <h6> {{ $q1->Quantity }} of 75 left</h6>
                        </div>
                        <div class="col-xs-3 text-right">                   
                          <a href="" class="share" data-target="#share" data-toggle="modal"> <i class="fa fa-share-alt"></i> </a>
                        </div>

                        <div class="col-xs-12 text-center"> 
                          <a href="get-reward.php" class="btn btn-reward"> Get Reward </a>
                          <h3 class="pledge"> <i class="fa fa-inr"></i> <span>{{ $q1->cost }}</span> </h3>

                        </div>


                      </div>

                    </div>
                    @endforeach
              
              </div>
              
              </div>  
              
               
            </div>

  
            
        </div>
            </div>
            
      
    </div>
  
  </div>

@include('includes.footer')


<script type="text/javascript">
  // setting's nav-button on capaign page js
//  $(window).scroll(function() {    
//      var scroll = $(window).scrollTop();
//      if (scroll >= 650 ) {
//        $("#details-menu").addClass("affix-tab"); 
//      }
//          
//      else{ 
//        $("#details-menu").css(' ',' ').removeClass("affix-tab");
//      }
//    });
    
    jQuery(document).ready(function ($) {
    //THIS MAKES THE SLIDEY THINGS SLIDE
    //textone
    if (window.matchMedia("(max-width: 480px)").matches) {
        // window width is under 480px
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 700) {
                $("#details-menu").addClass("affix-tab"); 
            } else {
                $("#details-menu").css(' ',' ').removeClass("affix-tab");
            }
        });
    } else {
        // window width is greater than 480px
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 550) {
                $("#details-menu").addClass("affix-tab"); 
            } else {
               $("#details-menu").css(' ',' ').removeClass("affix-tab");
            }
        });
    }
});
</script>

<script>
  $(document).ready (function(){
            $("#info-alert").show();
            $(".close").click(function showAlert() {                 
               $("#info-alert").slideUp(500);
            });   
           $("#info-alert").fadeOut(6000); 
           
 });
</script>
