<?php
if(isset($_REQUEST["company"])){
    // Capture selected State
    $company = $_REQUEST["company"];
     
     
    // Display city dropdown based on State name
    if($company != 'Select Car Company'){
        include("db.php");
        $ab = mysqli_query($con, "select * from car_models where carcode = '$company'");
        while($a = mysqli_fetch_array($ab)){
            ?>
            <option value="<?=$a[6]?>"><?=$a[1]?></option>
            <?php
        }
    } 
}
?>
