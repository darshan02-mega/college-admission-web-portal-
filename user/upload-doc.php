<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid'] == 0)) {
  header('location:logout.php');
} else {

  if (isset($_POST['submit'])) {
    $uid = $_SESSION['uid'];
    $tenmarksheet = $_FILES["hscimage"]["name"];
    $twlevemaksheet = $_FILES["sscimage"]["name"];
    $seatallotmentletter = $_FILES["seatallocimage"]["name"];
    $jeerankcard = $_FILES["jeerankimage"]["name"];
    $photoidproof = $_FILES["photoidimage"]["name"];
    $proofdob = $_FILES["proofdobimage"]["name"];
    $incomecertificate = $_FILES["incomecertificateimage"]["name"];
    $aadharcard = $_FILES["aadharcardimage"]["name"];
    $castecer = $_FILES["castecerimage"]["name"];
    $castevalid = $_FILES["castevalidimage"]["name"];
    $obccer = $_FILES["obccerimage"]["name"];
    $disability = $_FILES["disabilityimage"]["name"];
    $transfercer = $_FILES["transfercerimage"]["name"];
    $migrationcer = $_FILES["migrationcerimage"]["name"];
    $gapcer = $_FILES["gapcerimage"]["name"];
    $extensiontm = substr($tenmarksheet, strlen($tenmarksheet) - 4, strlen($tenmarksheet));
    $extensiontwm = substr($twlevemaksheet, strlen($twlevemaksheet) - 4, strlen($twlevemaksheet));
    $extensionseatalloc = substr($seatallotmentletter, strlen($seatallotmentletter) - 4, strlen($seatallotmentletter));
    $extensionjeerank = substr($jeerankcard, strlen($jeerankcard) - 4, strlen($jeerankcard));
    $extensionphotoid = substr($photoidproof, strlen($photoidproof) - 4, strlen($photoidproof));
    $extensiondobproof = substr($proofdob, strlen($proofdob) - 4, strlen($proofdob));
    $extensionincomecer = substr($incomecertificate, strlen($incomecertificate) - 4, strlen($incomecertificate));
    $extensionaadhar = substr($aadharcard, strlen($aadharcard) - 4, strlen($aadharcard));
    $extensioncastecer = substr($castecer, strlen($castecer) - 4, strlen($castecer));
    $extensioncastevalid = substr($castevalid, strlen($castevalid) - 4, strlen($castevalid));
    $extensionobc = substr($obccer, strlen($obccer) - 4, strlen($obccer));
    $extensiondis = substr($disability, strlen($disability) - 4, strlen($disability));
    $extensiontransfer = substr($transfercer, strlen($transfercer) - 4, strlen($transfercer));
    $extensionmigration = substr($migrationcer, strlen($migrationcer) - 4, strlen($migrationcer));
    $extensiongap = substr($gapcer, strlen($gapcer) - 4, strlen($gapcer));

      //rename upload file
      $tm = md5($tenmarksheet) . $extensiontm;
      $twm = md5($twlevemaksheet) . $extensiontwm;
      $twm1 = md5($seatallotmentletter) . $extensionseatalloc;
      $twm2 = md5($jeerankcard) . $extensionjeerank;
      $twm3 = md5($photoidproof) . $extensionphotoid;
      $twm4 = md5($proofdob) . $extensiondobproof;
      $twm6 = md5($aadharcard) . $extensionaadhar;

      $twm11 = md5($transfercer) . $extensiontransfer;

      if ($incomecertifcate != "") {
        $twm5 = md5($incomecertificate) . $extensionincomecer;
      } else {
        $twm5 = "";
      }
      if ($castecer != "") {
        $twm7 = md5($castecer) . $extensioncastecer;
      } else {
        $twm7 = "";
      }

      if ($castevalid != "") {
        $twm8 = md5($castevalid) . $extensioncastevalid;
      } else {
        $twm8 = "";
      }
      if ($obccer != "") {
        $twm9 = md5($obccer) . $extensionobc;
      } else {
        $twm9 = "";
      }
      if ($disability != "") {
        $twm10 = md5($disability) . $extensiondisability;
      } else {
        $twm10 = "";
      }
      if ($migrationcer != "") {
        $twm12 = md5($migrationcer) . $extensionmigration;
      } else {
        $twm12 = "";
      }
      if ($gapcer != "") {
        $twm13 = md5($gapcer) . $extensiongap;
      } else {
        $twm13 = "";
      }

      move_uploaded_file($_FILES["hscimage"]["tmp_name"], "userdocs/" . $tm);
      move_uploaded_file($_FILES["sscimage"]["tmp_name"], "userdocs/" . $twm);
      move_uploaded_file($_FILES["seatallocimage"]["tmp_name"], "userdocs/" . $twm1);
      move_uploaded_file($_FILES["jeerankimage"]["tmp_name"], "userdocs/" . $twm2);
      move_uploaded_file($_FILES["photoidimage"]["tmp_name"], "userdocs/" . $twm3);
      move_uploaded_file($_FILES["proofdobimage"]["tmp_name"], "userdocs/" . $twm4);
      move_uploaded_file($_FILES["incomecertificateimage"]["tmp_name"], "userdocs/" . $twm5);
      move_uploaded_file($_FILES["aadharcardimage"]["tmp_name"], "userdocs/" . $twm6);
      move_uploaded_file($_FILES["castecerimage"]["tmp_name"], "userdocs/" . $twm7);
      move_uploaded_file($_FILES["castevalidimage"]["tmp_name"], "userdocs/" . $twm8);
      move_uploaded_file($_FILES["obccerimage"]["tmp_name"], "userdocs/" . $twm9);
      move_uploaded_file($_FILES["disabilityimage"]["tmp_name"], "userdocs/" . $twm10);
      move_uploaded_file($_FILES["transfercerimage"]["tmp_name"], "userdocs/" . $twm11);
      move_uploaded_file($_FILES["migrationcerimage"]["tmp_name"], "userdocs/" . $twm12);
      move_uploaded_file($_FILES["gapcerimage"]["tmp_name"], "userdocs/" . $twm13);
      //  move_uploaded_file($_FILES["graimage"]["tmp_name"],"userdocs/".$gra);
      //  move_uploaded_file($_FILES["pgraimage"]["tmp_name"],"userdocs/".$pgra);
      $query = mysqli_query($con, "insert into tbldocument(UserID,TenMarksheeet,TwelveMarksheet,SeatAllotmentLetter,JeeRankCard,PhotoId,Proofdob,IncomeCertificate,AadharCard,CasteCertificate,CasteValidity,OBCCertificate,PWDCertificate,TransferCertificate,MigrationCertificate,GapCertificate) value('$uid','$tm','$twm','$twm1','$twm2','$twm3','$twm4','$twm5','$twm6','$twm7','$twm8','$twm9','$twm10','$twm11','$twm12','$twm13')");
      if ($query) {

        echo '<script>alert("Data has been added successfully.")</script>';
        echo "<script>window.location.href ='upload-doc.php'</script>";
      } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
      }
  }
?>
  <!DOCTYPE html>
  <html class="loading" lang="en" data-textdirection="ltr">

  <head>

    <title>College Addmission Management System|| Upload Documents</title>
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
              Upload Documents
            </h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                  </li>

                  </li>
                  <li class="breadcrumb-item active">Documents
                  </li>

                </ol>
              </div>
            </div>
          </div>

        </div>
        <div class="content-body">
          <!-- Input Mask start -->

          <!-- Formatter start -->
          <?php
          $stuid = $_SESSION['uid'];
          $ret = mysqli_query($con, "select AdminStatus from  tbladmapplications join tbluser on tbluser.ID=tbladmapplications.UserID where tbluser.ID='$stuid' ");
          $num = mysqli_fetch_array($ret);
          $adstatus = $num['AdminStatus'];
          if ($num > 0 && $adstatus == '1') {

            $query = mysqli_query($con, "select * from tbldocument where  UserID=$stuid");
            $rw = mysqli_num_rows($query);
            if ($rw > 0) {
              while ($row = mysqli_fetch_array($query)) {
          ?>
                <p style="font-size:16px; color:red" align="center">Your document is already uploaded.</p>

                <table class="table mb-0">
                  <tr>
                    <th>10th Marksheet</th>
                    <td><a href="userdocs/<?php echo $row['TenMarksheeet']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>12th Marksheet</th>
                    <td><a href="userdocs/<?php echo $row['TwelveMarksheet']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Seat Allotment Letter</th>
                    <td><a href="userdocs/<?php echo $row['SeatAllotmentLetter']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Jee Rank Card</th>
                    <td><a href="userdocs/<?php echo $row['JeeRankCard']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Photo Id Proof</th>
                    <td><a href="userdocs/<?php echo $row['PhotoId']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Proof of Date of Birth</th>
                    <td><a href="userdocs/<?php echo $row['Proofdob']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Aadhar Card</th>
                    <td><a href="userdocs/<?php echo $row['AadharCard']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Transfer Certificate</th>
                    <td><a href="userdocs/<?php echo $row['TransferCertificate']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Income Certifiace(Applicable for EWS)</th>
                    <td>
                      <?php if ($row['IncomeCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['IncomeCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>

                  <tr>
                    <th>Caste Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['CasteCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['CasteCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>

                  <tr>
                    <th>Caste Validity(If Applicable)</th>
                    <td>
                      <?php if ($row['CasteValidity'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['CasteValidity']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>PWD Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['PWDCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['PWDCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Migration Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['MigrationCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['MigrationCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Gap Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['GapCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['GapCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Non-Creamy Layer Certificate(For OBC category)</th>
                    <td>
                      <?php if ($row['OBCCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="userdocs/<?php echo $row['OBCCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>


                </table>
              <?php }
            } else { ?>
              <form name="submit" method="post" enctype="multipart/form-data">
                <section class="formatter" id="formatter">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Upload Documents</h4>

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
                                  <h5>10th Marksheet</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="hscimage" name="hscimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>12th Mark Sheet </h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="sscimage" name="sscimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Seat Allotment Letter</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="seatallocimage" name="seatallocimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Jee Rank Card</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="jeerankimage" name="jeerankimage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Photo Id Proof</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="photoidimage" name="photoidimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Certificate for proof of date of birth</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="photodobmage" name="photodobmage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Income Certificate</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="incomecertificateimage" name="incomecertificateimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Aadhar Card</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="aadharcardimage" name="aadharcardimage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Caste Certificate(As applicable to Res Category )</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="castecerimage" name="castecerimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Caste Validity (if caste certificate issued by Maharashtra Govt.)</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="castevalidimage" name="castevalidimage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>OBC Certificate(If Applicable)</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="obccerimage" name="obccerimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>PWD Certicate(If Applicable)</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="disabilityimage" name="disabilityimage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Transfer Certificate</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="transfercerimage" name="transfercerimage" type="file" required>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="col-xl-6 col-lg-12">
                                <fieldset>
                                  <h5>Migration Certicate(If Applicable)</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="migrationcerimage" name="migrationcerimage" type="file">
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-12 col-lg-12">
                                <fieldset>
                                  <h5>Gap Certificate</h5>
                                  <div class="form-group">
                                    <input class="form-control white_bg" id="gapcerimage" name="gapcerimage" type="file" required>
                                  </div>
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
              <?php }
          } else if ($num > 0 && $adstatus == '') { ?>
              <p> Your application is pending with admin </p>
            <?php } else if ($num > 0 && $adstatus == '2') { ?>
              <p> Your application has been rejected by admin </p>
            <?php } else { ?>
              <p> First fill the application then upload docs. </p>
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