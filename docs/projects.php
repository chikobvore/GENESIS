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
    function image1(){
      var elems1 = document.getElementsByClassName('video');
      var elems2 = document.getElementsByClassName('documents');
      var elems3 = document.getElementsByClassName('image');
      for(var i = 0;i<elems1.length;i++)
      {
        elems1[i].style.display = 'none';
      }
      for(var i = 0;i<elems2.length;i++)
      {
        elems2[i].style.display = 'none';
      }
      for(var i = 0;i<elems3.length;i++)
      {
        elems3[i].style.display = 'contents';
      }
    }

    function video1()
    {
      var elems1 = document.getElementsByClassName('image');
      var elems2 = document.getElementsByClassName('documents');
      var elems3 = document.getElementsByClassName('video');
      for(var i = 0;i<elems1.length;i++)
      {
        elems1[i].style.display = 'none';
      }
      for(var i = 0;i<elems2.length;i++)
      {
        elems2[i].style.display = 'none';
      }
      for(var i = 0;i<elems3.length;i++)
      {
        elems3[i].style.display = 'contents';
      }
    }

    function docs1(){
      var elems1 = document.getElementsByClassName('video');
      var elems2 = document.getElementsByClassName('image');
      var elems3 = document.getElementsByClassName('documents');
      for(var i = 0;i<elems1.length;i++)
      {
        elems1[i].style.display = 'none';
      }
      for(var i = 0;i<elems2.length;i++)
      {
        elems2[i].style.display = 'none';
      }
      for(var i = 0;i<elems3.length;i++)
      {
        elems3[i].style.display = 'contents';
      }
    }
      
    </script>
    <style>
      .image{
        display : contents;
      }
    </style>
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
        <li><a class="app-menu__item" href="projects.php"><i class="app-menu__icon fa fa-book"></i></i><span class="app-menu__label">Knowledge and Learning</span></a></li>
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
      <!-- <div class="row">
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
                <tbody> -->
                <?php
                    // require 'dbh/dbh.php';
                    
                    // $sql = "SELECT REF_NUM,Project_id,Title,Description,Type FROM projects";
                    // $result = mysqli_query($Conn,$sql);
                    // $confirm = mysqli_num_rows($result);

                    // if($confirm > 0 )
                    // {
        
                    //   while($row = mysqli_fetch_assoc($result))
                    //   {
                    //     $title = $row['Title'];
                    //     $Description = $row['Description'];
                    //     $Type = $row['Type'];
                    //     $Project_id = $row['Project_id'];
                    //     $REF = $row['REF_NUM'];
                    //     $path = "";
                    //     $FDescription = "";

                    //     $sql1 = "SELECT File_name,File_path,File_Description FROM project_files WHERE Project_id = $Project_id";
                    //     $result1 = mysqli_query($Conn,$sql1);
                    //     $confirm1 = mysqli_num_rows($result1);

                    //     if($confirm1 > 0)
                    //     {
                    //       echo 
                    //       "<tr>".
                    //             "<td>".$REF."</td>".
                    //             "<td>".$title."</td>".
                    //             "<td>".$Description."</td>".
                    //             "<td>".$Type."</td>".
                    //             "<td>"."<i>"."PENDING.."."</i>"."</td>";
                          
                    //       echo "<td>";
                    //       while($row1 = mysqli_fetch_assoc($result1))
                    //       {
                    //         $path = $row1['File_path'];
                    //         $FDescription = $row1['File_Description'];
                    //         $name = $row1['File_name'];

                    //         echo "<a href = '$path'>".$FDescription."</a>"."<br>";
                    //       }
                    //       echo "</td>"."</tr>";
                    //     }else{
                    //       echo 
                    //       "<tr>".
                    //             "<td>".$REF."</td>".
                    //             "<td>".$title."</td>".
                    //             "<td>".$Description."</td>".
                    //             "<td>".$Type."</td>".
                    //             "<td>"."<i>"."PENDING.."."</i>"."</td>".
                    //             "<td>"."No Files Uploaded"."</td>". 
                    //       "</tr>";
                    //     }

                              
                        

                    //   }
                    // }

                  ?>
                <!-- </tbody>
              </table>
            </div>
           </div>
        </div>
      </div> -->

      <div class= "row">
          <div class= "col-md-12">
              <div class = "tile">
                  <div class = "tile-body">
                    <center>
                      <h2>Search</h2>                     
                    </center>
                    <form method = 'POST' action = 'projects.php'>
                    <div class="row">
                        <div class="col-md-10">
                            <input type = 'text' class = 'form-control' name = 'search' required = ''>
                        </div>
                        <div class="col-md-2">
                          <button type = 'submit' class = 'btn btn-info'>Search</button>
                        </div>
                    </div>
                    <?php
                    require 'dbh/dbh.php';
                      if (isset($_POST['search']))
                      {
                        $search = $_POST['search'];
                        $words = explode(" ",$search);
                        echo 
                              "<div class='footer1'><center>";           
                                echo "<button class='btn btn-default' type = 'button' style = 'margin: 20px;' onclick= 'image1()'>"."Images"."</button>";
                                echo "<button class='btn btn-default' type = 'button' style = 'margin: 20px;' onclick = 'video1()'>"."Videos"."</button>";
                                echo "<button class='btn btn-default' type = 'button' style = 'margin: 20px;' onclick= 'docs1()'>"."Documents"."</button>";
                          echo "</div></center>";
;
                        foreach ($words as $word)
                        {
                          $sql = "SELECT DISTINCT Title,Description,Type,File_path,File_description,File_name,File_Type FROM projects,project_files WHERE projects.Project_id = project_files.project_id AND 
                                  (file_description = '$word' OR Type = '$word' OR Title = '$word')";
                          $result = mysqli_query($Conn,$sql);
                          $confirm = mysqli_num_rows($result);
                          if($confirm > 0)
                          {
                            echo "<table class = 'table'>"."<thead>".
                                          "<tr>".
                                              "<th>"."Title"."</th>".
                                              "<th>"."Description"."</th>".
                                              "<th>"."Type"."</th>".
                                              "<th>"."File Name"."</th>".
                                          "</tr>"."</thead>"."<tbody>";
                            while ($row = mysqli_fetch_assoc($result))
                            {
                              $path = $row['File_path'];
                              $FDescription = $row['File_description'];
                              $name = $row['File_name'];
                              $File_Type = $row['File_Type'];

                              if($File_Type == 'png' OR $File_Type == 'jpg' OR $File_Type == 'jpeg')
                              {
                                $class = 'image';
                              }elseif($File_Type == 'pdf' OR $File_Type == 'ppt' OR $File_Type == 'docx')
                              {
                                $class = 'documents';
                              }elseif ($File_Type == 'mkv' OR $File_Type == 'ppt') {

                                $class = 'video';
                              }else{
                                $class = 'other';
                              }
                               
                               
                              echo "<tr class = '$class'>".
                                        "<td>".$row['Title']."</td>".
                                        "<td>".$row['Description']."</td>".
                                        "<td>".$row['Type']."</td>".
                                        "<td>"."<a href = '$path'>".$FDescription." "."</a>"."</td>".
                              "</tr>";     
                            }
                            echo "</tbody>"."</table>";
                          }
                        }
                      }

                    ?>
                    </form>
                  </div>
              </div>
          </div>
      </div>

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