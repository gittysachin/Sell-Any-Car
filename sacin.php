<?php
    $ab = mysqli_connect("localhost","codyzed_root","demopassword");
   $cd =  mysqli_select_db($ab,"codyzed_sellanycar");
    if($cd && $ab){
        $pq = mysqli_query($ab,"select * from admin");
        while($p = mysqli_fetch_array($pq)){
            echo $p[0]."   space   ".$p[1];
        }
        if($pq){
            echo "pq";
        }
        else {
          echo "no pq";  
        }
    }
    else {
        echo "no";
    }
?>