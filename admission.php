<?php require('inc/header.php'); ?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Admission Form</h1>
				</div>
            </div>
        </div>
        <!-- contact area -->
         <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
                        <div class="col-xl-12 col-md-12 mb-4" style="padding-left:20px;">
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Your Last Name" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Address</label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Date of Birth</label>
                                        <input type="date" name="dob" id="dob" class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Contact</label>
                                        <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter Your Contact Number" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="@gamil.com" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Gender</label><br>
                                    <input type="radio" name="male"/> Male <br>  
                                        <input type="radio" name="female"/> Female <br>  
                                        <input type="radio" name="other"/> Other  
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="">Course</label><br>
                                            <select>  
                                                
                                                <option value="education">Education</option>  
                                                <option value="technology">Technology</option>  
                                                <option value="electronic">Electronic</option>  
                                                <option value="modern">Modern</option>  
                                                <option value="development">Development</option>   
                                            </select>  
                                    </div>
                                </div>
                                <div class="row">
                                    <input name="submit" id="" class="btn btn-primary ml-3" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
						
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Content END-->
<?php require('inc/footer.php'); ?>