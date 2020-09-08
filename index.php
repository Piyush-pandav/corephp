<?php
require_once('connection.php');
$getdata = "select * from student";
$result = mysqli_query($conn,$getdata);
if(isset($_GET['getid'])){	
	$select = "select * from student where id='".$_GET['getid']."'";
	$frecord = mysqli_query($conn,$select);
	$ddd = mysqli_fetch_assoc($frecord);	
}
?>
<html>
<form action="logic.php" method="post">
	<input type="hidden" name="hid_id" id="hid_id" value="<?php if(isset($ddd['id'])){echo $ddd['id']; }else{}?>">
	<input type="text" name="txt_name" id="txt_name" value="<?php if(isset($ddd['name'])){echo $ddd['name']; }else{}?>">
	<input type="submit" name="btn_submit" id="btn_submit" value="submit">
</form>
<table>
	<thead>
		<th>id</th>
		<th>name</th>
		<th>action</th>
	</thead>
		<?php
			while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><a href="index.php?getid=<?php echo $row['id'] ?>">edit</a></td>
					</tr>
					<?php
			}
		?>
	<tbody></tbody>
</table>

</html>



