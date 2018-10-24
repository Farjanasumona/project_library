<?php
include"connection.php";
$id=$_GET["id"];
mysqli_query($link,"update u_reg set status='no' where u_id=$id");
 ?>
 <script type="text/javascript">
 window.location="display_student_info.php";

 </script>
