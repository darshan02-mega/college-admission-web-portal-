<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid'] == 0)) {
  header('location:logout.php');
} else {

  // Coding for form Submission 	
  if (isset($_POST['submit'])) {
    $uid = $_SESSION['uid'];
    $name_hindi=$_POST['name_hindi'];
    $coursename = $_POST['coursename'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $coradd = $_POST['coradd'];
    $peradd = $_POST['peradd'];
    $secboard = $_POST['10thboard'];
    $secyop = $_POST['10thpyear'];
    $secper = $_POST['10thpercentage'];
    $secstream = $_POST['10thstream'];
    $ssecboard = $_POST['12thboard'];
    $ssecyop = $_POST['12thpyear'];
    $ssecper = $_POST['12thpercentage'];
    $ssecstream = $_POST['12thstream'];
    $dec = $_POST['declaration'];
    $sign = $_POST['signature'];
    $upic = $_FILES["userpic"]["name"];
    $aadhar = $_POST['aadhar'];
    $blood = $_POST['blood'];
    $minority= $_POST['minority'];
    $phy_dis= $_POST['phy_dis'];
    $jee_alloc_rou= $_POST['jee_alloc_rou'];
    $jee_alloc_roll= $_POST['jee_alloc_roll'];
    $jee_alloc_rank= $_POST['jee_alloc_rank'];
    $jee_alloc_mark= $_POST['jee_alloc_mark'];
    $jee_alloc_score= $_POST['jee_alloc_score'];
    $jee_alloc_year= $_POST['jee_alloc_year'];
    $jee_alloc_alloc_cat= $_POST['jee_alloc_alloc_cat'];
    $jee_alloc_can_cat= $_POST['jee_alloc_can_cat'];
    $josaa_pay_dd= $_POST['josaa_pay_dd'];
    $josaa_pay_date= $_POST['josaa_pay_date'];
    $josaa_pay_amt= $_POST['josaa_pay_amt'];
    $inst_rep_dd=$_POST['inst_rep_dd'];
    $inst_rep_date=$_POST['inst_rep_date'];
    $inst_rep_amt=$_POST['inst_rep_amt'];
    $total_amt_pay= $_POST['total_amt_pay'];
    $chronic_rep=$_POST['chronic_rep'];


    $extension = substr($upic, strlen($upic) - 4, strlen($upic));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
      echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
      // rename user pic
      $userpic = md5($upic) . $extension;
      move_uploaded_file($_FILES["userpic"]["tmp_name"], "userimages/" . $userpic);
      $query = mysqli_query($con, "insert into tbladmapplications(UserId,CourseApplied,FatherName,MotherName,DOB,Nationality,Gender,Category,CorrespondenceAdd,PermanentAdd,SecondaryBoard,SecondaryBoardyop,SecondaryBoardper,SecondaryBoardstream,SSecondaryBoard,
      SSecondaryBoardyop,SSecondaryBoardper,SSecondaryBoardstream,AadharNumber,MinorityStatus,PhysicalStatus,ChronicDischeck,
      roundallot,JeeRollno,JeeAllIndiaRank,JeeMark,JeeScore,JeeYear,AllotCategory,CandidateCategory,JosaaDDno,JosaaDatefix,JosaaAmtpay,InstiDDno,InstiDatefix,
      InstiAmtpay,TotalPay,NameHindi,Blood,Signature,UserPic) value('$uid','$coursename','$fathername','$mothername','$dob','$nationality','$gender','$category','$coradd','$peradd','$secboard','$secyop','$secper','$secstream','$ssecboard','$ssecyop',
      '$ssecper','$ssecstream','$aadhar','$minority','$phy_dis','$chronic_rep','$jee_alloc_rou','$jee_alloc_roll','$jee_alloc_rank','$jee_alloc_mark','$jee_alloc_score','$jee_alloc_year','$jee_alloc_alloc_cat','$jee_alloc_can_cat','$josaa_pay_dd','$josaa_pay_date','$josaa_pay_amt','$inst_rep_dd','$inst_rep_date','$inst_rep_amt','$total_amt_pay','$name_hindi','$blood','$sign','$userpic')");
      if ($query) {

        echo '<script>alert("Data has been added successfully.")</script>';
        echo "<script>window.location.href ='addmission-form.php'</script>";
      } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
        echo "<script>window.location.href ='addmission-form.php'</script>";
      }
    }
  }
?>
  <!DOCTYPE html>
  <html class="loading" lang="en" data-textdirection="ltr">

  <head>

    <title>College Addmission Management System|| Admission Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/extended/form-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
      .errorWrap {
        padding: 10px;
        margin: 20px 0 0px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      }

      .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      }
    </style>
  </head>

  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <?php include('includes/header.php'); ?>
    <?php include('includes/leftbar.php'); ?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">
              Admission Application Form
            </h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                  </li>

                  </li>
                  <li class="breadcrumb-item active">Application
                  </li>
                </ol>
              </div>
            </div>
          </div>

        </div>
        <div class="content-body">
          <?php
          $stuid = $_SESSION['uid'];
          $query = mysqli_query($con, "select * from tbladmapplications where  UserId=$stuid");
          $rw = mysqli_num_rows($query);
          if ($rw > 0) {
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <p style="font-size:16px; color:red" align="center">Your Addmission Form already submitted.</p>
              <table class="table mb-0">
                <tr>
                  <th>Course Applied</th>
                  <td><?php echo $row['CourseApplied']; ?></td>
                </tr>
                <tr>
                  <th>Name in Hindi</th>
                  <td><?php echo $row['NameHindi']; ?></td>
                </tr>
                <tr>
                  <th>Student Pic</th>
                  <td><img src="userimages/<?php echo $row['UserPic']; ?>" width="200" height="150"></td>
                </tr>
                <tr>
                  <th>Father's Name</th>
                  <td><?php echo $row['FatherName']; ?></td>
                </tr>
                <tr>
                  <th>Mother's Name</th>
                  <td><?php echo $row['MotherName']; ?></td>
                </tr>
                <tr>
                  <th>DOB</th>
                  <td><?php echo $row['DOB']; ?></td>
                </tr>
                <tr>
                  <th>Aadhar Number</th>
                  <td><?php echo $row['AadharNumber']; ?></td>
                </tr>
                <tr>
                  <th>Minority Status</th>
                  <td><?php echo $row['MinorityStatus']; ?></td>
                </tr>
                <tr>
                  <th>Phyiscal Status?</th>
                  <td><?php echo $row['PhysicalStatus']; ?></td>
                </tr>
                <tr>
                  <th>Nationality</th>
                  <td><?php echo $row['Nationality']; ?></td>
                </tr>
                <tr>
                  <th>Gender</th>
                  <td><?php echo $row['Gender']; ?></td>
                </tr>
                <tr>
                  <th>Blood</th>
                  <td><?php echo $row['Blood']; ?></td>
                </tr>
                <tr>
                  <th>Category</th>
                  <td><?php echo $row['Category']; ?></td>
                </tr>
                <tr>
                  <th>Correspondence Address</th>
                  <td><?php echo $row['CorrespondenceAdd']; ?></td>
                </tr>
                <tr>
                  <th>Permanent Address</th>
                  <td><?php echo $row['PermanentAdd']; ?></td>
                </tr>
                <tr>
                  <th>If you suffering from Chronic Disease? If yes, Specify</th>
                  <td><?php echo $row['ChronicDischeck']; ?></td>
                </tr>
              </table>
              <table class="table mb-0">
                <tr>
                  <th>#</th>
                  <th>Board / University</th>
                  <th>Year</th>
                  <th>Percentage</th>
                  <th>Stream</th>
                </tr>
                <th>10th(Secondary)</th>
                <td><?php echo $row['SecondaryBoard']; ?></td>
                <td><?php echo $row['SecondaryBoardyop']; ?></td>
                <td><?php echo $row['SecondaryBoardper']; ?></td>
                <td><?php echo $row['SecondaryBoardstream']; ?></td>
                </tr>
                <tr>
                  <th>12th(Senior Secondary)</th>
                  <td><?php echo $row['SSecondaryBoard']; ?></td>
                  <td><?php echo $row['SSecondaryBoardyop']; ?></td>
                  <td><?php echo $row['SSecondaryBoardper']; ?></td>
                  <td><?php echo $row['SSecondaryBoardstream']; ?></td>
                </tr>
              <table class="table mb-0">
                <tr>
                  <th>Round of Allotment</th>
                  <td><?php echo $row['roundallot']; ?></td>
                </tr>
                <tr>
                  <th>Jee Roll No</th>
                  <td><?php echo $row['JeeRollno']; ?></td>
                </tr>
                
                <tr>
                  <th>Jee All India Rank</th>
                  <td><?php echo $row['JeeAllIndiaRank']; ?></td>
                </tr>
                <tr>
                  <th>Jee Mark</th>
                  <td><?php echo $row['JeeAllIndiaRank']; ?></td>
                </tr>
                
                <tr>
                  <th>Jee Score</th>
                  <td><?php echo $row['JeeScore']; ?></td>
                </tr>
                
                <tr>
                  <th>Jee Year</th>
                  <td><?php echo $row['JeeYear']; ?></td>
                </tr>
                
                <tr>
                  <th>Allotment Category</th>
                  <td><?php echo $row['AllotCategory']; ?></td>
                </tr>
                
                <tr>
                  <th>Candidate Category</th>
                  <td><?php echo $row['CandidateCatergory']; ?></td>
                </tr>
                <table class="table mb-0">
                <tr>
                  <th>Sr.no.</th>
                  <th>Detail</th>
                  <th>DD/ECS No.</th>
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
                <th>Josaa 2020 conselling</th>
                <td><?php echo $row['JosaaDDno']; ?></td>
                <td><?php echo $row['JosaaDatefix']; ?></td>
                <td><?php echo $row['JosaaAmtpay']; ?></td>
                </tr>
                <tr>
                  <th>At Institute Reporting for Admission</th>
                  <td><?php echo $row['InstiDDno']; ?></td>
                  <td><?php echo $row['InstiDatefix']; ?></td>
                  <td><?php echo $row['InstiAmtpay']; ?></td>
                </tr>
                <th> total Amount</th>
                <td><?php echo $row['TotalPay']; ?></td>
              </table>
              <table class="table mb-0">
                <tr>
                  <th>Admin Remark</th>
                  <td><?php echo $row['AdminRemark']; ?></td>
                </tr>
                <tr>
                  <th>Admin Status</th>
                  <td><?php
                      if ($row['AdminStatus'] == "") {
                        echo "admin remark is pending";
                      }

                      if ($row['AdminStatus'] == "1") {
                        echo "Selected";
                      }

                      if ($row['AdminStatus'] == "2") {
                        echo "Rejected";
                      }
                      ?></td>
                </tr>
                <tr>
                  <th>Admin Remark Date</th>
                  <td><?php echo $row['AdminRemarkDate']; ?></td>
                </tr>
                <tr>
                  <th colspan="2">
                    <font color="red">Declaration : </font>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.<br />
                    (<?php echo $row['Signature']; ?>)
                  </th>
                </tr>
              </table>
              <br>
              <?php

              if ($row['AdminStatus'] == "") {
              ?>
                <p style="text-align: center;font-size: 20px;"><a href="edit-appform.php?editid=<?php echo $row['ID']; ?>">Edit Details</a></p>
            <?php }
            }
          } else { ?>
            <form name="submit" method="post" enctype="multipart/form-data">
              <section class="formatter" id="formatter">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Addimission Form</h4>

                        <div class="heading-elements">
                          <ul class="list-inline mb-0">

                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                          </ul>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-body">


                          <div class="row">
                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Course Applied </h5>
                                <div class="form-group">
                                  <select name='coursename' id="coursename" class="form-control white_bg" required="true">
                                    <option value="">Course Applied</option>
                                    <?php $query = mysqli_query($con, "select * from tblcourse");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                      <option value="<?php echo $row['CourseName']; ?>"><?php echo $row['CourseName']; ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </fieldset>

                            </div>

                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Student Pic </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="userpic" name="userpic" type="file" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <fieldset>
                                <h5>Full Name in Hindi </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="name_hindi" name="name_hindi" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Father's Name </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="fathername" name="fathername" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Mother's Name </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="mothername" name="mothername" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-4 col-lg-12">
                              <fieldset>
                                <h5>DOB </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="dob" name="dob" type="text" required>
                                  <small class="text-muted">DOB Must be in this format (YYYY-MM-DD)</small>
                                </div>

                              </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-12">
                              <fieldset>
                                <h5>Nationality </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="nationality" name="nationality" type="text" required>
                                </div>

                              </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-12">
                              <fieldset>
                                <h5>Gender </h5>
                                <div class="form-group">

                                  <select class="form-control white_bg" id="gender" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Transgender">Transgender</option>
                                  </select>
                                </div>
                              </fieldset>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Aadhar Number</h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="aadhar" name="aadhar" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                              <fieldset>
                                <h5>Blood Group</h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="blood" name="blood" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <h5>Category : </h5>

                              <select class="form-control white_bg" id="category" name="category" required>
                                <option value="">Select Category</option>
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC/ST">SC/ST</option>
                                <option value="SC/ST">Other</option>
                                </select>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-xl-6 col-lg-12">
                              <h5>Minority Details : </h5>

                              <select class="form-control white_bg" id="minority" name="minority" required>
                                <option value="">Select Category</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Jain">Jain</option>
                                <option value="Sikh">Sikh</option>
                                <option value="Christian">Christian</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                              <h5>Are you physically disabled? : </h5>

                              <select class="form-control white_bg" id="phy_dis" name="phy_dis" required>
                                <option value="">Select Category</option>
                                <option value="Yes_dis">Yes</option>
                                <option value="No_dis">No</option>
                                </select>
                            </div>
                          </div>
                          <br>
                          <div class="row" style="margin-top:1%">
                            <div class="col-xl-12 col-lg-12">
                              <fieldset>
                                <h5>Correspondence Address </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="coradd" name="coradd" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <fieldset>
                                <h5>Permanent Address </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="peradd" name="peradd" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 2%">
                            <div class="col-xl-12 col-lg-12">
                              <h4 class="card-title">Jee Details</h4>
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-6 col-lg-12">
                            <fieldset>
                                <h5>Round of Allotment </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_rou" name="jee_alloc_rou" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                            <fieldset>
                                <h5>Jee Roll No </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_roll" name="jee_alloc_roll" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                            <fieldset>
                                <h5>Jee All India Rank </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_rank" name="jee_alloc_rank" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                            <fieldset>
                                <h5>Jee Mark </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_mark" name="jee_alloc_mark" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                            <fieldset>
                                <h5>Jee Score </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_score" name="jee_alloc_score" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                            <fieldset>
                                <h5>Jee Year </h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_year" name="jee_alloc_year" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                            <fieldset>
                                <h5>Allotment Category</h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_alloc_cat" name="jee_alloc_alloc_cat" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                            <fieldset>
                                <h5>Candidate Category</h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="jee_alloc_can_cat" name="jee_alloc_can_cat" type="text" required>
                                </div>
                            </fieldset>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 2%">
                            <div class="col-xl-12 col-lg-12">
                              <h4 class="card-title">Fees Details</h4>
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <table class="table mb-0">
                                <tr>
                                  <th>Details</th>
                                  <th>DD/ECS No.</th>
                                  <th>Date</th>
                                  <th>Amount</th>
                                </tr>
                                <tr>
                                  <th>Josaa 2020 counselling</th>
                                  <td> <input class="form-control white_bg" id="josaa_pay_dd" name="josaa_pay_dd" placeholder="DD/ECS No." type="text" required></td>
                                  <td> <input class="form-control white_bg" id="josaa_pay_date" name="josaa_pay_date" placeholder="Date" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="josaa_pay_amt" name="josaa_pay_amt" placeholder="Amount" type="text" required></td>
                                </tr>
                                <tr>
                                  <th>At Institute reporting for admission</th>
                                  <td> <input class="form-control white_bg" id="inst_rep_dd" name="inst_rep_dd" placeholder="DD/ECS No." type="text" required></td>
                                  <td> <input class="form-control white_bg" id="inst_rep_date" name="inst_rep_date" placeholder="Date" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="inst_rep_amt" name="inst_rep_amt" placeholder="Amount" type="text" required></td>
                                </tr>
                                <tr>
                                  <th>Total Amount</th>
                                  <td> <input class="form-control white_bg" id="total_amt_pay" name="total_amt_pay" placeholder="Amount" type="text" required></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          </hr>
                          <div class="row" style="margin-top: 2%">
                            <div class="col-xl-12 col-lg-12">
                              <h4 class="card-title"></h4>
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <table class="table mb-0">
                                <tr>
                                  <th>#</th>
                                  <th>Board / University</th>
                                  <th>Year</th>
                                  <th>Percentage</th>
                                  <th>Stream</th>
                                </tr>
                                <tr>
                                  <th>10th(Secondary)</th>
                                  <td> <input class="form-control white_bg" id="10thboard" name="10thboard" placeholder="Board / University" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="10thpyeaer" name="10thpyear" placeholder="Year" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="10thpercentage" name="10thpercentage" placeholder="Percentage" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="10thstream" name="10thstream" placeholder="Stream" type="text" required></td>
                                </tr>
                                <tr>
                                  <th>12th(Senior Secondary)</th>
                                  <td> <input class="form-control white_bg" id="12thboard" name="12thboard" placeholder="Board / University" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="12thboard" name="12thpyear" placeholder="Year" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="12thpercentage" name="12thpercentage" placeholder="Percentage" type="text" required></td>
                                  <td> <input class="form-control white_bg" id="12thstream" name="12thstream" placeholder="Stream" type="text" required></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          </hr>
                          <hr>
                          <br>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <fieldset>
                                <h5>Whether suffering from any chronic disease? if Yes, Please Specify</h5>
                                <div class="form-group">
                                  <input class="form-control white_bg" id="chronic_rep" name="chronic_rep" type="text" required>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 2%">

                            <div class="col-xl-12 col-lg-12">
                              <h4 class="card-title"><b>Declartion</b></h4>
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12 col-lg-12">
                              <h5><b>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.</b></h5>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-4 col-lg-12">
                              <fieldset>
                                <input class="form-control white_bg" id="signature" name="signature" placeholder="Signature" type="text">
                              </fieldset>
                            </div>
                          </div>
                          <div class="row" style="margin-top: 2%">
                            <div class="col-xl-6 col-lg-12">
                              <button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            <?php } ?>
            <!-- Formatter end -->
            </form>
        </div>
      </div>
    </div>

    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/typeahead/handlebars.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/formatter/formatter.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/extended/card/jquery.card.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/extended/form-typeahead.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/extended/form-inputmask.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/extended/form-formatter.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/extended/form-maxlength.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/extended/form-card.js" type="text/javascript"></script>
  </body>

  </html>
<?php  } ?>