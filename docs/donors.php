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
      
    </script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">GENESIS</a>
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
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Analytics</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu"> <i class="fas fa-chart-line"></i>
            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li> -->
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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                 <thead>
                  <tr>
                    <th>Organization</th>
                    <th>Physical Address</th>
                    <th>Email</th>
                    <th>Specilization</th>
                    <th>Region</th>
                    <th>Donated</th>
                    <th>Global Disbursement</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                      require 'dbh/dbh.php';

                      $sql = "SELECT Organization,Physical_Address,Email,Specilization,Donoted,Disbursement,Region FROM Donors";
                      $result = mysqli_query($Conn,$sql);
                      $confirm = mysqli_num_rows($result);

                      if($confirm > 0)
                      {
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo 
                          "<tr>".
                                "<td>".$row['Organization']."</td>".
                                "<td>".$row['Physical_Address']."</td>".
                                "<td>".$row['Email']."</td>".
                                "<td>".$row['Specilization']."</td>".
                                "<td>".$row['Region']."</td>".
                                "<td>".$row['Donoted']."</td>".
                                "<td>".$row['Disbursement']."</td>".
                          "</tr>";

                        }

                      }else{
                        echo "Error".$sql. "<br>" . $Conn->error;
                      }
                  ?>
                </tbody>
              </table> 
              <center>
                <button type="submit" class="btn btn-info">Email</button>
              </center>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal  for adding lecturers -->
       <div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 700px;">
                <div class="modal-header">
                  <h4>New Staff</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  
                </div>
                <div class="modal-body">
                  <form  onsubmit="return validate()" method="POST" action="php/addstaff.php">
        <div class="form-group"> <!-- Full Name -->
          <label for="full_name_id" class="control-label">First Name</label>
          <input type="text" class="form-control" id="full_name_id" name="name" placeholder="John" required="">
        </div>  

        <div class="form-group"> <!-- Street 1 -->
          <label for="street1_id" class="control-label">Surname</label>
          <input type="text" class="form-control" id="street1_id" name="surname" placeholder="deere" required="">
        </div>          
                    
        <div class="form-group"> <!-- Street 2 -->
          <label for="street2_id" class="control-label">Staff id</label>
          <input type="text" class="form-control" id="street2_id" name="staff_id" placeholder="....." required="">
        </div>  
        <label class="control-label">Department</label>
        <select class="form-control" name="Department">
          <option>FINANCE</option>
          <option>IT</option>
          <option>ADMINSTRATION</option>
          <option>BUSINESS DEVELOPMENT</option>
          <option>MONITORING AND EVALUATION</option>
          <option>PROJECT MANAGER</option>
          <option>SUPPORT</option>
        </select>
  

        <div class="form-group"> <!-- City-->
          <label for="city_id" class="control-label">Email address</label><p id="2"></p>
          <input type="text" class="form-control" id="email_id1" name="email" placeholder="me@example.com" required="">
        </div>

        <div class="form-group"> <!-- City-->
          <label for="city_id" class="control-label">Phone number</label>
          <input type="text" class="form-control" id="phone_id1" name="phone" placeholder="+263 770 000 000" required="">
        </div>
        <div class="form-group">
          <label class = "control-label">Physical Address</label>
          <textarea class= "form-control" name = "address">
          </textarea>
        </div>
          <label class="control-label">Gender</label>
                    <select class="form-control" name="Gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <br>

        <div class="form-group">
          <label for="city_id" class="control-label">Position</label>
          <input type="text" class="form-control" name="role">
          </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-success" type="submit">Save changes</button>
                </div>

              </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal -->
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>