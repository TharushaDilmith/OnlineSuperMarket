
<!-- Connecting to the Database-->

<?php
$link=mysqli_connect("localhost","root:3308","tharusha123") or diem(mysqli_error($link));
mysqli_select_db($link,"supermarket") or diem(mysqli_error($link));


?>