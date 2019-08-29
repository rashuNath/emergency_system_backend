<?php
include_once ('views/includes/head.php');
include_once ('vendor/autoload.php');

use App\DataManipulation\DataManipulation;
use App\Utility\Utility;
use App\Message\Message;

$dataManipulation = new DataManipulation();
$hospitalLists = $dataManipulation->viewAllHospitalByUser(2);

?>

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ES</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Emergency </b>Services</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="contents/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="contents/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Moderator
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="hospital_list.php">
            <i class="fa fa-files-o"></i>
            <span>Organization List</span>
          </a>
        </li>
        <li class="active">
          <a href="hospital_add_details.php">
            <i class="fa fa-plus"></i> <span>Add Details</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">4</small>
            </span>
          </a>
        </li>

        <li>
          <a href="hospital_update_details.php">
            <i class="fa fa-edit"></i> <span>Update Details</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">4</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hospital List
        <!--<small>Acc</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Hospital List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <?php
        foreach ($hospitalLists as $hospitalList){
            ?>
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="left-flex">
                            <h4><?php echo $hospitalList->hospital_name;?></h4>
                            <h5><span>Location:</span><?php echo $hospitalList->address;?></h5>
                            <p><strong>Free Bed:</strong> <?php echo $hospitalList->empty_bed;?>;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Free ICU:</strong><?php echo $hospitalList->empty_icu;?>; &nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                        <div class="right-flex">
                            <a href="hospital_update_details.php?hospital_id=<?php echo $hospitalList->id; ?>" class="btn btn-default">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once ('views/includes/foot.php');
?>

<script>
    var myLatitude = $('.gllpLatitude');
    var myLongitude = $('.gllpLongitude');

    if("geolocation" in navigator){
        console.log('geolocation found');
        navigator.geolocation.getCurrentPosition(function(position) {
            console.log(position.coords.latitude);
            console.log(position.coords.longitude);
            console.log(position.coords.accuracy);
            var lat = position.coords.latitude;
            var long = position.coords.longitude;

            myLatitude.val(lat);
            myLongitude.val(long);

        });
    }

</script>
