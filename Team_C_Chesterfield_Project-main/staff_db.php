<?php
require("NavigationBar.php");

// Function to get all videos from the database
function getAllVideos()
{
    // Connect to your MySQL database (replace 'your_host', 'your_user', 'your_password', 'your_database' with actual values)
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'crh_database');

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // SQL query for selecting all videos
    $sql = "SELECT * FROM videos";
    
    // Execute the query
    $result = $mysqli->query($sql);

    // Fetch all results
    $videos = $result->fetch_all(MYSQLI_ASSOC);

    // Close the connection
    $mysqli->close();

    return $videos;
}

// Function to delete a video by video ID
function deleteVideo($videoID)
{
    // Connect to your MySQL database (replace 'your_host', 'your_user', 'your_password', 'your_database' with actual values)
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'crh_database');

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // SQL query for deleting a video by video ID
    $sql = "DELETE FROM videos WHERE videoID = ?";
    
    // Prepare the statement
    $stmt = $mysqli->prepare($sql);

    // Bind parameters
    $stmt->bind_param('i', $videoID); // Assuming videoID is an integer

    // Execute the query
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}

// Get all videos from the database
$allVideos = getAllVideos();

// Check if the delete form is submitted
if (isset($_POST['deleteVideo'])) {
    $videoIDToDelete = $_POST['videoIDToDelete'];
    deleteVideo($videoIDToDelete);
    // Refresh the page after deletion to update the video list
    header("Location: DeletionConfirmation.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Videos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>All Videos</h1>

    <?php if ($allVideos) : ?>
        <table>
            <thead>
                <tr>
                    <th>Video Name</th>
                    <th>Action</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allVideos as $video) : ?>
                    <tr>
                        <td><?= htmlspecialchars($video['videoName']) ?></td>
                        <td>
                            <form action="videoplayer.php" method="get">
                                <input type="hidden" name="videoName" value="<?= urlencode($video['videoName']) ?>">
                                <button type="submit">Play</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="videoIDToDelete" value="<?= $video['videoID'] ?>">
                                <button type="submit" name="deleteVideo">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No videos found</p>
    <?php endif; ?>
</body>
</html>