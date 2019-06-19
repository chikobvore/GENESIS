<?php
  require 'dbh/dbh.php'; 
  session_start();
 if ($_SESSION['Department'] !== 'OFFICER')
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
        <li><a class="app-menu__item" href="Field.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">New</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#newproject" data-toggle="modal"><i class="icon fa fa-circle-o"></i>PROJECT</a></li>
            <li><a class="treeview-item" href="#newproposal" data-toggle = "modal"><i class="icon fa fa-circle-o"></i>DOCUMENT</a></li>
            <li><a class="treeview-item" href="#budget" data-toggle ="modal"><i class="icon fa fa-circle-o"></i>BUDGET</a></li>
          </ul>
        </li>
        <!-- <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">PROJECTS</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> BENEFICIARY DATA</a></li>
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
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                  <h4></h4></h4>
                  <p><b></b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small info coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                  <h4></h4>
                  <p><b></b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                  <h4></h4>
                  <p><b></b></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                  <h4></h4>
                  <p><b></b></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Beneficiary Data</h3>
            <div class="form quick-post">
                    <form class="form-horizontal" method="POST" action="Field.php">

                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Project Reference</label>
                        <div class="col-lg-12">
                          <input type="text" class="form-control" name ="ref">
                        </div>
                      </div>
                      <center>
                        <button class="btn btn-info" type="submit">Reference</button>
                      </center>
                    </form>
                      

                      <?php
                      if (isset($_POST['ref']))
                      {
                        $ref =  $_POST['ref'];

                        $sql = "SELECT Project_id FROM projects WHERE REF_NUM = '$ref'";
                        $result = mysqli_query($Conn,$sql);
                        $confirm = mysqli_num_rows($result);

                        if($confirm >0)
                        {
                          while ($row = mysqli_fetch_assoc($result))
                          {
                            $Project_id = $row['Project_id'];
                          }
                          $sql = "SELECT Field,Field_id FROM Beneficiary_fields WHERE Project_id = $Project_id";
                          $result = mysqli_query($Conn,$sql);
                          $confirm = mysqli_num_rows($result);

                          if ($confirm >0)
                          {
                            echo "<form method = 'POST' action= 'php/adddata.php'>";
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($result))
                            {
                              $name = 'name'.$i;
                              $field = 'field'.$i;
                              $value = $row['Field'];
                              echo "<div class= 'form-group'>";
                              $Field_id = $row['Field_id'];
                              echo "<label class = 'control-label'>".$row['Field']."</label>";
                            echo "<input type = 'hidden' name = '$field' value= '$value'>";

                              $sql1 = "SELECT subfield FROM Beneficiary_subfields WHERE Field_id = $Field_id";
                              $result1 = mysqli_query($Conn,$sql1);
                              $confirm1 = mysqli_num_rows($result1);
                              if ($confirm1  > 0)
                              {

                                echo "<select class = 'form-control' name = '$name'>";
                                while ($row1 = mysqli_fetch_assoc($result1))
                                {
                                  echo "<option>".$row1['subfield']."</option>";
                                }
                                echo "</select>";
                              }else{
                                echo "<input type = 'text' class = 'form-control' name = '$name'>";
                              }
                              echo "</div>";
                              $i = $i + 1;
                            }
                            echo "<input type = 'hidden' name = 'id' value = '$Project_id'>";
                            echo "
                      <center>
                        <div class='form-group'>
                          <div class='col-lg-offset-2 col-lg-12'>
                             <button type='submit' class='btn btn-primary'>Publish</button>
                             <button type='#'' class='btn btn-info'>Save Draft</button>
                             <button type='reset' class='btn btn-default'>Reset</button>
                        </div>
                        </center>
                      </div>";

                          }
                        }
                      }
                      ?>

                      <!-- <div class="form-group">
                        <label class="control-label col-lg-2" for="title">House Name</label>
                        <div class="col-lg-12">
                          <input type="text" class="form-control" name="hname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Location</label>
                        <div class="col-lg-12">
                          <input type="text" class="form-control" name ="location">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Highest Educational Level</label>
                        <div class="col-lg-12">
                            <select class="form-control" name="education">
                              <option>PHD</option>
                              <option>Masters</option>
                              <option>Degree</option>
                              <option>A Level</option>
                              <option>O Level</option>
                              <option>Nill</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Total Number of People</label>
                        <div class="col-lg-12">
                          <input type="Number" class="form-control" name="people" min="0">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Comments</label>
                        <div class="col-lg-12">
                          <textarea class="form-control" name ="comment"></textarea>
                        </div>
                      </div> -->

  <!--                     <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-12">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="#" class="btn btn-info">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form> -->
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>