<?php 
session_start();
 if (empty($_SESSION['Department']) OR $_SESSION['Department'] !== 'BUSINESS DEVELOPMENT')
 {
  //  echo $_SESSION['Department'];
   header('location: page-login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GENESIS V0.01</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico">

    <script type = "text/javascript">
    function more(){
      document.getElementById('1').style.display = 'contents';
    }
    function Less(){
      document.getElementById('1').style.display = 'none';
    }
    function toggle(source) {
      checkboxes = document.getElementsByName('foo')

      for (var i = 0, n= checkboxes.length;i < n;i ++)
      {
        checkboxes[i].checked = source.checked;
      }
      
    }
      
    </script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">GENESIS</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="php/page-logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['Name']." ".$_SESSION['Surname']; ?></p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['Department']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="BusinessDevelopment.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">New</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#" data-toggle="modal"><i class="icon fa fa-circle-o"></i> Partner</a></li>
            <li><a class="treeview-item" href="#newproposal" data-toggle = "modal"><i class="icon fa fa-circle-o"></i> Donor</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Document</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="donors.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Partners & Donors</span></a></li>
        <li><a class="app-menu__item" href="page-calendar.php"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Calendar</span></a></li>
        <li><a class="app-menu__item" href="mail.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">External Communications</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-book"></i></i><span class="app-menu__label">Knowledge and Learning</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Analytics</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>GENESIS</h1>
          <p>Quantum Analytica</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Donors</h4></h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Pending Projects</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Completed Projects</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Reports</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <center><p class="semibold-text mb-2" style="color: green;">
      <?php 
      if (!empty($_SESSION['message'])) {
              echo $_SESSION['message'];
            }else{ echo " ";} 
            
            $_SESSION['message'] = ""; ?>
      </p> </center> <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <center>
                <h1>Search Recipient</h1>
              </center><br>
              <form method="POST" action="mail.php">
              <div class="row">
                <div class="col-md-10">
                  <input type="text" name="search" class="form-control" required="">
                </div>
                <div class="col-md-2">
                  <button class="btn btn-info" type="submit">Search</button>
                </div>
              </div><br><br>
              </form>
              

              <?php
              require 'dbh/dbh.php';

                  // $to = "somebody@example.com";
                  // $subject = "My subject";
                  // $txt = "Hello world!";
                  // $headers = "From: webmaster@example.com" . "\r\n" .
                  // "CC: somebodyelse@example.com";

                  // mail($to,$subject,$txt,$headers);

              if (isset($_POST['search']))
              {
                $search = $_POST['search'];

                $sql = "SELECT Organization,Email,Contact FROM donors WHERE 
                          contact like '$search' OR
                          Organization like '$search' OR
                          Specilization like '$search' OR
                          Email like '$search'";
                $result = mysqli_query($Conn,$sql);
                $confirm = mysqli_num_rows($result);

                if ($confirm >0 ) {
                echo "<table class= 'table'>
                        <thead>
                          <tr>
                            <th>Organization</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>Tick to Email</th>
                          </tr>
                        </thead>
                        <tbody>";
                while ($row = mysqli_fetch_assoc($result))
                        {
                          echo "<tr>".
                                    "<td>".$row['Organization']."</td>".
                                    "<td>".$row['Contact']."</td>".
                                    "<td>".$row['Email']."</td>".
                                    "<td>"."<input type= 'checkbox'>"."</td>".
                                "</tr>";
                        }
                        echo "</tbody>"."<table>";
                }
              }else{

              $sql = "SELECT Organization,Email,Contact FROM donors";
              $result = mysqli_query($Conn,$sql);
              $confirm = mysqli_num_rows($result);

              if ($confirm > 0)
              {
                echo "<table class= 'table'>
                        <thead>
                          <tr>
                            <th>Organization</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>Tick to Email</th>
                          </tr>
                        </thead>
                        <tbody>";
                        while ($row = mysqli_fetch_assoc($result))
                        {
                          echo "<tr>".
                                    "<td>".$row['Organization']."</td>".
                                    "<td>".$row['Contact']."</td>".
                                    "<td>".$row['Email']."</td>".
                                    "<td>"."<input type= 'checkbox' name = 'foo'>"."</td>".
                                "</tr>";
                        }
                  echo "</tbody></table>";

                }
              }
              ?>
              <center>
                <input type="checkbox" onclick="toggle(this);" />Check all?
                <button type="submit" class="btn btn-info">Send Email</button>
              </center>
              
            </div>     
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
  </body>
</html>