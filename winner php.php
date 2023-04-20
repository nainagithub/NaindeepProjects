<!DOCTYPE html>
<html>
    <title>Bidding Winners</title>
    <head>
        <h1 style="text-align:center;color:black">EXECUTING</h1>
        <style>
            img{width:100px;height:100px}
            body{background-color:darkcyan;background-image:url(https://static.vecteezy.com/system/resources/previews/001/255/578/original/abstract-light-red-watercolor-paint-texture-background-vector.jpg)}
            p{text-align:center}
        </style>    
    </head>
    <body>
          <div>
          <p>

           <?php
           $conn=mysqli_connect("localhost","root","","projectwork");
           if($conn==false)
           {
            die("<b> Couldn't connect to database </b> <img src='https://tse1.mm.bing.net/th?id=OIP.NomGYb2FFUxlWnpSHC6Y4gHaHa&pid=Api&P=0'><br><br>");
           }
           else
           {
             echo "<b>Successfully Connected to the database!!!!!</b><br> <img src='https://i0.wp.com/www.papertraildesign.com/wp-content/uploads/2017/06/Happy-teeth.png'><br><br>";
           }
           $quer="SELECT b.First_Name,b.Middle_Name,b.Last_Name,b.Bidder_Id,b.Painting_Id,p.Painting_Name,Bidder_price
           FROM bidder AS b,painting AS p 
           where p.Painting_ID=b.Painting_Id AND (b.Painting_Id,Bidder_price)IN(SELECT Painting_Id,MAX(Bidder_price) AS winner from bidder WHERE Painting_Id='Pnt119Ma')";
           $result=mysqli_query($conn,$quer);
           if(mysqli_num_rows($result)>0)
           {
             while($row=mysqli_fetch_assoc($result))
             {
                echo "<b>Congratulations!!!! to the Winners</b><br><br>";
                echo "<b>Name :</b> ".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br><br>";
                echo "<b>Bidder Id :</b> ".$row["Bidder_Id"]."<br><br>";
                echo "<b>Painting Id :</b> ".$row["Painting_Id"]."<br><br>";
                echo "<b>Painting Name :</b> ".$row["Painting_Name"]."<br><br>";
                echo "<b>Winner's Bidding :</b> ".$row["Bidder_price"]."<br><br><br><br><br>";
             }
           }
           else
           {
            echo "SORRY!!!! NO BIDDERS AVAILABLE NOW <br><br><br><br>";
           }
            $quer2="SELECT b.First_Name,b.Middle_Name,b.Last_Name,b.Bidder_Id,b.Painting_Id,p.Painting_Name,Bidder_price
            FROM bidder AS b,painting AS p 
            where p.Painting_ID=b.Painting_Id AND (b.Painting_Id,Bidder_price)IN(SELECT Painting_Id,MAX(Bidder_price) AS winner from bidder WHERE Painting_Id='Pnt204Vi')";
            $result=mysqli_query($conn,$quer2);
            if(mysqli_num_rows($result)>0)
            {
             while($row=mysqli_fetch_assoc($result))
             {
                echo "<b>Congratulations!!!! to the Winners</b><br><br>";
                echo "<b>Name :</b> ".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br><br>";
                echo "<b>Bidder Id :</b> ".$row["Bidder_Id"]."<br><br>";
                echo "<b>Painting Id :</b> ".$row["Painting_Id"]."<br><br>";
                echo "<b>Painting Name :</b> ".$row["Painting_Name"]."<br><br>";
                echo "<b>Winner's Bidding :</b> ".$row["Bidder_price"]."<br><br><br><br><br>";
             }
           }
           else
           {
            echo "SORRY!!!! NO BIDDERS AVAILABLE FOR SEVEN COLOURS";
           }
           $quer3="SELECT b.First_Name,b.Middle_Name,b.Last_Name,b.Bidder_Id,b.Painting_Id,p.Painting_Name,Bidder_price
           FROM bidder AS b,painting AS p 
           where p.Painting_ID=b.Painting_Id AND (b.Painting_Id,Bidder_price)IN(SELECT Painting_Id,MAX(Bidder_price) AS winner from bidder WHERE Painting_Id='Pnt101Dm')";
           $result=mysqli_query($conn,$quer3);
           if(mysqli_num_rows($result)>0)
           {
            while($row=mysqli_fetch_assoc($result))
            {
               echo "<b>Congratulations!!!! to the Winners</b><br><br>";
               echo "<b>Name :</b> ".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br><br>";
               echo "<b>Bidder Id :</b> ".$row["Bidder_Id"]."<br><br>";
               echo "<b>Painting Id :</b> ".$row["Painting_Id"]."<br><br>";
               echo "<b>Painting Name :</b> ".$row["Painting_Name"]."<br><br>";
               echo "<b>Winner's Bidding :</b> ".$row["Bidder_price"]."<br><br><br><br><br>";
            }
          }
          else
          {
           echo "SORRY!!!! NO BIDDERS AVAILABLE FOR <b>BIRTH OF SUPERNOVA</b>";
          }
          $quer4="SELECT b.First_Name,b.Middle_Name,b.Last_Name,b.Bidder_Id,b.Painting_Id,p.Painting_Name,Bidder_price
          FROM bidder AS b,painting AS p 
          where p.Painting_ID=b.Painting_Id AND (b.Painting_Id,Bidder_price)IN(SELECT Painting_Id,MAX(Bidder_price) AS winner from bidder WHERE Painting_Id='Pnt405Mo')";
          $result=mysqli_query($conn,$quer4);
          if(mysqli_num_rows($result)>0)
          {
           while($row=mysqli_fetch_assoc($result))
           {
              echo "<b>Congratulations!!!! to the Winners</b><br><br>";
              echo "<b>Name :</b> ".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br><br>";
              echo "<b>Bidder Id :</b> ".$row["Bidder_Id"]."<br><br>";
              echo "<b>Painting Id :</b> ".$row["Painting_Id"]."<br><br>";
              echo "<b>Painting Name :</b> ".$row["Painting_Name"]."<br><br>";
              echo "<b>Winner's Bidding :</b> ".$row["Bidder_price"]."<br><br><br><br><br>";
           }
         }
         else
         {
          echo "SORRY!!!! NO BIDDERS AVAILABLE FOR <b>Mesmerizing Eyes</b>";
         }
           ?>
        </p>
        </div>
    </body>