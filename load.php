<?php

require_once("conn.php");



$slt="SELECT * FROM comm";
$slt_comm=mysqli_query($conn,$slt);
if($slt_comm==true){
    while($row=mysqli_fetch_array($slt_comm)){
        ?>
          
          <p id="showComments"><?php echo $row["comment_id"] ?></p>

        <?php
    }
}



?>