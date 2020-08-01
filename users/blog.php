<?php
    include '../db/dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/blog.css">
</head>

<body>
    <div class="main-container">
        <?php
         include 'umenu.php';?>


        <div class="content">

            <?php
            
            
            $sql="SELECT * FROM blogs ORDER BY ID desc;";
            $results=$DB->query($sql);
            
            while($row=mysqli_fetch_assoc($results)){
                //metoda perdoret n'loop edhe t'kthen rreshtat n'results per sa kohe qe ka hala
                //shembull heren e pare ta kthen rreshtin e pare(prej add blogit qa i kena jap), heren e dyte rishkruhet me tjetren
                ?>
            <div class="blog">
                <div class="design<?php echo $row['design']?>">
                    <div id="title<?php echo $row['design']?>">
                        <h1><?php echo $row['title'];?></h1>
                    </div>
                    <div id="image<?php echo $row['design']?>"><img class="image<?php echo $row['design']?>"
                            src="../<?php echo $row['imagepath'];?>" alt=""></div>
                    <div id="text<?php echo $row['design']?>">
                        <p><?php echo $row['shorttext'];?> </p>
                    </div> 
                    <div class="links">
                    
                    <button id="button<?php echo $row['design']?>"><a
                            href="blogmore.php?ID=<?php echo $row['ID']?>">read more</a></button> </div>
                </div>
                <?php  } ?>
            </div>
        </div>


    </div>



</body>

</html>