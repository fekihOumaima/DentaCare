<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=$mysqli->query("select doctorName,id from doctors where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=$sql->fetch_assoc())
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{

 $sql=$mysqli->query("select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=$sql->fetch_assoc())
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

