<!DOCTYPE html>
<html>
    <title>Showing details</title>
    <head>
        <h1 style="text-align:center">EXECUTING</h1><br><br><br><br>
        <style>
            body{background-color:darkcyan;background-image:url(https://i.pinimg.com/originals/dd/4d/60/dd4d60009fe992f067e9e0371e991115.jpg)}
            p{text-align:center;font-size:200%}
        </style>
    </head>
    <body>
        <p>
            <?php
            $var1=$_POST["exid"];
            $conn=mysqli_connect("localhost","root","","projectwork");
            if($conn==false)
            {
                die("Couln't connect to the database!!!!!!");
            }
            else
            {
                echo "<b>Successfully connected to the database!!!!!</b><br><br><br><br>";
            }
            $quer="SELECT * from exhibition where paint_id='$var1'";
            $result=mysqli_query($conn,$quer);
            if(mysqli_num_rows($result)>0)
            {
                echo "<b> WAIT YOUR REQUEST IS BEING PROCESSED!!!!!</b><br><br>";  
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<b>Painting ID: </b>".$row["paint_id"]."<br><br><br>";
                    echo "<b>Organizer: </b>".$row["Organizers"]."<br><br><br>";
                    echo "<b>Address: </b>".$row["Address"]."<br><br><br>";
                    echo "<b>Contact Number: </b>".$row["Contact_no"]."<br><br><br>";
                    echo "<b>Exhibition Date: </b>".$row["exhibit_date"]."<br><br><br>";
                }
            }
            else
            {
                printf("SORRY NO ORGANIZERS ARE ABAILABLE FOR PAINTING ID <b>$var1</b> RIGHT NOW");
            }
            ?>
        </p>
    </body>
</html>