<?php
include_once ('includes/head.php');
include_once ('../vendor/autoload.php');

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
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>List of treatment receiver</span>
          </a>
        </li>
        <li class="active">
          <a href="add_details_hospital.php">
            <i class="fa fa-plus"></i> <span>Add Details</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">4</small>
            </span>
          </a>
        </li>

        <li>
          <a href="#">
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
        Add Details
        <!--<small>Acc</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="#" method="post">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Organization Name:</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Bed Number</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Free Bed Number</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Total ICU</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Free ICU Number</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label>Location</label>
                    <div class="row">
                      <div class="col-md-12 gllpLatlonPicker">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Latitude</label>
                              <input type="text" class="gllpLatitude form-control" value="">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Longitude</label>
                              <input type="text" class="gllpLongitude form-control" value="">
                            </div>
                          </div>
                          <div class="clearfix"></div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="gllpSearchField form-control">
                                <div class="input-group-addon" style="padding:0">
                                  <input type="button" class="gllpSearchButton btn btn-success" value="search" style="border-radius:0;line-height: 33px;padding-top:0;padding-bottom:0;border:0">
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="col-md-2">

                          </div>
                        </div>



                          <div class="gllpMap">Google Maps</div>

                          <input type="hidden" class="gllpZoom" value="16"/>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once ('includes/foot.php');
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
