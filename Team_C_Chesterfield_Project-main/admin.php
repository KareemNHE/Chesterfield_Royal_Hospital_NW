<!DOCTYPE html>
<?php include 'include/style.php'; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <div class="nav-bar">
        <?php include 'include/nav2.php'; ?>
    </div>
</header>
<h1>Staff Page</h1>

<body>
    <style>
        #border {
            margin: 20px;
            background-color: white;
            padding: 10px;
        }
        
        #TxtSimple {
            font-weight: bold;
            font-size: 20px;

        }
    </style>
    <div id='TxtSimple'>
        <div>
            <a href="nodePathPage.php">Node Path</a>
        </div>
        <div>
            <a href="addVid.php">Upload Video</a>
        </div>
        <div>
            <a href="pathFindingPage.php">View Videos</a>

        </div>
    </div>
</body>

</html>