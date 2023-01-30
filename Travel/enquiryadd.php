<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"travel");
	// $query = "insert into enquiry values(null,'$_POST[firstname]','$_POST[lastname]','$_POST[country]','$_POST[subject]')";
    // $query="INSERT INTO `enquiry`(`first_name`, `last_name`, `country`, `subject`) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[country]','$_POST[subject]')";
    // $query="INSERT INTO `enquiry`(`S.no`, `first_name`, `last_name`, `country`, `subject`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]'";

    $query= "INSERT INTO `enquiry`(`first_name`, `last_name`, `country`, `subject`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[country]','$_POST[subject]')";

	$query_run = mysqli_query($connection,$query);
   
?>
<script type="text/javascript">
    alert("Registration Successful....You May Login Now");
    window.location.href="index.php";
</script>