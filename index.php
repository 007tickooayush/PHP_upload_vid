<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3 mb-5">
        <h1>All Videos:</h1>
        <hr/>
        <a href="upload.php" class="btn btn-outline-primary mt-2">Upload</a>
        
        <div class="row">
            <?php
            include ('dbm.php');

            $q = "SELECT * FROM video";

            $query = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_array($query)) { ?>

            <div class="col-md-4">
                <video width="100%" controls>
                    <source src="<?php echo 'upload/'.$row['name'] ?>">
                </video>
            </div>
            <?php } ?>
        </div>
        
    </div>
</body>
</html>
<?php


?>
