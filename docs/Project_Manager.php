<?php
  require 'dbh/dbh.php'; 
  session_start();
 if ($_SESSION['Department'] !== 'PROJECT MANAGER')
 {
  header('location: page-login.php');
 } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GENESIS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Main CSS-->
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
    function moresubs()
    {
      document.getElementById('3').style.display = 'contents';
    }
    function moresubs1()
    {
      document.getElementById('4').style.display = 'contents';
    }
    function moresubs2()
    {
      document.getElementById('5').style.display = 'contents';
    }
    function lessubs()
    {
       document.getElementById('3').style.display = 'none';
    }
    function lessubs1()
    {
       document.getElementById('4').style.display = 'none';
    }
    function lessubs2()
    {
       document.getElementById('5').style.display = 'none';
    }
    </script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="Admin.php">GENESIS</a>
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
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['Name']." ".$_SESSION['Surname'] ?></p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['Department']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="Project_Manager.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">New</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#propose" data-toggle="modal"><i class="icon fa fa-circle-o"></i>PROJECT</a></li>
            <li><a class="treeview-item" href="#newproposal" data-toggle = "modal"><i class="icon fa fa-circle-o"></i>BENEFICIARY INFO</a></li>
            <li><a class="treeview-item" href="#budget" data-toggle ="modal"><i class="icon fa fa-circle-o"></i>BUDGET</a></li>
            <li><a class="treeview-item" href="#newdoc" data-toggle ="modal"><i class="icon fa fa-circle-o"></i>FILE</a></li>
          </ul>
        </li>
        <!-- <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">PROJECTS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="beneficiary.php"><i class="icon fa fa-circle-o"></i> BENEFICIARY DATA</a></li>
            <li><a class="treeview-item" href="budgets.php"><i class="icon fa fa-circle-o"></i> BUDGETS</a></li>
            <!-- <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li> -->
          </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> Analytics</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!-- <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Proje</a></li>
            <li><a class="treeview-item active" href="#"><i class="icon fa fa-circle-o"></i> Data Tables</a></li> -->
          </ul>
        </li>
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
          <p>Quatum Analytica</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Project Manager</li>
          <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                  <h4>FINANCE</h4></h4>
                  <p><b>5</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                  <h4>PENDING PROJECTS</h4>
                  <p><b>25</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                  <h4>COMPLETE PROJECTS</h4>
                  <p><b>10</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                  <h4>Monitoring and Evaluation</h4>
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
                        }else{
                          echo 
                            "<tr>".
                                  "<td>".$REF."</td>".
                                  "<td>".$title."</td>".
                                  "<td>".$Description."</td>".
                                  "<td>".$Type."</td>".
                                  "<td>"."<i>"."PENDING.."."</i>"."</td>".
                                  "<td>"."No Files uploaded"."</td>".
                            "</tr>";
                        }


                      }
                    }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php
            require 'dbh/dbh.php';
            if(isset($_POST['title'])){
              $id = $_POST['title'];

              $sql = "SELECT * FROM Projects WHERE REF_NUM = '$id'";
              $result = mysqli_query($Conn,$sql);
              $confirm = mysqli_num_rows($result);

              if($confirm > 0)
              {
                echo "<div class='row'>".
                        "<div class='col-md-12'>".
                          "<div class='tile'>".
                            "<div class='tile-body'>".
                             "<center>".
                              "<p>"."Are you sure you want to this project"."</p>".
                             "</center>";
                             while($row = mysqli_fetch_assoc($result))
                             {
                               echo "<b>"."Title: "."</b>".$row['Title']."<br>".
                                    "<b>"."Description: "."</b>".$row['Description']."<br>".
                                    "<b>"."Nature: "."</b>".$row['Type']."<br>";
                             }
                            echo "<center>".
                                      // "<input type = 'file' class = 'form-control' name = 'file'>".
                                      "<button class='btn btn-danger' href='BusinessDevelopment.php' data-toggle='modal'>"."<span class='glyphicon glyphicon-remove'>"."</span>"."Deny"."</button>"."&nbsp".
                                      "<button class='btn btn-success' href='#newdoc' data-toggle='modal'>"."<span class='glyphicon glyphicon-remove'>"."</span>"."Accept"."</button>".
                                  "</center>";
                            echo "</div>".
                          "</div>".
                        "</div>".
                    "</div>";
              }
            else{
              echo "<div class='row'>".
              "<div class='col-md-12'>".
                "<div class='tile'>".
                  "<div class='tile-body'>".
                   "<center>".
                      "<h4>"."No Project Found for that Reference"."</h4>".
                    "</center>".
                  "</div>"."</div>"."</div>"."</div>";
            }
            }
      ?>
    <div class="modal fade" id="propose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"  style="width: 700px;">
          <div class="modal-header">
            <h4>New Proposal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
          </div>
          <div class="modal-body">
            <form method = "POST" action = "php/addproject.php">
            <div class="form-group">
            <label class = 'control-label'>Project Name</label>
              <input type= 'text' class = 'form-control' name = 'title' required = ''>

            </div>

            <div class="form-group">
            <label class = 'control-label'>Description</label>
             <textarea class = "form-control" name = 'description'>
             </textarea>
            </div>

            <div class="form-group">
            <label class = 'control-label'>Project Nature</label>
              <select class = 'form-control' name = 'type'>
                <option>Agriculture</option>
                <option>Energy</option>
              </select>
            </div>

            <div class="form-group">
            <label class = 'control-label'>Project Start</label>
              <input type= 'date' class = 'form-control' name = 'projectname' required = ''>

            </div>

            <div class="form-group">
            <label class = 'control-label'>Project End</label>
              <input type= 'date' class = 'form-control' name = 'projectname' required = ''>

            </div>

            <div class="form-group">
            <label class = 'control-label'>Project Manager/Coordinator</label>
              <input type= 'text' class = 'form-control' name = 'supervisor' required = ''>

            </div>

           
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" type = 'submit'>Save Changes</button>
          </div>
          </form>

        </div>
      </div>
    </div>
    <!-- modal -->
          <div class="modal fade" id="budget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New BUDGET</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label class = "control-label"><b>Resources</b></label>
                <form method = "POST" action = "php/addbudget.php">
                <div class="form-group">
                    <label class= "control-label">Project ID</label>
                    <input type = "text" class = "form-control" name = 'pid'><BR>
                  </div>
                <div class="row">
    
                  <div class="col-md-9">
                    <label class = "control-label">Resource</label>
                    <input type = "text" class = "form-control" name= '1' required = ''><br>
                    <input type = "text" class = "form-control" name= '2'><br>
                    <input type = "text" class = "form-control" name= '3'><br>
                    <input type = "text" class = "form-control" name= '4'><br>
                    <input type = "text" class = "form-control" name= '5'><br>
                    <input type = "text" class = "form-control" name= '6'><br>
                  </div>
                  <div class="col-md-3">
                    <label class = "control-label">Estimated Cost</label>
                    <input type = "text" class = "form-control" name= '7' required = ''><br>
                    <input type = "text" class = "form-control" name= '8'><br>
                    <input type = "text" class = "form-control" name= '9'><br>
                    <input type = "text" class = "form-control" name= '10'><br>
                    <input type = "text" class = "form-control" name= '11'><br>
                    <input type = "text" class = "form-control" name= '12'><br>
                  </div>
                </div>
                <br>
              <div id = '1' style = "display: none;">
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-9">
                    <input type = "text" class = "form-control" name= '13'><br>
                    <input type = "text" class = "form-control" name= '14'><br>
                    <input type = "text" class = "form-control" name= '15'><br>
                    <input type = "text" class = "form-control" name= '16'><br>
                    <input type = "text" class = "form-control" name= '17'><br>
                  </div>
                  <div class="col-md-3">
                    <input type = "text" class = "form-control" name= '18'><br>
                    <input type = "text" class = "form-control" name= '19'><br>
                    <input type = "text" class = "form-control" name= '20'><br>
                    <input type = "text" class = "form-control" name= '21'><br>
                    <input type = "text" class = "form-control" name= '22'><br>
                  </div>
                  </div>
                  <button class = "btn btn-info" style = "float: right;" onclick = "Less()">Less</button><br>
                </div>
                </div>
                
                <button id = '2' class = "btn btn-info" style = "float: right;" onclick = "more()">More</button><br>

              </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" type = "submit">Save Changes</button>
                  </div>
                  </form>
            </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="newdoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Proposal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
                <?php if(empty($id))
                    {echo 
                      "<form method = 'POST' action = 'Project_Manager.php' enctype='multipart/form-data'>".
                      "<div class='form-group'>".
                        "<label class= 'control-label'>"."Project ID"."</label>".
                        "<input type ='text' name ='title' class = 'form-control' required = '' >".
                      "</div>";
                    }else{
                      echo 
                        "<form method = 'POST' action = 'Project_Manager.php' enctype='multipart/form-data'>".
                        "<div class='form-group'>".
                          "<label class= 'control-label'>"."Project ID"."</label>".
                          "<input type ='text' name = 'title' class = 'form-control' value = $id readonly = ''>".
                        "</div>";

                        echo
                            "<div class='form-group'>".
                            "<label class ='control-label'>"."Attachments"."</label>".
                            "<input type = 'file' class = 'form-control' name = 'file' required = ''>"."<br>".
                            "<label class = 'control-label'>"."Description"."</label>".
                            "<input type = 'text' class = 'form-control' name = 'file_description' required= ''>".
                          "</div>";
                    }
                 ?>
              </div>
            <div class="modal-footer">
              <button class="btn btn-success">Save Changes</button>
            </div>

            </form>

          </div>
        </div>
      </div>
      <!-- modal -->

      <div class="modal fade" id="newproposal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Beneficiary Data Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
                <form method="POST" action="php/addbeneficiary.php">
                  <div class="form-group">
                    <label class="control-label">Project</label>
                    <select class="form-control" name="Project">
                      <?php
                      require 'dbh/dbh.php';
                      $sql = "SELECT title,Project_id FROM projects";
                      $result = mysqli_query($Conn,$sql);
                      $confirm = mysqli_num_rows($result);

                      if($confirm >0 )
                      {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                          $Project_id = $row['Project_id'];
                          echo "<option value = '$Project_id'>".$row['title']."</option>";                       
                        }
                      }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Field</label>
                        <input type="text" name="Field0" class="form-control">
                      </div>
                      <div class="col-md-6">

                        <label class="control-label">Categories</label><br>

                        <div class="row">
                          <div class="col-md-6">
                              <label class="control-label">Yes</label>
                              <input type="radio" name="Subfield0" value="yes" required="" onclick="moresubs()">
                          </div>
                          <div class="col-md-6">
                              <label class="control-label">No</label>
                              <input type="radio" name="Subfield0" value="no" required="" onclick="lessubs()">
                          </div>
                        </div>
                      </div>
                    </div>
                     <div id="3" style="display: none;">
                      <label class="control-label">Category</label>
                          <input type="text" name="sub00" class="form-control"><br>
                          <input type="text" name="sub01" class="form-control"><br>
                          <input type="text" name="sub02" class="form-control"><br>
                          <input type="text" name="sub03" class="form-control"><br>
                          <input type="text" name="sub04" class="form-control"><br>
                     </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Field</label>
                        <input type="text" name="Field1" class="form-control">
                      </div>
                      <div class="col-md-6">

                        <label class="control-label">Categories</label><br>

                        <div class="row">
                          <div class="col-md-6">
                              <label class="control-label">Yes</label>
                              <input type="radio" name="Subfield1" value="yes" onclick="moresubs1()">
                          </div>
                          <div class="col-md-6">
                              <label class="control-label">No</label>
                              <input type="radio" name="Subfield1" value="no" onclick="lessubs1()">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="4" style="display: none;">
                      <label class="control-label">Category</label>
                          <input type="text" name="sub10" class="form-control"><br>
                          <input type="text" name="sub11" class="form-control"><br>
                          <input type="text" name="sub12" class="form-control"><br>
                          <input type="text" name="sub13" class="form-control"><br>
                          <input type="text" name="sub14" class="form-control"><br>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Field</label>
                        <input type="text" name="Field2" class="form-control">
                      </div>
                      <div class="col-md-6">

                        <label class="control-label">Categories</label><br>

                        <div class="row">
                          <div class="col-md-6">
                              <label class="control-label">Yes</label>
                              <input type="radio" name="Subfield2" value="yes" onclick="moresubs2()">
                          </div>
                          <div class="col-md-6">
                              <label class="control-label">No</label>
                              <input type="radio" name="Subfield2" value="no" onclick="lessubs2()">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="5" style="display: none;">
                      <label class="control-label">Category</label>
                          <input type="text" name="sub20" class="form-control"><br>
                          <input type="text" name="sub21" class="form-control"><br>
                          <input type="text" name="sub22" class="form-control"><br>
                          <input type="text" name="sub23" class="form-control"><br>
                          <input type="text" name="sub23" class="form-control"><br>
                    </div>
                  </div>


            <div class="modal-footer">
              <button class="btn btn-success">Save Changes</button>
            </div>

            </form>

          </div>
        </div>
      </div>
      <!-- modal -->
      <div class="modal fade" id="budget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New BUDGET</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label class = "control-label"><b>Resources</b></label>
                <form method = "POST" action = "php/addbudget.php">
                <div class="form-group">
                    <label class= "control-label">Project ID</label>
                    <input type = "text" class = "form-control" name = 'pid'><BR>
                  </div>
                <div class="row">
    
                  <div class="col-md-9">
                    <label class = "control-label">Resource</label>
                    <input type = "text" class = "form-control" name= '1' required = ''><br>
                    <input type = "text" class = "form-control" name= '2'><br>
                    <input type = "text" class = "form-control" name= '3'><br>
                    <input type = "text" class = "form-control" name= '4'><br>
                    <input type = "text" class = "form-control" name= '5'><br>
                    <input type = "text" class = "form-control" name= '6'><br>
                  </div>
                  <div class="col-md-3">
                    <label class = "control-label">Estimated Cost</label>
                    <input type = "text" class = "form-control" name= '7' required = ''><br>
                    <input type = "text" class = "form-control" name= '8'><br>
                    <input type = "text" class = "form-control" name= '9'><br>
                    <input type = "text" class = "form-control" name= '10'><br>
                    <input type = "text" class = "form-control" name= '11'><br>
                    <input type = "text" class = "form-control" name= '12'><br>
                  </div>
                </div>
                <br>
              <div id = '1' style = "display: none;">
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-9">
                    <input type = "text" class = "form-control" name= '13'><br>
                    <input type = "text" class = "form-control" name= '14'><br>
                    <input type = "text" class = "form-control" name= '15'><br>
                    <input type = "text" class = "form-control" name= '16'><br>
                    <input type = "text" class = "form-control" name= '17'><br>
                  </div>
                  <div class="col-md-3">
                    <input type = "text" class = "form-control" name= '18'><br>
                    <input type = "text" class = "form-control" name= '19'><br>
                    <input type = "text" class = "form-control" name= '20'><br>
                    <input type = "text" class = "form-control" name= '21'><br>
                    <input type = "text" class = "form-control" name= '22'><br>
                  </div>
                  </div>
                  <button class = "btn btn-info" style = "float: right;" onclick = "Less()">Less</button><br>
                </div>
                </div>
                
                <button id = '2' class = "btn btn-info" style = "float: right;" onclick = "more()">More</button><br>

              </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" type = "submit">Save Changes</button>
                  </div>
                  </form>
            </div>
            </div>
          </div>
        </div>


      <div class="modal fade" id="newdoc1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"  style="width: 700px;">
            <div class="modal-header">
              <h4>New Proposal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button class="btn btn-success">Save Changes</button>
            </div>

          </div>
        </div>
      </div>
      <!-- modal -->

      <?php
            require 'dbh/dbh.php';
            if(isset($_POST['title'])){
              $id = $_POST['title'];

              $sql = "SELECT * FROM Projects WHERE REF_NUM = '$id'";
              $result = mysqli_query($Conn,$sql);
              $confirm = mysqli_num_rows($result);

              if($confirm > 0)
              {
                echo "<div class='row'>".
                        "<div class='col-md-12'>".
                          "<div class='tile'>".
                            "<div class='tile-body'>".
                             "<center>".
                              "<p>"."Are you sure you want to this project"."</p>".
                             "</center>";
                             while($row = mysqli_fetch_assoc($result))
                             {
                               echo "<b>"."Title: "."</b>".$row['Title']."<br>".
                                    "<b>"."Description: "."</b>".$row['Description']."<br>".
                                    "<b>"."Nature: "."</b>".$row['Type']."<br>";
                             }
                            echo "<center>".
                                      // "<input type = 'file' class = 'form-control' name = 'file'>".
                                      "<button class='btn btn-danger' href='BusinessDevelopment.php' data-toggle='modal'>"."<span class='glyphicon glyphicon-remove'>"."</span>"."Deny"."</button>"."&nbsp".
                                      "<button class='btn btn-success' href='#newproposal' data-toggle='modal'>"."<span class='glyphicon glyphicon-remove'>"."</span>"."Accept"."</button>".
                                  "</center>";
                            echo "</div>".
                          "</div>".
                        "</div>".
                    "</div>";
              }
            else{
              echo "<div class='row'>".
              "<div class='col-md-12'>".
                "<div class='tile'>".
                  "<div class='tile-body'>".
                   "<center>".
                      "<h4>"."No Project Found for that Reference"."</h4>".
                    "</center>".
                  "</div>"."</div>"."</div>"."</div>";
            }
            }
      ?>
      <?php
    require 'dbh/dbh.php';

    if(isset($_POST['title']) && isset($_POST['file_description']))
    {
        $id = $_POST['title'];
        $sql = "SELECT Project_id FROM projects WHERE REF_NUM = '$id'";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if($confirm > 0 )
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $Project_id = $row['Project_id'];
            }
                $descript = $_POST['file_description'];
                $target_dir = "files/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                //check if  file is already there
                if (file_exists($target_file))
                {
                    $_SESSION['message'] = "Sorry, file already exists.";
                    $uploadOk = 0;
                    header('location: Project_Manager.php');
                }

                if ($_FILES["file"]["size"] > 5000000)
                {
                    $_SESSION['message'] = "Sorry, your file is too large.";
                    $uploadOk = 0;
                    header('location: Project_Manager.php');

                }
                // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                //   && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "mp4"
                //   && $imageFileType != "mp3" && $imageFileType != "csv") {
                //       $_SESSION['message'] =  "Un supported File Format";
                //       $uploadOk = 0;
                //       header('location: Project_Manager.php');
                //   }

                if ($uploadOk == 0) 
                {
                  
                  header('location: Project_Manager.php');
                }else{
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
                {
                    $_SESSION['message'] = "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                    $filename = basename($_FILES['file']['name']);
                    $filepath = "files/".$filename;
                    
                    $sql2  = "INSERT INTO Project_Files(Project_id,File_name, File_description,File_path,File_Type)
                    VALUES($Project_id,'$filename','$descript','$filepath','$imageFileType')";

                    if($Conn->query($sql2)===TRUE)
                    {
                      $_SESSION['message'] = "Document successfully uploaded";
                      header('location: Project_Manager.php');
                    }
                    else{
                        echo "Error1: " . $sql2 . "<br>" . $Conn->error;
                    }
                }
              }

            
        }
    }
    ?>
      


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