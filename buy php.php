<!DOCTYPE html>
<html>
    <title> Bidding Painting</title>
    <head>
      <h1 style="color:black;text-align:center">EXECUTING</h1>
       <style>
         img{height:100px;width:100px}
         p{text-align:center;}
         div{text-align:center;}
         body{background-color:darkcyan;background-image:url(https://static.vecteezy.com/system/resources/previews/001/255/578/original/abstract-light-red-watercolor-paint-texture-background-vector.jpg)}
       </style>
    </head>
    <body>
          <p>
            <div>
            <?php
              $conn=mysqli_connect("localhost","root","","projectwork");
              if($conn==false)
              {
                die("Couldn't fetch the data !!!! SORRRY <img src='https://tse3.mm.bing.net/th?id=OIP.i8VOfd2_4d6duvZz11hyMwHaHZ&pid=Api&P=0')<br><br>");
              }
              else
              {
                echo "<b>You have successfully conntected to the database</b><br><br><br>";
              }
              $quer="SELECT * FROM bidder";
              $result=mysqli_query($conn,$quer);
              if(mysqli_num_rows($result)>0)
              {
                echo "<b>PLEASE WAIT YOUR DATA IS BEING PROCESSED !!!!<b><br><br> <img src='https://i0.wp.com/www.papertraildesign.com/wp-content/uploads/2017/06/Happy-teeth.png'><br><br><br> ";
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<b>Name:</b> ".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br><br>";
                    echo "<b>Bidder Id:</b> ".$row["Bidder_Id"]."<br><br>";
                    echo "<b> Painting  Id:</b> ".$row["Painting_Id"]."<br><br>";
                    echo "<b> Bidder's bidding:</b> ".$row["Bidder_price"]."<br><br><br><br><br>";
                }
              }
              else
              {
                 echo "<b>SORRY NO RESULT FOUND AS THE BIDDING HASN'T STARTED .</b><img src='https://tse1.mm.bing.net/th?id=OIP.NomGYb2FFUxlWnpSHC6Y4gHaHa&pid=Api&P=0'>";
              }
            ?>
            </div>
            </p>
    </body>
</html>