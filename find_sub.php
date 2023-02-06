<?php 
	include_once 'db_conn.php';
	if(isset($_POST['catID']))
	{
		$catID = $_POST['catID'];
		$sqlfind = "SELECT * from subcategory where catID = $catID";
		$res = mysqli_query($conn,$sqlfind); 
	
 ?>
<select id="subCat" name="subCat" class="form-select">
 	 <option value="" selected disabled hidden>Choose...</option>
 	 <?php 
 	 while ($row = mysqli_fetch_assoc($res)){
       ?>
    <option value="<?= $row['subCatID']?>" ><?= $row['subCatName']?></option>
	<?php } ?>
</select>
<?php 
	}
 ?>
                                                              