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
																																										
																						
																						
															<!-- 								<li class="breadcrumb-item">
													<a href="https://invead.io/profile">Profile</a>
												</li>
															 -->																												
																						
																						
																							<li class="breadcrumb-item active">
													Change Password
												</li>
																					                                    </ol>
                                </div>
                                <h4 class="page-title"></h4>

                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end Breadcump Row col-->
                    			<?php if($this->session->flashdata('success')): ?>
 <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-success" style="text-align:center;"><?php echo $this->session->flashdata('success');?></div>
        </div>
      </div>
  
<?php endif; ?>
	  <?php if($this->session->flashdata('error')): ?>
 <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-danger" style="text-align:center;"><?php echo $this->session->flashdata('error');?></div>
        </div>
      </div>
  
<?php endif; ?>
 <?php if($this->session->flashdata('password')): ?>
 <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-danger" style="text-align:center;"><?php echo $this->session->flashdata('password');?></div>
        </div>
      </div>
  
<?php endif; ?>
 <?php if($this->session->flashdata('oldpassword')): ?>
 <div class="box-header">
        <div class="col-lg-12">
           <div class="alert alert-danger" style="text-align:center;"><?php echo $this->session->flashdata('oldpassword');?></div>
        </div>
      </div>
  
<?php endif; ?>
					
					<!-- Trial and Membership Alert -->
                    
																		
												
																<!-- End Trial and Membership Alert -->
					
					<div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
						<h4>Change Password</h4>
					</div>
                    <div class="container">
					<div class="row">
	<div class="col-md-12">
		<div class="card">
		
			<div class="card-body">
				<div class="row">
		
					<div class="col-md-6">
						<form action="<?php echo MAINSITE.'update_password'; ?>" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
							<input type="hidden" name="_token" value="Cg4IYZyMr3LEpQ8zsrVkR6fcskfk2zVWUtsa19fQ">							
							<div class="form-group">
								<label class="control-label">Old Password</label>
								<input type="password" class="form-control" name="oldpassword" required>
							</div>
							<div class="form-group">
								<label class="control-label">New Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div class="form-group">
								<label class="control-label">Confirm Password</label>
								<input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-gradient-primary" style="background:#a5c422;">Update Password</button>
							</div>
						</form>
					</div>
                </div>				
			</div>
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
        <!-- end page-wrapper -->
        