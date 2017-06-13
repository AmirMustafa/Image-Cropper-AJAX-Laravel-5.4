<?php
//	include("connect.php");
//	
//	if(isset($_POST["submit"]))
//	{
//		$newsEmail = $_POST["email"];
//		
// 			if(!preg_match("/^[a-z]+(_|\.)?[a-z0-9]*?@[a-z]+\.[a-z]+$/i",$newsEmail))
//			{
//				echo "<script>window.open('footer.php?e_email=Please Enter Your Correct Email','_self')</script>";
//				exit();
//			} 
//	}
?>
<!--
<style>
	.geterror
	{
		color:#cc0000;
		text-align:center;
	}
</style>
-->
<!--top footer
<div class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center links"><a href="#"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i>Hassel free replacement</a></div>
            <div class="col-md-4 text-center links"><a href="#"><i class="fa fa-credit-card-alt fa-2x" aria-hidden="true"></i>100% secure payments</a></div>
            <div class="col-md-4 text-center links"><a href="#"><i class="fa fa-map-o fa-2x" aria-hidden="true"></i>Vast service network</a></div>
        </div>
    </div>
</div>
-->
<!--middle footer-->
<!--
<div class="footer1">
    <div class="container">
        <div class="row">
            <div class="col-md-2 text-center">
                <div class="h4">STAY IN TOUCH</div>
            </div>
			<div class="col-md-4 text-center">
				<ul class="list-inline social">
					<li> <a href=""> <i class="fa fa-facebook"></i> </a><li>
					<li> <a href=""> <i class="fa fa-instagram"></i> </a><li>
					<li> <a href=""> <i class="fa fa-pinterest"></i> </a><li>
					<li> <a href=""> <i class="fa fa-twitter"></i> </a><li>
				</ul>
			</div>
			<div class="col-md-6 text-center"> 
				<div class="newsletter">
					<form action="" method="post"  id="subs-form"  >
						<div class="input-group">
							<input type="email" name="email" class="form-control" placeholder="Email Id for Newsletter" aria-describedby="basic-addon2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required autofocus/>
							<span class="input-group-addon">
								<input type="submit" name = "submit" value=">">
								<div class = "geterror"><?php //echo @$_GET["e_email"];?></div>
							</span>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>
-->
<!--

bottom footer
-->


<!--
<style>
    #footer_submit {
        background: url(resources/views/img/footer_email.png) center #0275d8;
        background-size: cover;
        width: 140%;
        border: 1px solid #0275d8;
        margin-bottom: -18px;
        height: 50%;
    }
</style>
-->
<style>
    .txt
    {
        width: 202px;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        color: #000;
        border: 2px solid #0275d8;
        margin-left: -15px;
        padding-left: 9px;

/*
        height: 31px;
        line-height: 31px;
*/
    }
    .nws
    {
        height: 31px;
        line-height: 31px;

    }
    .footer .newsletter .sbtn
    {
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;  
    }
/*media quaries*/
    @media screen and (min-width: 993px) and (max-width: 1200px)
    {
        .txt{width: 198px;}
        .footer .newsletter .sbtn{margin-right: 4px;}
    }
    @media screen and (min-width:320px) and (max-width: 768px)
    {
        .txt{width: 202px;}
        .footer .newsletter .sbtn{margin-right: -5px;}
    }
    @media screen and (min-width:0px) and (max-width: 319px)
    {
        .txt{  width: 170px;}
        .footer .newsletter .sbtn{margin-right: -5px;}
    }

</style>
<div class="footer">
	<div class="container ">
		<div class="row ">
			<div class="col-md-4 col-sm-6 text-left"> 
				<div class="row"> 
					<div class="col-xs-5 "> 
						<ul class="list">
							<li> <a href=""> How to </a><li>
							<li> <a href=""> Generousity </a><li> 
							<li> <a href=""> Success Stories </a><li>
							<li> <a href=""> Pricing </a><li> 
						</ul>
					</div>
					<div class="col-xs-6 "> 
						<ul class="list">
							<li> <a href=""> Crowdfunding Guide  </a><li> 
							<li> <a href=""> Trust & Safety </a><li>
							<li> <a href=""> Help & Support </a><li> 
							<li> <a href="{{ route('feedback') }}"> Feedback </a><li>
						</ul>
					</div>
				</div>
			</div>
			<div class=" col-md-4 col-sm-6 text-center">
				 <a class="" title="Fundlr" href="{{ route('/') }}"><!--Fund<span>lr</span>-->
				 <img class="logo" src="resources/views/img/footer_logo.png" alt="logo"/>
				 </a>  
				<h6>  <a href="sitemap.php" style="color:#fff;">  © 2017 Fundlr.</a> </h6>
				<h6>  All rights reserved </h6>
				 
			</div>
			<div class="col-md-4 col-sm-12 "> 
				<div class="row"> 
					<div class="col-md-12 col-sm-5 text-right"> 
						<ul class="list-inline social">
							<li> <a href=""> <i class="fa fa-facebook"></i> </a><li>
							<li> <a href=""> <i class="fa fa-instagram"></i> </a><li>
							<li> <a href=""> <i class="fa fa-pinterest"></i> </a><li>
							<li> <a href=""> <i class="fa fa-twitter"></i> </a><li>
						</ul>
					</div>	 
					<div class="col-md-12 col-sm-7 text-right"> 
					     	 <div class="newsletter">
							    <form method="get"  id="subs-form"  >
							 	    <div class="nws">
								        <input type="email" name="email" class="txt" placeholder="Email Id for Newsletter" aria-describedby="basic-addon2" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required/>
								       	<input type="submit" id="submit" name = "submit" class="sbtn" value=">">
                                    </div>	
<!--                                     <div class=" sbt">-->
								            
<!--								        </div>-->
<!--							   <span class="input-group-addon">-->
<!--
                                        <button type="submit" id="footer_submit" name="submit" value=">" >
                                            <img src="resources/views/img/footer_email.png" alt="">
                                        </button>
-->
<!--									<div class = "geterror"><?php //echo @$_GET["e_email"];?></div>-->
<!--							  </span>-->
                                </form>
						    </div>
				        
				    </div>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-12 col-sm-12">				  
				<div class="sub-footer">				  
					<ul class="list-inline ">
						<li> <a href="{{ route('terms')}}"> Terms of Use </a><li> &bull; 
						<li>  <a href="{{ route('privacy')}}">Privacy Policy </a><li> &bull; 
						<li> <a href="{{ route('cookie_policy')}}">  Cookie Policy </a><li> 
					</ul>				 
				</div>
			</div>
		</div>		
	</div>
</div>

 
<div class="gotop"><a href="" data-toggle="tooltip" data-placement="right" title="gotop"><i class="fa fa-chevron-circle-up"></i></a></div>
	
 
{{-- === AJAX FOR SUBSCRIPTION RELATED IN FOOTER SECTION: START ===  --}}

<script type="text/javascript">

        $(document).ready(function() {
          $("#submit").click(function() {
             //alert("hiiiiiiiiii");

             var loginForm = $("#subs-form");
             loginForm.submit(function(e){
                 //alert("Hiiiii");
                 e.preventDefault();
                 var formData = loginForm.serialize();

                 /*alert(formData);*/

                    $.ajax({
                        url:"newsletter",
                        type:'get',
                        data:formData,
                        success:function(data){
                            //alert(data);

                            $("#subs-form").fadeOut(500).hide(function()
							{
								$(".newsletter").fadeIn(500).show(function()
								{
									$(".newsletter").html(data);
								});
							});
                            
                        },
                        error: function (data) {
                            /*console.log(data);*/
                            //alert(data);
                        }
                    });
                });


             });                 
        });
</script>

{{-- === AJAX FOR SUBSCRIPTION RELATED IN FOOTER SECTION: END ===  --}}	

</body>
</html>