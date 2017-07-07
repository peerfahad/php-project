<?php
    include "conn.php";

    $sql ="SELECT * FROM `handworker_job_photos` where user_id = ".$hw_id;
    $result = mysqli_query($conn, $sql);
    
    ?>

<div class="subportfolio">


    <h2 style="padding-left: 20px;
    color: rgba(2, 24, 88, 0.68);text-align: center;font-weight: 900;padding-bottom: 40px;padding-top: 40px;font-size: -webkit-xxx-large;">Portfolio</h2>
    <?php
if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            ?>
    <div class="col-sm-4" >
    <p><?php echo $row['photos']; ?></p>
    	</div>
              <?php

        }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

    ?>
   
    	</div>	
        </div>	