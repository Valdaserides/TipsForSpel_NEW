<!DOCTYPE html>
<html lang="en">
<?php $arr = array(); ?>
<head>
    <meta charset="UTF-8">
    <title>Speltips</title>
    <link rel="stylesheet" href="../css/speltipsIndexCss.css">
    <link rel="stylesheet" href="../css/cssMain.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>

        <?php include("../css/speltips.css"); ?>  /* Includeing css for tips */
       
    </style>

    <script>

        $(document).ready(function(){ /* When the documents have loaded */
            
            $(".btn").on("click",function(){ /* Look for click on btn event */
                
                $(".input").toggleClass("inclicked"); // Adding a class
                $(".btn").toggleClass("close"); /* Toggeling a class */
                
            });
            
            $(".tips").slice(0,9).show(); // Load more tips function
            
            if($(".tips").length <= 9){ // Checking if the page has less than or equal to 9
                $("#loadMore").hide(); // And if it does, remove the loadMore button.
            }
            
            $("#loadMore").on("click",function(e){ // Looking for clicking event
                
                e.preventDefault();
                $(".tips:hidden").slice(0,6).slideDown(); // Showing 6 more tips that has been hidden before, with the slideDown animation
                if($(".tips:hidden").length == 0){ // If there is no more tips on the page
                    $("#loadMore").fadeOut("slow"); // Remove the loadmore button
                }
                
            });
            
        });
        
        function showTips(x){ /* Function that is called when the users clicks on the a-tag in each tips. The x is a number  */
            
            var y = $(".tips-closed-" + x); // Saving the tips-classname in the varibel y.
            $(y).css("display","flex"); // Giving the tips a display value of flex.
            
        }
        
        function hideTips(x){ /* Function that is called when the user presses the X to close tips. The x is a number. */
            
            var y = $(".tips-closed-" + x);
            y.css("display","none");
            
        }

        
    </script>

</head>

<?php

require("../dbConnect.php"); // Requiring the database connection

mysqli_query($dbc,"SET NAMES UTF-8"); // Setting the character endoing to UTF-8.
    
?>

<body>

    <?php include("../templates/navigation.php"); // Including the navigation bar. ?>

    <main>

        <div class="main-content">

            <div class="text">

                <h3> Här hittar du alla speltips på hemsidan. </h3>

                <div class="middle">

                    <form class="search-box" method="get">

                        <input type="text" class="input" name="search" placeholder="Sök efter publicerare, titel mm">
                        <input type="submit" value="Sök" class="">
                        <a href="/speltips" class="submit">Visa alla</a>

                    </form>

                </div>

            </div>

            <div class="all-tips">

                <?php
                
                $query = "select * from speltips_alla order by speltips_alla_id desc;"; // MySQL question
 
                if(isset($_GET['search'])){ // Checking if the search box has been filled out
                    
                    $searchq = $_GET['search']; // Assigning the value of the search box to a varible
                    
                    $searchq = preg_replace("#[^0-9a-ö]#i","",$searchq);
                    
                    $query = "SELECT * FROM speltips_alla WHERE speltips_alla_publicerare LIKE '%$searchq%' OR speltips_alla_titel LIKE '%$searchq%';"; // Change the MySQL question to include the search query
                    
                }
                
                $result = mysqli_query($dbc,$query); // The result from the database in a varible
                
                $arr = array(); // Making an array to give all tips a unique classname
                $n = -1; // Index for the array
                
                if(mysqli_num_rows($result) <= 0){ // Checking if the table is empty
                    
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades.</p>"; // Writing out that there was no speltips found.
                    
                }
                else{
                while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                if($row['speltips_alla_confirmed'] == 1){
                    $n++; // Incrementing the index-array
                    $arr[$n] = $row['speltips_alla_id']; // The index of the array at index $n, is the same as the id in the database.
                
                
                
            ?>

                <a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)"><div class="tips">
                    
                    <img src="../imgs/<?php echo $row['speltips_alla_img_name'];?>" class="pointer">
                    <h2><a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)" style="color:blue;text-decoration:underline;cursor:pointer;">
                            <?php echo $row['speltips_alla_titel']; ?></a></h2>
                    <p>Publicerare:
                        <?php echo $row['speltips_alla_publicerare']; ?>
                    </p>
                    <p>Spel: <a href="../<?php echo $row['speltips_alla_spel']; ?>">
                            <?php echo $row['speltips_alla_spel']; ?></a></p>
                </div></a>
                <div class="tips-closed tips-closed-<?php echo $arr[$n]; ?>"> 
                    
                    <div class="kryss"> <img src="../imgs/cross.png" onclick="hideTips(<?php echo $arr[$n]; ?>)"> </div>
                    <h2> <?php echo $row["speltips_alla_titel"]; ?> </h2>
                    <h5 style="border:none;padding:0;"><i>Spel: </i> <?php echo $row['speltips_alla_spel']; ?> </h5>
                    <h5><i>Publicerat av: </i> <?php echo $row['speltips_alla_publicerare']; ?> </h5>
                    <p> <?php echo $row['speltips_alla_text']; ?> </p>
                  
                </div>
                <?php
                } // Closing loop
                }
                } // Closing else
                ?>
            </div>
            <a href="#" id="loadMore">Visa mer</a>
        </div>

    </main>

    <?php
    
        include("../templates/footer.php"); // Including the footer

    ?>

</body>

</html>