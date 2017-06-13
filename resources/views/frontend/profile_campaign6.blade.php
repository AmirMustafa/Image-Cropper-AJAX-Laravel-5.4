<?php

    $cname  =  Session::get('cname');
    $cregion = Session::get('cregion');
    $uemail = Session::get('email');
    $uname = Session::get('host_name');

    /*foreach($fetch as $fetch) {     //getting data from database

    $location = $fetch->location;
    $headquarter = $fetch->headquarter;
    $website = $fetch->website;
    $dob = $fetch->dob;
    }*/
?>

@if(isset($uemail))
    
@include('includes.profile_header')

@elseif(!isset($cname))
<script>
    window.location = "{{ route('camp_signin') }}";
</script>   
@endif



 
<style>
   .modal-dialog{
        width: 300px;
    }
    .icon:hover:after {
 /*   content: "Repeat";*/
   /* display: block;
    position: relative;
    top: -16px;
    right: -16px;
    width: 100px;
    background: white;*/
}
</style>
    <div class="wrapper " ><img class="bg_pattern" src="resources/views/img/patterns.png" alt="background-image" />
        <div class="container">
            <div class="row" >
                <div class=" bs-step" >                
                    <div class="col-xs-2 col-xs-offset-1 col-sm-3 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-1 bs-step-step bs-step-first complete">
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Campaign Summary</div>
                        <a href="{{ route('profile_campaign2') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step complete"> 
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum"> Video Upload</div>
                        <a href="{{ route('profile_campaign3') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step complete"><!-- complete -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme">Campaign Host</div>
                        <a href="{{ route('profile_campaign4') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step complete"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Rewards</div>
                        <a href="{{ route('profile_campaign5') }}" class="bs-step-dot-completed"></a>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 bs-step-step bs-step-last active"><!-- active -->
                        <div class="progress"><div class="progress-bar"></div></div>
                        <div class="text-center bs-step-stepnum hideme"> Link Accounts</div>
                        <a href="{{ route('profile_campaign6') }}" class="bs-step-dot"></a>
                    </div>
                </div>
            </div>
 
        
      <div class="row">               
        <div class="col-xs-12"> 
            <div class="p-camp6-form reset-form campaign-form">
            <h3> Link Account </h3>
            <form class="" method="post" action="{{ route('profile_campaign6b') }}" > 
            <!--  <div class="row">
                <div class="col-xs-4">
                  <label>  Verify mobile: </label>
                </div>
                <div class="col-xs-8">
                  <input type="text" class="form-control" maxlength="13" name="" value="+91" placeholder="Enter your 10 digit mobile number" onkeypress="return isNumberKey(event);"  required> 
                </div>
              </div>-->
            <!--  <div class="row">
                <div class="col-xs-4">
                  <label>Verification Code: </label>
                </div>
                <div class="col-xs-8">                   
                  <input type="text" class="form-control" maxlength="6" name="" placeholder="Enter 6 digit code"  required onkeypress="return isNumberKey(event);" >   
                </div>  
              </div>-->
              <div class ="row">
                  <div class="col-xs-4">
                  <label> Mobile Number: </label>
                </div>
                  <div class="col-xs-8 col-sm-5 col-md-5 col-lg-5 txt-box"> 
                    <input  class="form-control" type="tel" name = "user_mobile" id="mobile-number" value ="<?php //echo $user_mobile?>" placeholder="e.g. +1 702 123 4567" maxlength="15" onkeypress="return isNumberKey(event);" required/>
                </div>
                <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 text-right txt-box">
                    <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"  >Verify</a>
                </div>
                </div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> Identity Proof: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="file" class="form-control" value="<?php //echo $identity;?>" name="identity" placeholder="" required>  
                  <p style="font-size:11px;">Upload only in Jpeg format of upto 10MB in size.<br>  Kindly, Upload an identity proof (government approved) that bears your photo on it which must be a scanned copy and must be valid, legible and non-expired document. </p>
                </div>
              </div>
              <div class="saparator2"></div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> Bank Name: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="text" class="form-control" value ="<?php //echo $bank;?>" name="bank" placeholder="Bank Name" required>  
                </div>
              </div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> Branch Name: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="text" class="form-control" value="<?php //echo $branch; ?>" name="branch" placeholder="Branch Name" required>  
                </div>
              </div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> Account no: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="text" class="form-control" value="<?php //echo $account; ?>" name="account" placeholder="Account no" required> 
                </div>
              </div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> IFSC code: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="text" class="form-control" value="<?php //echo $ifsc;?>" name="ifsc" placeholder="IFSC code" required> 
                </div>
              </div>
              <div class="row">               
                <div class="col-xs-4">
                  <label> RTGS code: </label>
                </div>
                <div class="col-xs-8 txt-box">
                  <input type="text" class="form-control" name="rtgs" placeholder="RTGS code" value="<?php //echo $rtgs;?>" required> 
                </div>
              </div>
              <div class="row" style="margin-top:5px;">
                                <div class="col-xs-2 back-btn">
                                    <a href="{{ route('profile_campaign5') }}" class="btn btn-default"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                                </div>
                              <div class="col-xs-10 txt-box text-right">  <hr/>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
           

  <div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog login">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Verify Mobile Number</h4> 
      </div>
      <div class="modal-body">
          <p>An OTP was sent to verify your mobile number: <b></b></p>
      
      <div class="row">
      <div class="col-xs-12 mt-20"> 
        <div class="col-xs-6">
            <input type="text" name = "name" class="form-control" id="inputEmail" style ="margin-left:-17px;" placeholder="Enter OTP">
                      
        </div>
      <!--   <div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>-->
          <div class=" col-xs-2 icon"><span class="btn btn-default" data-toggle="tooltip" title="Resend"><i class="fa fa-repeat" aria-hidden="true"></i></span>
          </div>
           <div class="col-xs-offset-1 col-xs-3">
            <input  style="margin-left:-17px; "type="submit" name = "submit" hrfd-c="" class="btn  btn-primary " value="Submit"/>  
          </div>
      </div>
       </div>
        </div>
    </div>

  </div>
</div>


<!--submit modal:start-->
<div id="submitModal" class="modal fade " role="dialog">
  <div class="modal-dialog login">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"   style=" "class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Notice</h4> 
      </div>
      <div class="modal-body">
          <ol>
            <li>You could change your campaign's name and certain other details before you submit for review. Otherwise, we will keep the campaign details saved in your account always.</li><br>
            <li>Once the campaign goes live you will not be able to do anymore changes to your campaign, other than the additional rewards, for strech goals.
            </li>
          </ol>    
<!--      2nd form taken for second submit button only:start       -->
          <form action="p-camp6-dbm.php">
              <div class="row">
                  <div class="col-xs-12 mt-20"> 
                    <div class="col-xs-offset-1 col-xs-5">
                        <input type="submit" name = "submit" class="btn btn-default" data-dismiss="modal" value="Later"/>
                        
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" name = "submit" class="btn btn-primary" value="Submit"></button>  
                    </div>
                  </div>
               </div>

               
           </form>
<!--      2nd form taken for second submit button only:finished       -->
        </div>
    </div>

  </div>
</div>
<!--submit modal:finished-->

@include('includes.footer')