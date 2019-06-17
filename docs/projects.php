<?php 
session_start();
//  if (empty($_SESSION['Department']) OR $_SESSION['Department'] !== 'BUSINESS DEVELOPMENT')
//  {
//   //  echo $_SESSION['Department'];
//    header('location: page-login.php');
//  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GENESIS V0.01</title>
    <!-- Main CSS-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <script type = "text/javascript">
    function more(){
      document.getElementById('1').style.display = 'contents';
      document.getElementById('2').style.display = 'none';
    }
    function Less(){
      document.getElementById('1').style.display = 'none';
      document.getElementById('2').style.display = 'contents';
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
            <li><a class="treeview-item" href="#newproject" data-toggle="modal"><i class="icon fa fa-circle-o"></i> Partner</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Proposal</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Projects</span></a></li>
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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Project Title</th>
                    <th>Description</th>
                    <th>Nature</th>
                    <th>Status</th>
                    <th>Files</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    require 'dbh/dbh.php';
                    
                    $sql = "SELECT REF_NUM,Project_id,Title,Description,Type FROM projects";
                    $result = mysqli_query($Conn,$sql);
                    $confirm = mysqli_num_rows($result);

                    if($confirm > 0 )
                    {
        
                      while($row = mysqli_fetch_assoc($result))
                      {
                        $title = $row['Title'];
                        $Description = $row['Description'];
                        $Type = $row['Type'];
                        $Project_id = $row['Project_id'];
                        $REF = $row['REF_NUM'];
                        $path = "";
                        $FDescription = "";

                        $sql1 = "SELECT File_name,File_path,File_Description FROM project_files WHERE Project_id = $Project_id";
                        $result1 = mysqli_query($Conn,$sql1);
                        $confirm1 = mysqli_num_rows($result1);

                        if($confirm1 > 0)
                        {
                          while($row1 = mysqli_fetch_assoc($result1))
                          {
                            $path = $row1['File_path'];
                            $FDescription = $row1['File_Description'];
                            $name = $row1['File_name'];
                          }
                        }
                        echo 
                        "<tr>".
                              "<td>".$REF."</td>".
                              "<td>".$title."</td>".
                              "<td>".$Description."</td>".
                              "<td>".$Type."</td>".
                              "<td>"."<i>"."PENDING.."."</i>"."</td>".
                              "<td>"."<a href = '$path'>".$FDescription."</a>"."</td>".
                        "</tr>";

                      }
                    }

                  ?>
                </tbody>
              </table>
            </div>
           </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Features</h3>
            <ul>
              <li>Built with Bootstrap 4, SASS and PUG.js</li>
              <li>Fully responsive and modular code</li>
              <li>Seven pages including login, user profile and print friendly invoice page</li>
              <li>Smart integration of forgot password on login page</li>
              <li>Chart.js integration to display responsive charts</li>
              <li>Widgets to effectively display statistics</li>
              <li>Data tables with sort, search and paginate functionality</li>
              <li>Custom form elements like toggle buttons, auto-complete, tags and date-picker</li>
              <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
            </ul>
            <p>Vali is a free and responsive admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.</p>
            <p>Vali is is light-weight, expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme colors and functionality.</p>
            <p class="mt-4 mb-4"><a class="btn btn-primary mr-2 mb-2" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success mr-2 mb-2" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Compatibility with frameworks</h3>
            <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
            <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
            <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
          </div>
        </div>
      </div> -->

      <div class="modal fade" id="newproject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Project</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
              <form method = "POST" action = "php/addproject.php" enctype='multipart/form-data'>
              <div class="form-group">
                <label class= "control-label">Project Title</label>
                <input type ="text" name ="title" class ="form-control" required = ''>
              </div>

              <div class="form-group">
                <label class = "control-label">Project Description</label>
                <textarea class = "form-control" name = "description" required = "">

                </textarea>
              </div>

              <div class="form-group">
                <label class= "control-label">Type of Project</label>
                <select name= "type" class= "form-control">
                  <option>Agriculture Project</option>
                  <option>Energy Project</option>
                </select>
              </div>

              <div class="form-group">
                <label class ="control-label">Attachments</label>
                <input type = "file" class = "form-control" name = "file"><br>
                <label class = "control-label">Description</label>
                <input type = "text" class = "form-control" name = "file_description">
              </div>

              <div class="form-group">
                <label class = "control-label"><b>Resources</b></label>
                <div class="row">
                  <div class="col-md-9">
                    <label class = "control-label">Resource</label>
                    <input type = "text" class = "form-control">
                  </div>
                  <div class="col-md-3">
                    <label class = "control-label">Estimated Cost</label>
                    <input type = "text" class = "form-control">
                  </div>
                </div><br>
                
                <div id = '1' style = "display: none;">
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-9">
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                  </div>
                  <div class="col-md-3">
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                    <input type = "text" class = "form-control"><br>
                  </div>
                  </div>
                  <button class = "btn btn-info" style = "float: right;" onclick = "Less()">Less</button><br>
                </div>
                </div>
                
                <button id = '2' class = "btn btn-info" style = "float: right;" onclick = "more()">More</button><br>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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
  </body>
</html>