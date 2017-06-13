@include('includes.profile_header')
<?php
$title = $_GET['title'];		//this we receive through url when user clicks on
$description = $_GET['description'];		//manage_campaign Get Reward Link
$quantity = $_GET['quantity'];
$cost = $_GET['cost'];
?>

<div class="wrapper ">
	<div class="container">
		<div class="row">
			<div  class="col-md-8">
			 	<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Vehicles</a></li>
					<li><a href="#">Vans</a></li>
					<li><a href="#">Camper Vans</a></li>
					<li><a href="#">1989 VW Westfalia Vanagon</a></li>
				</ul>
			</div>
			 	<div style="border-right:1px solid #ccc;" class="col-md-8">
					<h4>Fund as: </h4>

					<label>	<input type="radio" name="a" CHECKED><span> Anonymous</span>	</label>  <br>

					<label>	<input type="radio" name="a">	<span> Person name</span>	</label> 
					
					<br>
					<br>
					<div style="border-top:1px solid #ccc;" class="col-md-12">
					 <div class="rewards">  
					
					 <br>             
						<div class="ttl_n_desc">

						<!--  <h4 class="pledge"> Reward title here</h4>-->
						   <h4 class="pledge"> <?php echo $title; ?></h4>
						  <p><?php echo $description; ?>
						  </p>
						</div>

						<div class="ttl_n_desc2">
                      <div class="row">
                        <div class="col-xs-3">                      
                          <a href="" class="like"> <i class="fa fa-star"></i> </a>
                        </div>
                        <div class="col-xs-6 text-center">                    
                          <h6> <?php echo $quantity; ?> of 75 left</h6>
                        </div>
                        <div class="col-xs-3 text-right">                   
                          <a href="" class="share" data-target="#share" data-toggle="modal"> <i class="fa fa-share-alt"></i> </a>
                        </div>

                        <div class="col-xs-12 text-center"> 
                          <a href="" class="btn btn-reward"> Get Reward </a>
                          <h3 class="pledge"> <i class="fa fa-inr"></i> <span><?php echo $cost; ?></span> </h3>

                        </div>

                        <!-- We have sent data with URL: i.e. in anchor tag:
                        <a href="page_to_redirect/$var1=$_GET[data1],$var2=$_GET[data2]"></a>
                        
                        So data will go throgh URL, We will catch in the target page through $_GET[] command -->


                      </div>

                    </div>

					 </div><!--  reward end-->
					</div>
				 </div><!--  col end-->
			
               
				<div class=" col-md-4">
					<div class="Shippin_adres">
						<h3>Shipping Address: </h3>
						<h4 class="adress">7524, Arakashan road, Paharganj, </br>New Delhi - 110055, IN </h4>
						<h6 class="landmark"> <span>Landmark:</span> Opposite Yuvraj Hotel </h6>
						<h6 class="mt-10"> 
							<a href="" data-target="#change_addresss" data-toggle="modal"> Change delivery address </a> 
						</h6>
						<h5>Reward survey</h5>
						<input type="submit" class="btn btn-primary" value="Confirm Order" />
					</div> 					
				</div> 	 <!--  col end-->
 		 
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
 
 
 

@include('includes.footer');
