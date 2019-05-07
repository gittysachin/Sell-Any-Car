<h3 style="color : red">Models</h3><br>
<?php 
					$car_company = $_REQUEST["car_company"];	
	 				include("db.php");
	 				$gh = mysqli_query($con,"select * from cars where car_company = '$car_company'");
	 				$g=mysqli_fetch_array($gh);
          ?>
          <table class="table-responsive table-hover" width="95%" align="center">
                        <tr><th>Models</th> 
                          <th></th><th></th><th></th><th></th><th>Action</th></tr>
                      <?php
                      $df = mysqli_query($con,"select * from car_models where carcode = '$g[1]'");
                      while($d=mysqli_fetch_array($df)){
                        ?>
                        <tr id="<?=$d[3]?>"><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$d[1]?>" value="<?=$d[1]?>"></td><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$d[1]?>" value="<?=$d[2]?>"></td><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$d[1]?>" value="<?=$d[3]?>"></td><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$d[1]?>" value="<?=$d[4]?>"></td><td><input required type="text" disabled class="form-control input-sm edit" id="edit<?=$d[1]?>" value="<?=$d[5]?>"></td><td><button class="btn btn-warning btn-sm editit" id="<?=$p[1]?>">Edit</button></td><td><button class="btn btn-danger btn-sm deleteit" id="<?=$p[0]?>">Delete</button></td></tr>
                        <?php
                      }
                    ?>
                    </table>
          <br>