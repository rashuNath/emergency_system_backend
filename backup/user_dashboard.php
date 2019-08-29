<?php
include_once ('views/includes/head.php');
include_once ('vendor/autoload.php');
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
                  Alexander Pierce - Admin
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left:0">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <a href="javascript:;" class="small-box bg-aqua">
            <div class="inner">
              <h3 class="text-center">50 <sup>+</sup></h3>

              <p class="text-center">Emergency Hospital Service</p>
            </div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <a href="javascript:;" class="small-box bg-green">
            <div class="inner">
              <h3 class="text-center">53<sup style="font-size: 20px">+</sup></h3>

              <p class="text-center">Emergency Police Station Service</p>
            </div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <a href="javascript:;" class="small-box bg-yellow">
            <div class="inner">
              <h3 class="text-center">44 <sup>+</sup></h3>

              <p class="text-center">Emergency Fire Station Service</p>
            </div>
          </a>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

        <div class="box">
            <div class="box-body">
                <form action="backup/hospital_emergency.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Your Latitude:</label>
                                <input type="text" name="latitude" class="form-control latitude">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Your Longitude</label>
                                <input type="text" name="longitude" class="form-control longitude">
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="searchHospital" class="btn btn-primary" value="Search Hospital">
                                <input type="submit" name="searchPolice" class="btn btn-warning" value="Search Police Station">
                                <input type="submit" name="searchFire" class="btn btn-danger" value="Search Fire Station">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once ('views/includes/foot.php');
?>

<script>
    var myLatitude = $('.latitude');
    var myLongitude = $('.longitude');

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
