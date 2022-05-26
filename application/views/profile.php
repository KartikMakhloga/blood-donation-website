<div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
																																										
																						
																						
																							<li class="breadcrumb-item">
													<a href="">Profile</a>
												</li>
																																											
																						
																						                                       </ol>
                                </div>
                                <h4 class="page-title"></h4>

                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end Breadcump Row col-->
					
					<!-- Trial and Membership Alert -->
                    
																		<!-- <div class="alert alert-warning">
							   <b>You Are Currenly Using Trial Account !&emsp;<a href="https://invead.io/membership/extend" class="btn btn-gradient-primary btn-sm">Upgrade Now</a></b>
							</div> -->
												
																<!-- End Trial and Membership Alert -->
					
					<div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
						<button type="button" id="close_alert" class="close">
							<span aria-hidden="true"><i class="mdi mdi-close"></i></span>
						</button>
						<span class="msg"></span>
					</div>
                    
					<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="d-none panel-title">View Profile</div>
		
			<div class="card-body  met-pro-bg" style="background: cornflowerblue;">
				<div class="met-profile">
					<div class="row">
						<div class="col-lg-4 align-self-center mb-3 mb-lg-0">
							<div class="met-profile-main">
								<div class="met-profile-main-pic">
									<!-- <img src="<?php echo MAINSITE . 'images/profile.jpg' ?>" style="    width: 120px;border-radius: 50%;" alt="" class="thumb-contact rounded-circle"> -->
								</div>
								<div class="met-profile_user-detail">
									<!-- <h5 class="met-user-name" style="margin-left: 15px;"><?php echo $user_details[0]->name; ?></h5>                                                         -->
								
								</div>
							</div>                                                
						</div><!--end col-->
					<!--end col-->
					</div><!--end row-->
				</div><!--end f_profile-->                                                                                
			</div><!--end card-body-->
			
			<div class="card-body">
			  <ul class="nav nav-pills mb-0">
				  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general-info" aria-expanded="true"><i class="far fa-user"></i> General</a></li>
				  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#invoices" aria-expanded="false"><i class="fas fa-file-invoice-dollar"></i> Donors Detail</a></li>
				  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#quotations" aria-expanded="false"><i class="fas fa-file-invoice"></i> Need Blood Details</a></li>
				
				  <!-- <li class="nav-item"><a class="nav-link" href=""><i class="far fa-edit"></i> Edit</a></li> -->
			  </ul>
			</div><!--end card-body-->
		</div><!--end card-->
	</div><!--end col-->
</div><!--end row-->
    	
<div class="row">	  
	<div class="col-12">	  
	  <div class="tab-content" id="crm-tab">
	
	      <div id="general-info" class="tab-pane active">
			  <div class="card">
				  <div class="card-body">
					<table class="table table-striped">
						<thead>
						    <th colspan="2"><h5>General Information</h5></th>
						</thead>
						<tbody>
						
							<tr><td> Name</td><td><b><?php echo $user_details[0]->name; ?></b></td></tr>
							<tr><td>Email</td><td><b><?php echo $user_details[0]->email; ?></b></td></tr>
							<tr><td>DOB</td><td><b><?php echo $user_details[0]->dob; ?></b></td></tr>
							<tr><td>Campus</td><td><b><?php echo $user_details[0]->campus; ?></b></td></tr>
							<tr><td>Gender</td><td><b><?php echo $user_details[0]->gender; ?></b></td></tr>
							<tr><td>Phone Number</td><td><b><?php echo $user_details[0]->phone_number; ?></b></td></tr>
							
						</tbody>
					</table>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div id="invoices" class="tab-pane fade">
		      			  <div class="card">
				    <div class="card-body">
                    <table class="table table-striped">
						<thead>
						    <th colspan="2"><h5>Donor Information</h5></th>
						</thead>
                        <?php if($donor_details > 0 && !empty($donor_details)){?>
						<tbody>
						
							<tr><td> Blood Group</td><td><b><?php echo $donor_details[0]->blood_group; ?></b></td></tr>
							<tr><td>Last Donation Date</td><td><b><?php echo $donor_details[0]->last_donation_date; ?></b></td></tr>
							<tr><td>Appointment Date</td><td><b><?php echo $donor_details[0]->appointment_date; ?></b></td></tr>
							<tr><td>Time</td><td><b><?php echo $donor_details[0]->time; ?></b></td></tr>
							<tr><td>Registered Date</td><td><b><?php echo $donor_details[0]->created_at; ?></b></td></tr>
                            <tr><td>Status</td><td><b>Approved</b></td></tr>
					
							
						</tbody>
                        <?php  }
                        else{?>
                    <h3>No Record Found</h3>
                        <?php }?>
					</table>
				    </div>
			    </div>
		  </div>
		  
		  <div id="quotations" class="tab-pane fade">
		      			  <div class="card">
				    <div class="card-body">
                    <table class="table table-bordered data-table">
						<thead>
						  <tr>
                          <th>S. no.</th>
							<th>Blood Group</th>
							<th>Campus</th>
							<th class="">Blood Unit</th>
                            <th class="">Request date</th>
						  </tr>
						</thead>
						<tbody>
							<?php if(is_array($need_blood_details) || is_object($need_blood_details)){ 
                                                    foreach($need_blood_details as $row){
                                                 
                                                        $id=$row->id;
                                                        $blood_group=$row->blood_group;
                                                        $Campus=$row->Campus;
                                                        $blood_unit=$row->blood_unit;
                                                        $date=$row->created_at;
                                                       
                                                        
                                            ?>
                                             <tr>
                                            	
                                            	 
                                            	 <td><?php echo $id;?></td>
                                            	 <td><?php echo $blood_group;?></td>
                                                 <td><?php echo $Campus;?></td>
                                                 <td><?php echo $blood_unit;?></td>
                                                 <td><?php echo $date;?></td>
                                            	 
                                            	 
                                            </tr>

                                            <?php }?>
                                            <?php }else{?>
                                            <tr><td colspan="7" class="cl_content_last">No  Record Found..</td></tr>
                                            <?php }?>
						  
						</tbody>
					  </table>
				    </div>
			    </div>
		  </div>
		  
		 
		  
		
 
	  </div> <!--End TAB-->
	</div><!--End Col-->
</div><!--End Row-->
					
										
					<audio id="chatSound">
					  <source src="https://invead.io/public/sounds/messenger.mp3" type="audio/mpeg" autoplay="true">
					</audio>

                </div><!-- container -->

                
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>