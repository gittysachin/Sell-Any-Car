<?php
if(isset($_POST["company"])){
    // Capture selected State
    $company = $_POST["company"];
     
    // Define State and city array
    $companyArr = array(
                    "Renault"=> array("Captur","Duster","KWID","Lodgy"),
		"Suzuki"=>array("Swift","Dzire","Alto","Ciaz","Ertiga"),
		"BMW"=>array("3 Series","X5","X3","i8","Z4"),
		"Jaguar"=>array("XE","XF Sportbrake","F-Type Coupe","F-Pace"),
		"Jeep"=>array("Wrangler","Compass","Grand"),
		"Audi"=>array("A6","A5","Q3","R8","RS 7 Sportback"),
        "Volkswagen"=>array("Tiguan","Polo","Passat","Vento","Ameo")
                );
     
    // Display city dropdown based on State name
    if($company !== 'First Select Company'){
        echo "<select class='search_form_select'>";
        echo "<option selected disabled>Select Model</option>";
        foreach($companyArr[$company] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>
