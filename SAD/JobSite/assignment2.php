<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  error_reporting(0);
  if (isset($_POST['submit'])) {
    $salary = $_POST['salary'];
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $job_type = $_POST['job_type'];
    $location = $_POST['location'];
    $job_description = $_POST['job_description'];
    $company_profile = $_POST['company_profile'];
    include 'phpAssignments/validator.php';
    $flag = validate($job_title, $company_name, $location, $job_description, $salary, $job_type);
    if ($flag == 1) {
      $emptyError = "<script type=\"text/javascript\">document.getElementById(\"showerr\").style.display = \"block\";</script>";
    } else if ($flag == 2) {
      $emptyError = "<script type=\"text/javascript\">document.getElementById(\"showerr1\").style.display = \"block\";</script>";
    } else {
      include 'phpAssignments/postJob.php';
      abc($salary, $job_title, $company_name, $job_type);
    }
  }
  ?>
  <div id="showerr" class="showerror">
    <div class="showerror-body">
      Please Enter valid information and make sure to keep the length of entered data is more than 3 characters.
      <?php echo $emptyError; ?>
      <span class="showerror-dismiss" id="dismiss">Dismiss</span>
    </div>
  </div>
  <div id="showerr1" class="jobtitleerror">
    <div class="jobtitleerror-body">
      Job Title field should not contain any number or special characters like +,-,*,/,etc.
      <?php echo $emptyError; ?>
      <span class="jbtitleerr-dismiss" id="dismiss1">Dismiss</span>
    </div>
  </div>
  <div id="submitsuccess" class="success">
    <div class="success-body">
      Submit Success!
      <span class="success_dismiss" id="dismiss2">Ok</span>
    </div>
  </div>
  <div style="background-image: url('images/bg_1.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
    <div style="padding: 3%; padding-right: 5%; padding-left: 7%;">
      <div class="navdiv">
        <section>
          <nav>
            <ul type="none">
              <li><a href="#"><b><span style="font-weight: bolder; font-size: 20px;">Jobpply</span></b></a></li>
              <div class="topnavright">
                <li><a class="" href="assignment1.php"><span style="color: rgb(8, 115, 238)">Home</span></a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#candidates">Candidates</a></li>
                <li><a href="#blog">Blog</a></li>
                <a class="post" href="assignment2.php"> <button style="margin:5px;">Post a Job </button></a>
                <a class="want" href="#"> <button style="margin:5px;">Want a Job </button></a>
              </div>
            </ul>
          </nav>
        </section>
      </div>
      <p style="padding-top: 28%; padding-left: 6%;"><a href="#"><span class="font-weight-bold">Home</span></a> <span style="font-weight: 500;"> > New Job Post</span></p>
      <h1 style="padding-left: 6%;"><b>Post A Job</b></h1>
    </div>
  </div>
  <div class="bg-light" style="padding-top: 5%; padding-left: 10%; padding-right: 10%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <form class="p-5 bg-white" id="form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row form-group">
              <div class="col-md-12 ">
                <label for="option-price-1">
                  <input type="checkbox"> <span class="text-success">$500</span> For 30 days
                </label>
              </div>
              <div class="col-md-12 ">
                <label for="option-price-2">
                  <input type="checkbox"> <span class="text-success">$300</span> / Monthly Recurring
                </label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 font-weight-bold">
                <h5>Job Title </h5>
              </div>
              <div class="col-md-12 ">
                <input type="text" name="job_title" value="<?php if (isset($_POST['job_title'])) {
                                                              echo $_POST['job_title'];
                                                            } ?>" onKeyPress="hidecursor()" id="hidecursor1" class="form-control" placeholder="eg. Professional UI/UX Designer">
              </div>
            </div>
            <div class="row form-group ">
              <div class="col-md-12 font-weight-bold">
                <h5>Company</h5>
              </div>
              <div class="col-md-12 ">
                <input type="text" name="company_name" value="<?php echo $_POST['company_name']; ?>" onKeyPress="hidecursor()" id="hidecursor2" class="form-control" placeholder="eg. Facebook, Inc.">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 font-weight-bold">
                <h4>Job Type</h4>
              </div>
              <div class="col-md-12 ">
                <input type="radio" id="job-type-1" name="job-type"> Full Time
              </div>
              <div class="col-md-12 ">
                <input type="radio" id="job-type-2" name="job-type"> Part Time
              </div>
              <div class="col-md-12 ">
                <input type="radio" id="job-type-3" name="job-type" class="hidecompprofile"> Freelance
              </div>
              <div class="col-md-12 ">
                <input type="radio" id="job-type-4" name="job-type" class="hidecompprofile"> Internship
              </div>
              <div class="col-md-12 ">
                <input type="radio" id="job-type-5" name="job-type" class="hidecompprofile"> Temporary
              </div>
            </div>
            <div class="row form-group mb-4">
              <div class="col-md-12 font-weight-bold">
                <h4>Location</h4>
              </div>
              <div class="col-md-12 ">
                <input type="text" name="location" value="<?php if (isset($_POST['location'])) {
                                                            echo $_POST['location'];
                                                          } ?>" onKeyPress="hidecursor()" id="hidecursor3" class="form-control" placeholder="Western City, UK">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 font-weight-bold">
                <h4>Job Description</h4>
              </div>
              <div class="col-md-12 ">
                <textarea name="" onKeyPress="hidecursor()" id="hidecursor4" class="form-control" id="" cols="30" rows="5"><?php if (isset($_POST['job_description'])) {
                                                                                                                              echo $_POST['job_description'];
                                                                                                                            } ?></textarea>
              </div>
            </div>
            <div class="row form-group" id="companyprofile">
              <div class="col-md-12 font-weight-bold">
                <h4>Company Profile</h4>
              </div>
              <div class="col-md-12 ">
                <textarea name="" onKeyPress="hidecursor()" id="hidecursor5" class="form-control" id="" cols="30" rows="5"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <input type="button" value="Post" class="btn btn-primary  py-2 px-5" onclick="return(validate(event))" style="background: rgb(8, 115, 238); border-color: transparent;">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p style="font-weight: 500;">Address</p>
            <p>203 St. Mountain View, San Francisco, California, USA</p>
            <p style="font-weight: 500;">Phone</p>
            <p><span style="color: rgb(8, 115, 238)">+1 232 3235 324</span></p>
            <p style="font-weight: 500;">Email Address</p>
            <p><span style="color: rgb(8, 115, 238)">jopify@jobs.com</span></p>
          </div>
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>To get access to any information contact us via e-mail or phone no.</p>
            <p><a href="#" class="btn btn-primary  py-2 px-4" style="background: rgb(8, 115, 238); border-color: transparent;">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section-parallax" style="background: rgb(8, 115, 238); color: white">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate" style="padding-top: 7%; padding-bottom: 3%;">
            <h2>Subcribe For Latest Updates!</h2>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-8">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input id="hidecursor6" type="text" onKeyPress="hidecursor()" class="form-control" placeholder="Enter E-mail Address">
                    <input type="submit" value="Subscribe" class="btn btn-primary px-3" style="background: rgb(255, 0, 0); border-color: transparent;">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="javaassign/javascript1.js"></script>
  <script src="javaassign/javascript2.js"></script>
  <script src="javaassign/javascript3.js"></script>
</body>

</html>