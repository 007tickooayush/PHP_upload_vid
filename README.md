# PHP_upload_vid

## Functioning:

The project uses basic php working integrated with MySQL to upload files on a server alloted by the developer.
At first the homepage [index.php](https://github.com/007tickooayush/PHP_upload_vid/blob/master/index.php) is used to display all the videos that were uploaded.
Then for uploading the video [upload.php](https://github.com/007tickooayush/PHP_upload_vid/blob/master/upload.php) is used in which all the videos are uploaded to the database.

## MYSQL integration and commands

### PHP integration:

```php
$conn = mysqli_connect("localhost","root","","upload_video_db") ;
```

for uploading (inserting):

```php
$q = "INSERT into video (name) VALUES ('$file_name')";

if (mysqli_query($conn, $q)) {
            $success = "Video uploaded.";
        } else
            $failed = "upload failed";
```

for viewing files on page:

```php
$q = "SELECT * FROM video";

$query = mysqli_query($conn, $q);

```

