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
            <li><a class="treeview-item" href="#newproposal" data-toggle = "modal"><i class="icon fa fa-circle-o"></i> Proposal</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Document</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="donors.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Partners & Donors</span></a></li>
        <li><a class="app-menu__item" href="page-calendar.html"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Calendar</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">External Communications</span></a></li>
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
      <center><p class="semibold-text mb-2" style="color: green;">
      <?php 
      if (!empty($_SESSION['message'])) {
              echo $_SESSION['message'];
            }else{ echo " ";} 
            
            $_SESSION['message'] = ""; ?>
      </p> </center> <br>
 
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Progress</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Complete Projects</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div> 
          </div>
        </div>
      </div>

      <div class="modal fade" id="newproposal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Donor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action ="php/AddDonor.php">

              <div class="form-group">
                <label class="control-label">Organization</label>
                <input type="text" name="organization" class="form-control" required="">
              </div>

              <div class="form-group">
                <label class="control-label">Physical Address</label>
                <textarea class="form-control" required="" name="Address">
                  
                </textarea>
              </div>

                <div class="form-group">
                  <label class="control-label">Contact Person</label>
                  <input type="text" name="contact" class="form-control" placeholder="Full name" required="">
                </div>

              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label class="control-label">Specilization</label>
                <input type="text" name="specilization" class="form-control">
              </div>

              <div class="form-group">
                <label class="control-label">Regions</label>
                <input type="text" name="regions" class="form-control">
              </div>

            <div class="form-group">
              <div class="row">
                  <div class="col-md-4">
                    <label class="control-label">Donor donated Before</label>
                  </div>

                  <div class="col-md-4">
                    <label class="control-label">Yes</label>
                    <input type="radio" name="donated" value="Yes" onclick="more()">
                  </div>

                  <div class="col-md-4">
                    <label class="control-label">No</label>
                    <input type="radio" name="donated" value="No" onclick="Less()">
                  </div>
              </div>
            </div>

            <div style="display: none;" id="1">
              <label class="control-label">Projects Donoted by Donor</label>
              <div class="row">
                <div class="col-md-9">
                  <label class="control-label">Project</label>
                    <input type="text" name="1" class="form-control"><br>
                    <input type="text" name="2" class="form-control"><br>
                    <input type="text" name="3" class="form-control"><br>
                    <input type="text" name="4" class="form-control"><br>
                    <input type="text" name="5" class="form-control"><br>
                </div>
                <div class="col-md-3">
                  <label class="control-label">Total Amount Donoted</label>
                  <input type="text" name="6" class="form-control"><br>
                  <input type="text" name="7" class="form-control"><br>
                  <input type="text" name="8" class="form-control"><br>
                  <input type="text" name="9" class="form-control"><br>
                  <input type="text" name="10" class="form-control"><br>
                </div>
              </div>
            </div>


              <div class="form-group">
                <label class="control-label">Global Disbursement</label>
                <input type="text" name="globaldisbursement" class="form-control">
              </div>

            <div class="modal-footer">
              <button class="btn btn-success" type="submit">Save Changes</button>
            </div>

            </form>

          </div>
        </div>
      </div>
      <!-- modal -->

      <div class="modal fade" id="sendproposal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Proposal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
              <form method = "POST" action = "BusinessDevelopment.php" enctype='multipart/form-data'>
              <div class="form-group">
                <?php if(empty($id))
                    {
                      echo "<label class= 'control-label'>"."Project ID"."</label>".
                      "<input type ='text' name ='title' class = 'form-control' required = '' >";
                    }else{
                      echo "<label class= 'control-label'>"."Project ID"."</label>".
                      "<input type ='text' name = 'title' class = 'form-control' value = $id readonly = ''>";
                    }
                 ?>

              </div>

              <div class="form-group">
                <label class ="control-label">Attachments</label>
                <input type = "file" class = "form-control" name = "file"><br>
                <label class = "control-label">Description</label>
                <input type = "text" class = "form-control" name = "file_description">
              </div>
          
            <div class="modal-footer">
              <button class="btn btn-success">Save Changes</button>
            </div>

            </form>

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
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>