<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
  header('location:logout.php');
} else {

?>
  <!DOCTYPE html>
  <html class="loading" lang="en" data-textdirection="ltr">

  <head>

    <title>College Addmission Management System</title>
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
          $studoc = $_GET['docid'];
          if ($studoc == "") { ?>
            <p style="font-size:16px; color:red" align="center">Student not uploaded file yet. </p>

            <?php  } else {

            $query = mysqli_query($con, "select * from tbldocument where  ID=$studoc");
            $rw = mysqli_num_rows($query);
            if ($rw > 0) {
              while ($row = mysqli_fetch_array($query)) {
            ?>


                <table class="table mb-0">

                  <tr>
                    <th>Transfer Certificate</th>
                    <td><a href="../user/userdocs/<?php echo $row['TransferCertificate']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>10th Marksheet</th>
                    <td><a href="../user/userdocs/<?php echo $row['TenMarksheeet']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>12th Marksheet</th>
                    <td><a href="../user/userdocs/<?php echo $row['TwelveMarksheet']; ?>" target="_blank">View File </a></td>
                  </tr>

                  <tr>
                    <th>Seat Allotment Letter</th>
                    <td><a href="../user/userdocs/<?php echo $row['SeatAllotmentLetter']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Jee Rank Card</th>
                    <td><a href="../user/userdocs/<?php echo $row['JeeRankCard']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Photo Id Proof</th>
                    <td><a href="../user/userdocs/<?php echo $row['PhotoId']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Proof of Date of Birth</th>
                    <td><a href="../user/userdocs/<?php echo $row['Proofdob']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Aadhar Card</th>
                    <td><a href="../user/userdocs/<?php echo $row['AadharCard']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Transfer Certificate</th>
                    <td><a href="../user/userdocs/<?php echo $row['TransferCertificate']; ?>" target="_blank">View File </a></td>
                  </tr>
                  <tr>
                    <th>Income Certifiace(Applicable for EWS)</th>
                    <td>
                      <?php if ($row['IncomeCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['IncomeCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>

                  <tr>
                    <th>Caste Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['CasteCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['CasteCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>

                  <tr>
                    <th>Caste Validity(If Applicable)</th>
                    <td>
                      <?php if ($row['CasteValidity'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['CasteValidity']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>PWD Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['PWDCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['PWDCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Migration Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['MigrationCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['MigrationCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Gap Certificate(If Applicable)</th>
                    <td>
                      <?php if ($row['GapCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['GapCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Non-Creamy Layer Certificate(For OBC category)</th>
                    <td>
                      <?php if ($row['OBCCertificate'] == "") { ?>
                        NA
                      <?php } else { ?>
                        <a href="../user/userdocs/<?php echo $row['OBCCertificate']; ?>" target="_blank">View File </a>
                      <?php } ?>
                    </td>
                  </tr>


                </table>





          <?php }
            }
          }  ?>





        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
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