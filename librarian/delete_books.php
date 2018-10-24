<?php
include"connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from add_books where id=$id and issue_status='no'");
 ?>
 <script type="text/javascript">
 window.location="display_books.php";

 </script>
