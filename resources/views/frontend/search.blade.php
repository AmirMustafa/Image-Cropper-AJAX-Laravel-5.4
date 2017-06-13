@if(Session::has('email'))
  @include('includes.profile_header')
  @php 
    $umail = $uemail = $reward_mail = Session::get('email');  //saving session value
  @endphp

@else
  @include('includes.header')
@endif

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="search_box">
					<input type="text" name="" placeholder="Search"/>
					<button type="submit" > <i class="fa fa-search"></i></button>
				</div>
			</div>
			<div class="col-md-12">
					<ul class="nav nav-tabs search_tab " >
						<li class="active"><a href="#a" data-toggle="tab">All</a></li>
						<li><a href="#b" data-toggle="tab">Campaign</a></li>
						<li><a href="#c" data-toggle="tab">People</a></li>
						<li><a href="#d" data-toggle="tab">Videos</a></li> 	
					</ul>						

				<div class="row">
					<div class="tab-content col-md-12 mt-20">
						<div class="tab-pane active" id="a">
							 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimenscrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                
						</div>
						
						<div class="tab-pane" id="b">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets condard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


						</div>
						<div class="tab-pane" id="c">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letrasetsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.



						</div>
						<div class="tab-pane " id="d">
							 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Loreake a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.



						</div>						 
										
					 
	
					</div>

 
						
				</div>
            </div>
            
			
		</div>
	
	</div>
</div>


<!--
<div class="wrapper bg-gray">
	<div class="container">
		<div class="row">				
                <div class="col-md-12">                    
						<div class="row ">
							<div class="col-md-12 main-heading">
								<h1 class="heading">Project : Meenakari-Zentangle Art   </h1>
								<h5 class="author"> <img class="profile" src="img/dp.png" alt="profile pic"/> Meena T <span> </span> </h5>
							</div>
							<div class="col-md-7"> 
									
									
								<div id="instructions">
									<video id="my_video_1" class="video-js vjs-default-skin" 
									  controls preload="none" poster=''
									  data-setup='{ "aspectRatio":"640:300", "playbackRates": [1, 1.5, 2] }'>
										<source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
										<source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
									</video>
								</div>

								 
							</div>
													
							<div class="col-md-5">							
								<div class="pad-10">
									<h1 class="bolder "> 154 </h1>
									<p> Backers </p>
								</div>
								<div class="pad-10">
									<h1 class="bolder pad-20"> $ 195 </h1>
									<p>  pledged of £10,000 goal  </p>
								</div>
								<div class="pad-10">
									<h1 class="bolder pad-20"> 54 </h1>
									<p>  days to go  </p>
								</div> 
								 
								<ul class="list-inline pt-40">
									<li> <a href=""title="Default tooltip Secondo " class="btn btn-lg btn-primary"> Back to this Project</a> </li> 
									<li> <a href="" class="link btn" > <strong> <i class="fa fa-star"></i> Remind me </strong>  </a> </li> 
								</ul>
								
							</div>							
						</div>                    
                </div>
		</div>

		
					<div class="mt-20">	  
						<div class="row ">
							<div class="col-md-7">
								<ul class="list-inline">
									<li> <a href="" class="link bolder btn" > <i class="fa fa-map-marker"></i> Project Location</a> </li> 
									<li> <a href="" class="link bolder btn" > <i class="fa fa-tag"></i> Remind me </a> </li> 
									<li> <a href=""title="Default tooltip Secondo " class="btn btn-success"><i class="fa fa-star"></i> Back to this Project</a> </li> 
								</ul>
								<div class="pad-20">
									<h3 class="desc1">Project : You really need to do this with rtmp, not http. QT will download the entire video, and nobody does it like that anymore. Wowza has development .   </h3>
								</div>
								<ul class="list-inline">
									<li> <strong> Share :  </strong> </li> 
									<li> <a href="" class=" btn btn-default" > <i class="fa fa-facebook"></i>  </a> </li> 
									<li> <a href="" class=" btn btn-default" > <i class="fa fa-twitter"></i>  </a> </li> 
									<li> <a href="" class=" btn btn-default" > <i class="fa fa-instagram"></i>  </a> </li> 	
									<li> <a href="" class=" btn btn-default" > <i class="fa fa-pinterest"></i>  </a> </li>  
									<li> <a href="" data-target="#widget" data-toggle="modal" class=" btn btn-default" > <i class="fa fa-code"></i>  </a> </li> 
									 <li> <a href=""data-target="#widget-url" data-toggle="modal"  class=" btn btn-default" > <i class="fa fa-link"></i>  </a> </li>  
									
								</ul>
								 
							</div>
													
							<div class="col-md-5">		
								<img src="img/dp.png" class="img-responsive profile"  pull-right" />							
								<p>Project : You really need to do this with rtmp, not http. QT will download the entire ...   </p>
								<ul class="list-inline">
									<li> <a href=""title="Default tooltip Secondo " class=""> Back to this Project</a> </li> 
									<li> <a href="" class="link btn" > <strong> <i class="fa fa-star"></i> Remind me </strong>  </a> </li> 
								</ul>
								 
								
							</div>
							
						</div>                    
					</div>
            

	</div>
</div>
--->




	
	<div class="modal fade " id="widget"  >
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"> Embed</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
								 <div class="row ">
											   
									<div class="col-sm-7 ">
									<h4 class="modal-title "> Preview </h4>
										<div class="card">
											<img src="img/thirs.png" alt="project image" class="img-responsive"/>
											 
											<div class="pad-lr-25">
												<h5 class="author pad-15"> Nura - Headset reinvented for perfect silence 
				and luxury that your ears deserve<span> </span> </h5>
												<ul class="list-inline bdr-btm">
												<li>  Nura Inc.  </li> 
												<li class="pull-right">   New Delhi, DL </li> 								
												</ul>
												<p> Project description  sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis econ. </p>
												
																				
												<div class="progress mt-20">
												  <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">70% Complete</span>
												  </div>
												</div>

												<ul class="list-inline card-stage">
												<li>  207% <p> Funded </p> </li> 
												<li>  $25 <p> Pledged </p> </li>  
												<li class="pull-right">  32 <p> Days to go </p> </li> 
												
												</ul>
											</div>
										</div>							   

									</div>
									<div class="col-sm-5 ">
										<h4 class="modal-title">  Code</h4>
									   <textarea style="padding-left:10px;" rows="8" cols="25"><iframe frameborder="0" height="420" scrolling="no" src=" http://chasingpapers.com/fund/project/nura-headset.php" width="220"></iframe> </textarea> 
										 

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
	<div class="modal fade login in " id="widget-url"  >
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"> Embed Hyperlink</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
								 <div class="row ">
											   
									 
									<div class="col-sm-6 ">
										 
										<h4 class="modal-title">  Hyperlink Code</h4>
									   <textarea rows="6" cols="43"> http://chasingpapers.com/fund/project/nura-headset.php </textarea> 

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

@include('includes.footer')