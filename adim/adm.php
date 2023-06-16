
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="admintry.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>Screen_</span>Play</p>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Dashbord</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Std List</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Staff List</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Admit std</a>
        <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Visit Home</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Report</a>
       


    </div>
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span  class="nav">&#9776;Dashbord </span>
                <span class="nav2">&#9776;Dashbord </span>
            </div>

            <div class="col-div-6">

                <div class="profile">
                    <img src="images/user (1).png " alt="user" class="pro-img">
                    <p>Feddy Bills <span>School's Admin</span></p>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>


      <?php


  $con = mysqli_connect("localhost","root","","mydatabase");
  
    
    $sql = "SELECT * from members WHERE gender ='male'";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>


      <br /><span>Male</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>



     <?php


  $con = mysqli_connect("localhost","root","","mydatabase");
  
    
    $sql = "SELECT * from members WHERE gender ='female'";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>






<br /><span>Females</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>




              <?php


  $con = mysqli_connect("localhost","root","","mydatabase");
  
    
    $sql = "SELECT * from members ";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>








<br /><span>Total</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>


		  <?php


  $con = mysqli_connect("localhost","root","","mydatabase");
  
    
    $sql = "SELECT * from staff_tb";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>




    <br /><span>Staff</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />


        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Semester Activities</span></p>
                    </br>
                    <table>
                        <tr>
                            <th>Activity</th>
                            <th>Date</th> </br>
                            <th>Week(Period)</th>
                        </tr>
                        <?php
 $user = 'root';
 $password ='';
 $database = 'mydatabase';
 $servername ='localhost:3306';
 $mysqli = new mysqli($servername, $user, $password,  $database);
    
      if($mysqli ->connect_error) {
          die('Connect Error (' .
            
         $mysqli->connect_errno . ') '.
    
         $mysqli ->connect_error);
 }

  $sql="SELECT * FROM activity_tb ORDER BY id DESC ";
  $result =$mysqli->query($sql);
  $mysqli ->close(); 


?>
 

         <?php
		   while($rows = $result ->fetch_assoc())
                      {
			?>

              <tr>
                <td><?php echo $rows['activity'];?></td>
                <td><?php echo $rows['date1'];?></td>
                <td><?php echo $rows['weeka'];?></td>
              </tr>
              
                   <?php
		    }
                   ?>  
		







                    </table>
                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Students <span>Action</span></p>
                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="circle-wrap">
                                <div class="mask full">
                                    <div class="fill"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill"></div>
                                </div>
                                <div class="inside-circle">
                  			 <?php


  $con = mysqli_connect("localhost","root","","mydatabase");
  
    
    $sql = "SELECT * from members ";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>





</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="classfix"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".nav").click(function () {
            $("#mysidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });
    </script>
</body>

</html>