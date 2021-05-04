<?php
$conn = mysqli_connect("localhost","root","","upload_video_db") ;

if(!$conn)
    die("Connection failed");
else
    echo "connection established";

?>
