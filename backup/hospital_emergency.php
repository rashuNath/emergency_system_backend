<?php
include_once ('views/includes/head.php');
include_once ('vendor/autoload.php');
use App\DataManipulation\DataManipulation;

$dataManipulation = new DataManipulation();

if(isset($_POST['searchHospital'])){

    $userLatitude = $_POST['latitude'];
    $userLongitude = $_POST['longitude'];

    $sortedHospital = $dataManipulation->viewAllHospital($userLatitude,$userLongitude);
//    sort($distanceArray);
//    echo "<pre>";
//    var_dump($sortedHospital);
//    echo "</pre>";


}
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <!--<ul class="dropdown-menu">-->
              <!--<li class="header">You have 4 messages</li>-->
              <!--<li>-->
                <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                <!--<ul class="menu">-->
                  <!--<li>&lt;!&ndash; start message &ndash;&gt;-->
                    <!--<a href="#">-->
                      <!--<div class="pull-left">-->
                        <!--<img src="contents/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                      <!--</div>-->
                      <!--<h4>-->
                        <!--Support Team-->
                        <!--<small><i class="fa fa-clock-o"></i> 5 mins</small>-->
                      <!--</h4>-->
                      <!--<p>Why not buy a new awesome theme?</p>-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--&lt;!&ndash; end message &ndash;&gt;-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<div class="pull-left">-->
                        <!--<img src="contents/img/user3-128x128.jpg" class="img-circle" alt="User Image">-->
                      <!--</div>-->
                      <!--<h4>-->
                        <!--AdminLTE Design Team-->
                        <!--<small><i class="fa fa-clock-o"></i> 2 hours</small>-->
                      <!--</h4>-->
                      <!--<p>Why not buy a new awesome theme?</p>-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<div class="pull-left">-->
                        <!--<img src="contents/img/user4-128x128.jpg" class="img-circle" alt="User Image">-->
                      <!--</div>-->
                      <!--<h4>-->
                        <!--Developers-->
                        <!--<small><i class="fa fa-clock-o"></i> Today</small>-->
                      <!--</h4>-->
                      <!--<p>Why not buy a new awesome theme?</p>-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<div class="pull-left">-->
                        <!--<img src="contents/img/user3-128x128.jpg" class="img-circle" alt="User Image">-->
                      <!--</div>-->
                      <!--<h4>-->
                        <!--Sales Department-->
                        <!--<small><i class="fa fa-clock-o"></i> Yesterday</small>-->
                      <!--</h4>-->
                      <!--<p>Why not buy a new awesome theme?</p>-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<div class="pull-left">-->
                        <!--<img src="contents/img/user4-128x128.jpg" class="img-circle" alt="User Image">-->
                      <!--</div>-->
                      <!--<h4>-->
                        <!--Reviewers-->
                        <!--<small><i class="fa fa-clock-o"></i> 2 days</small>-->
                      <!--</h4>-->
                      <!--<p>Why not buy a new awesome theme?</p>-->
                    <!--</a>-->
                  <!--</li>-->
                <!--</ul>-->
              <!--</li>-->
              <!--<li class="footer"><a href="#">See All Messages</a></li>-->
            <!--</ul>-->
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <!--<ul class="dropdown-menu">-->
              <!--<li class="header">You have 10 notifications</li>-->
              <!--<li>-->
                <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                <!--<ul class="menu">-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<i class="fa fa-users text-aqua"></i> 5 new members joined today-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the-->
                      <!--page and may cause design problems-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<i class="fa fa-users text-red"></i> 5 new members joined-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<i class="fa fa-shopping-cart text-green"></i> 25 sales made-->
                    <!--</a>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<a href="#">-->
                      <!--<i class="fa fa-user text-red"></i> You changed your username-->
                    <!--</a>-->
                  <!--</li>-->
                <!--</ul>-->
              <!--</li>-->
              <!--<li class="footer"><a href="#">View all</a></li>-->
            <!--</ul>-->
          </li>
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="user_dashboard.html">
            <i class="fa fa-dashboard"></i> <span>User Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-superpowers"></i>
            <span>Emergency Police Station</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-fire"></i> <span>Emergency Fire Station </span>
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
        Emergency Hospital
        <!--<small>Acc</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Emergency Hospital</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">

        <form class="form-group" method="post" action="#">
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="search by name...">
            </div>
          </div>

          <div class="col-md-2">
            <button type="submit" class="btn btn-primary" style="width:100%;">Search</button>
          </div>
        </form>


        <div class="col-xs-12">

            <div>
                My location:
            </div>

            <?php
            if($sortedHospital !=FALSE){
                foreach ($sortedHospital as $hospital){
                    $hospitalName = $hospital->hospital_name;
                    $location = $hospital->address;
                    $freeBed = $hospital->empty_bed;
                    $freeIcu = $hospital->empty_icu;
                    $distance = $hospital->distance;
                    ?>
                    <div class="box">
                        <div class="box-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="left-flex">
                                    <h4><?php echo $hospitalName ?></h4>
                                    <h5><span><strong>Location:</strong></span> <?php echo $location ?></h5>
                                    <p>
                                    <?php
                                        if($freeBed==0){
                                            ?>
                                            <del><span><strong>Free Bed</strong></span>: <?php echo $freeBed ?></del>
                                            <?php
                                        }else{
                                            ?>
                                            <span><strong>Free Bed</strong></span>: <?php echo $freeBed ?>
                                            <?php
                                        }
                                    ?>

                                        <?php
                                        if($freeIcu==0){
                                            ?>
                                            <del><span><strong>Free ICU</strong></span>: <?php echo $freeIcu ?></del>
                                            <?php
                                        }else{
                                            ?>
                                            <span><strong>Free ICU</strong></span>: <?php echo $freeIcu ?>
                                            <?php
                                        }
                                        ?>
                                    </p>

                                    <h4><strong>It's <?php echo round($distance,1)?> Km. away from your location.</strong></h4>

                                </div>
                                <div class="right-flex">
<!--                                    <button class="btn btn-default">Send Request</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
            <?php
                }
            }
            ?>

        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
include_once ('views/includes/foot.php');
?>