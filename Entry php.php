<!DOCTYPE html>
<html>
    <title>Entry page</title>
    <head>
        <h1 style="text-align:center;color:black">DATA ENTERED</h1>
        <style>
            body{background-color:darkkhaki;background-image:url(https://static.vecteezy.com/system/resources/previews/001/255/578/original/abstract-light-red-watercolor-paint-texture-background-vector.jpg)}
            p{background-color:darkcyan;width:500px;height:500px;top:10%;left:37%;text-align:center;position:absolute}
        </style>
    </head>
    <body>
        <p>
            <?php
              $fname=(string)$_POST["fname"];
              $mname=$_POST["mname"];
              $lname=$_POST["lname"];
              $b_id=$_POST["bid"];
              $p_id=$_POST["pid"];
              $bprice=(int)$_POST["bprice"];
              $conn2=mysqli_connect("localhost","root","","projectwork");
              if($conn2==false)
              {
                die("<b>Couldn't connect to the database!!!!</b><br><br><br>");
              }
              else
              {
                echo " <b>Connected to the database successfully!!!!</b><br><br><br><br>";
              }
              $quer3="INSERT INTO bidder values('$fname','$mname','$lname','$b_id','$p_id',$bprice)";
              if(mysqli_query($conn2,$quer3))
              {
                  echo "<b>DATA SUCCESSFULLY ENTERED!!!!!!</b><br><br><br><br>";
                  echo "<b>First Name: </b>$fname<br><br><br>";
                  echo "<b>Middle Name: </b>$mname<br><br><br>";
                  echo "<b>Last Name: </b>$lname<br><br><br>";
                  echo "<b>Bidder's Id: </b>$b_id<br><br><br>";
                  echo "<b>Painting's Id: </b>$p_id<br><br><br>";
                  echo "<b>Painting's Price: </b>$bprice<br><br><br>";
              }
              else
              {
                 echo "<b>COULDN'T ENTER THE DATA</b><br><br><br>";
              }
              $quer4="INSERT INTO left1 values('$p_id')";
              mysqli_query($conn2,$quer4);
            ?>
        </p>
    </body>
</html>