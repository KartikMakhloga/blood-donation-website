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
													<a href="">Donars Details</a>
												</li>
																																											
																						
																						                                       </ol>
                                </div>
                                <h4 class="page-title">View Donars Details</h4>

                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end Breadcump Row col-->
					
					<!-- Trial and Membership Alert -->
                    
																		<!-- <div class="alert alert-warning">
							   <b>You Are Currenly Using Trial Account ! <a href="https://invead.io/membership/extend" class="btn btn-gradient-primary btn-sm">Upgrade Now</a></b>
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


	<div class="card-body">
	    <table class="table table-bordered table-striped">
			<tbody><tr><td>Donor Name </td><td><?php  echo $donor_details[0]->name; ?></td></tr>
			<tr><td>Email	</td><td><?php  echo $donor_details[0]->email; ?></td></tr>
			<tr><td>Campus	</td><td><?php  echo $donor_details[0]->campus; ?></td></tr>
			<tr><td>Gender	</td><td><?php  echo $donor_details[0]->gender; ?></td></tr>
			<tr><td>Phone Number	</td><td><?php  echo $donor_details[0]->phone_number; ?></td></tr>
			<tr><td>Blood Group</td><td><?php  echo $donor_details[0]->blood_group; ?></td></tr>
			<tr><td>Appointment Date</td><td><?php  echo $donor_details[0]->appointment_date; ?></td></tr>
			<tr><td>Appointment Time</td><td><?php  echo $donor_details[0]->time; ?></td></tr>
			<tr><td>Status</td><td style="color:green;">Approved</td></tr>
			
	    </tbody></table>
	</div>
  </div>
 </div>
</div>
					
										
					<audio id="chatSound">
					  <source src="https://invead.io/public/sounds/messenger.mp3" type="audio/mpeg" autoplay="true">
					</audio>

                </div><!-- container -->

                
            </div>
            <!-- end page content -->
        </div>

