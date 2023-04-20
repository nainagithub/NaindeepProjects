<!DOCTYPE html>
<html>
    <title>Sold Out</title>
    <head>
        <style>
            body{background-color:darkcyan;background-image:url(https://static.vecteezy.com/system/resources/previews/001/255/578/original/abstract-light-red-watercolor-paint-texture-background-vector.jpg)}
            p{text-align:center}
        </style>
    </head>
    <body>
        <p>
            <?php
            $conn=mysqli_connect("localhost","root","","projectwork");
            if($conn==false)
            {
                die("<b>Could not connect to the database!!!!</b>");
            }
            else
            {
                echo "<b>Successfully connected to the database!!!!</b><br><br><br>";
            }
            $quer5="SELECT * from left1";
            $res=mysqli_query($conn,$quer5);
            if(mysqli_num_rows($res)>0)
            {
                echo "<b>THE SOLD OUT PAINTINGS ARE:<b><br><br><br><br><br><br><br><br><br><br><br><br>";
                while($row=mysqli_fetch_assoc($res))
                {
                     echo "<b>Painting_Id: </b>".$row["painting_id"]."<br><br><br>";
                }
            }
            else
            {
                echo "<b>NONE OF THE PAINTINGS HAVE BEEN BIDDED OUT</b><br><br>";
            }
            ?>
        </p>
    </body>
</html>