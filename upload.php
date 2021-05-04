<?php
include('dbm.php');

if (isset($_POST['upload'])) {

    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "upload/" . $file_name;


    if (move_uploaded_file($temp_name, $file_destination)) {

        $q = "INSERT into video (name) VALUES ('$file_name')";


        if (mysqli_query($conn, $q)) {
            $success = "Video uploaded.";
        } else
            $failed = "upload failed";
    }

} else {
    $msg = "Please select a file to upload";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPLOAD_VID</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="mb-5 text-center">UPLOAD VIDEO </h1>
        <div class="col-lg-8 m-auto">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="file">Choose a video to upload </label>
                    <input type="file" name="file" class="form-control">
                </div>

                <?php if(isset($success)) { ?>
                <div class="alert alert-success">
                    <?php echo $success?>
                </div>
                <?php }?>

                <?php if(isset($failed)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $failed?>
                    </div>
                <?php }?>

                <?php if(isset($msg)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $msg?>
                    </div>
                <?php }?>

                <input type="submit" name="upload" value="Upload" class="btn btn-outline-success "/>
            </form>
        </div>
    </div>

</body>
</html>
