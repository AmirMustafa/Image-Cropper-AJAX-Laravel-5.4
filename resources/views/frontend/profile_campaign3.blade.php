<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = Session::get('email');

        foreach($fetch as $fetch) {
        $video_id = $fetch->video_id;
        $video_title = $fetch->video_title;
        $video_description = $fetch->video_description;
        $video_tags = $fetch->video_tags;
        $video_path = $fetch->video_path;
    }
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif

    <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
        <div class="container">
            <div class="row" >
                <div class=" bs-step" >                
                    <div class="col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-1 bs-step-step bs-step-first complete">
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Campaign Summary</div>
                        <a href="{{ route('profile_campaign2') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step active"> 
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum"> Video Upload</div>
                        <a href="{{ route('profile_campaign3') }}" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step disabled"><!-- complete -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme">Campaign Host</div>
                        <a href="profile-campaign4.php" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step disabled"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Rewards</div>
                        <a href="profile-campaign6.php" class="bs-step-dot"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step bs-step-last disabled"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Link Accounts</div>
                        <a href="profile-campaign7.php" class="bs-step-dot"></a>
                    </div>
                </div>
            </div>
        
   
    <div class="row mt-70">
        <div class="col-xs-12">
            <div class="p-camp4-form reset-form campaign-form">
                <h3>Video Upload</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('profile_campaign3b') }}">
                    <div class="row">
				        <div class="col-xs-4">
				            <label>  Name: </label>
				        </div>
				        <div class="col-xs-8 txt-box">
				            <input type="text" class="form-control" placeholder="Title" name="title" value="<?php if(empty($video_title)) {echo '';} else {echo $video_title; } ?>" required autofocus>	
				        </div>
				        
				        <div class="col-xs-4">
				            <label>  Description: </label>
				        </div>
				        <div class="col-xs-8 txt-box">
				            <textarea class="form-control" placeholder="Description" name="info" rows="5" required><?php if(empty($video_description)) {echo '';} else {echo $video_description; } ?></textarea>	
				        </div>
				        
				        <div class="col-xs-4">
				            <label>  Tags: </label>
				        </div>
				        <div class="col-xs-8 txt-box">
				            <input type="text" class="form-control" placeholder="Tags(i.e. study,books,etc)" name="tags" value="<?php if(empty($video_tags)) {echo '';} else {echo $video_tags; } ?>" required>	
				        </div>
				        
				        <div class="col-xs-4">
				            <label>  Video: </label>
				        </div>
				        <div class="col-xs-8 txt-box">
				            <input type="file" class="form-control" name="videoFile" required>	
				        </div>
				        
				       	
				<div class="camp-form2-btn">
				        <div class="col-sm-2 col-xs-6 back-btn" style="margin-top:15px;">
                                	    <a href="{{ route('profile_campaign2') }}" class="btn btn-default"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                            		</div>
                            		<div class="col-sm-10 col-xs-6 text-right txt-box" style="margin-top:15px;">
                                	    <button type="submit" name="videoSubmit" class="btn btn-primary">Next&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>	
                                	    </button>
                            		</div>
                        	</div>
			</div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </div>
        </div>
    </div>
	 </div>		
</div>
			
@include('includes.footer') 