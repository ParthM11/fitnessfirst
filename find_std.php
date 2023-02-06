
<?php 
	include_once 'db_conn.php';
	if(isset($_POST['locationID']))
	{
		$locationID = $_POST['locationID'];
		$sqlfind = "SELECT * from student as  s inner join studentdetails as sd on sd.stdID = s.stdID where locationID= $locationID";

		$res = mysqli_query($conn,$sqlfind); 
	
 ?>

<select id="student" name="student" class="form-select">
 	 <option value="" selected disabled hidden>Choose...</option>
 	 <?php 
 	 while ($row = mysqli_fetch_assoc($res)){
       ?>
    <option value="<?= $row['stdID']?>" ><?= $row['stdfName']?></option>
	<?php } ?>
</select>
<?php 
	}
 ?>
                                                                                                                            
