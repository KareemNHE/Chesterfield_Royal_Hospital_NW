<?php 
include_once("sql.php");

$message = "";

if (isset($_POST["submit"])) {
    videoSQL();
    $vid = $_POST['videoName'];
    $target_dir = "videoLocation//"; // Use forward slash for directory separator
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message .= "Sorry, your file was not uploaded.";
    } else {
        // Change the file name according to the video name
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        $fileName = $vid . "." . $extension;
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $fileName)) {
            $message .= "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
        } else {
            $message .= "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .pagefont {
            text-align: center;
        }

        .box3 {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .documentfont {
            margin-top: 0;
        }

        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #005EB8;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="pagefont">Add Video to Database</h1>
        <nav class="box3">
            <h2 class="documentfont">Scan / Upload Video</h2>
            <div class="row">
                <form method="post" enctype="multipart/form-data" class="upload-form">
                    <div class="column">
                        <div class="form-group">
                            <label for="videoName">Name:</label>
                            <input type="text" class="form-control" name="videoName" id="videoName" placeholder="Enter Video Name..." required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="file">Upload Video:</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <input type="submit" name="submit" value="Upload" class="btn btn-light">
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <?php echo ($message != "") ? $message : ""; ?>
            </div>
        </nav>
        <form action="admin.php" method="post">
            <input type="submit" name="submit_button" value="Back">
        </form>
    </div>
</body>
</html>
