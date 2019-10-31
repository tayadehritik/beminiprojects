<?php
require 'phpAssignments/config/connect.php';
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/htmlcss3.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div style="background-image: url('images/bg_1.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        <div style="padding: 3%; padding-right: 5%; padding-left: 7%;">
            <div class="navdiv">
                <section>
                    <nav>
                        <ul type="none">
                            <li><a href="#"><b><span style="font-weight: bolder; font-size: 20px;">Jobpply</span></b></a></li>
                            <div class="topnavright">
                                <li><a class="" href="#"><span style="color: rgb(8, 115, 238)">Home</span></a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#candidates">Candidates</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <a class="post" href="#"> <button style="margin:5px;">Post a Job </button></a>
                                <a class="want" href="#"> <button style="margin:5px;">Want a Job </button></a>
                            </div>
                        </ul>
                    </nav>
                </section>
            </div>
            <p style="padding-top: 28%; padding-left: 6%;"><a href="#"><b>Home </b></a><span style="font-weight: 500;"> > Job Posts</span></p>
            <h1 style="padding-left: 6%;"><b>Apply Jobs</b></h1>
        </div>
    </div>
    <section>
        <div class="bg-light" style="padding-top: 5%; padding-left: 7%; padding-right: 7%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 ">
                        <form action="#" class="p-5">
                            <div style="padding-bottom: 6%;"><span style="color:gray">Recently Added Jobs</span>
                                <h3><span class="font-weight-bold">Hot Jobs</span></h3>
                            </div>
                            <?php $sqlquery = "SELECT * from jobs";
                            foreach ($pdo->query($sqlquery) as $row) { ?>
                                <div id="editanddelete_<?php echo $row['id']; ?>">
                                    <a href="" download="job.txt" id="download_<?php echo $row['id']; ?>"><i class="fa fa-download" id="down_but_<?php echo $row['id']; ?>" style="display:none;"></i></a>
                                    <span class="job"><?php echo $row['job_title']; ?></span><span class="category" style="background-color: #35b0ab;"><?php echo $row['job_type']; ?></span>
                                    <div class="applybuttons">
                                        <i class="btn btn-secondary rounded-circle"><i id="butt" class="heart fa fa-heart-o"></i></i>
                                        <a href="" class="applybutton">Apply Job</a>
                                    </div>
                                    <div class="companylocation">
                                        <div class="company">
                                            <i class="nytlogo fa fa-black-tie" style="padding-right: 5px; color: #3b5998;"></i><span><?php echo $row['company']; ?></span>
                                        </div>
                                        <div class="location">
                                            <i class="mapmark fa fa-map-marker" style="padding-left: 20px;padding-right: 5px; color: #fc5185;"></i><span style="color: gray;"><?php echo $row['location']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="list">
                <ul>
                    <!-- todo: limit entries to 10 on a single page. dynamically set no of pages.-->
                    <li><a href="#"><span class="other">&lt;</span></a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#"><span class="other">2</span></a></li>
                    <li><a href="#"><span class="other">3</span></a></li>
                    <li><a href="#"><span class="other">4</span></a></li>
                    <li><a href="#"><span class="other">5</span></a></li>
                    <li><a href="#"><span class="other">&gt;</span></a></li>
                </ul>
            </div>
        </div>
    </section>
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
    <?php $sqlquery = "SELECT * from jobs";
    foreach ($pdo->query($sqlquery) as $row) { ?>
        <div id="modal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 style="margin: 0 auto;">Job description</h2>
                </div>
                <div class="modal-body">
                    <?php echo $row['job_description']; ?>
                </div>
                <div class="modal-footer">
                    <span class="closebutton">Close</span>
                </div>
            </div>
        </div>
        <script>
            $('#editanddelete_<?php echo $row['id']; ?>').hover(
                function() {
                    $('#down_but_<?php echo $row['id']; ?>').show();
                },
                function() {
                    $('#down_but_<?php echo $row['id']; ?>').hide();
                });
        </script>
        <script>
            $('a#download_<?php echo $row['id']; ?>').click(
                function() {
                    var id = <?php echo $row['id']; ?>;
                    $.ajax({
                        type: "POST",
                        url: "phpAssignments/download.php",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            //todo: fix and correct the data to be downloaded.
                            alert(data);
                            this.href = "data:text/plain;charset=UTF-8," + encodeURIComponent(data);
                        }
                    });
                });
        </script>
    <?php } ?>
    <script src="javaassign/javascript1.js"></script>
    <script src="javaassign/javascript2.js"></script>
    <script src="javaassign/javascript3.js"></script>
</body>

</html>