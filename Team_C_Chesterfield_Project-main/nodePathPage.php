<?php
include_once("sql.php");

// Function to get paths from the database
function getPaths()
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $sql = "SELECT * FROM node";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}
function getVideoID($videoName)
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $sql = "SELECT videos.videoID FROM videos WHERE videos.videoName = :videoName";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':videoName', $videoName, SQLITE3_TEXT);
    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_ASSOC);
    return $row['videoID'];
}
function getVideos()
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $sql = "SELECT * FROM videos";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}
$videos = getVideos();
function insertLink($StartNode, $EndNode, $weights, $videoName)
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $sql = "INSERT INTO Links (StartNode, EndNode, weights, videoID) VALUES (:StartNode, :EndNode, :weights, :videoID)";
    $stmt = $db->prepare($sql);
    $videoID = getVideoID($videoName); // Set $videoID before binding


    $stmt->bindParam(':StartNode', $StartNode, SQLITE3_TEXT);
    $stmt->bindParam(':EndNode', $EndNode, SQLITE3_TEXT);
    $stmt->bindParam(':weights', $weights, SQLITE3_TEXT);
    $stmt->bindParam(':videoID', $videoID, SQLITE3_TEXT); // Then bind $videoID

    // Execute the SQL statement
    $stmt->execute();

    // Check if the insertion was successful
    return $stmt ? true : false;
}


// Function to insert a node into the database
function insertNode($nodeName, $floor, $zones)
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $sql = "INSERT INTO node (nodeName, floor, zones) VALUES (:nodeName, :floor, :zones)";
    $stmt = $db->prepare($sql);

    // Assuming $nodeName, $floor, and $zones are the values you want to insert

    $stmt->bindParam(':nodeName', $nodeName, SQLITE3_TEXT);
    $stmt->bindParam(':floor', $floor, SQLITE3_TEXT);
    $stmt->bindParam(':zones', $zones, SQLITE3_TEXT);

    $stmt->execute();

    // Execute the SQL statement
    $stmt->execute();

    // Check if the insertion was successful
    return $stmt ? true : false;
}


$nodes = getPaths();

$message = ""; // Initialize message variable

// Handle node upload form submission
if (isset($_POST["upload"])) {
    $nodeName = $_POST['nodeName'];
    $floor = $_POST['Floor'];
    $zones = $_POST['Zone']; // Assuming you have a StartNode field somewhere
    // Insert the node
    insertNode($nodeName, $floor, $zones);
}

// Handle link submission
if (isset($_POST["submit"])) {
    // Process file upload first


    // Then handle link insertion
    if (isset($_POST['StartNode'], $_POST['EndNode'], $_POST['weights'], $_POST['videoName'])) {
        $StartNode = $_POST['StartNode'];
        $EndNode = $_POST['EndNode'];
        $weights = $_POST['weights'];
        $videoName = $_POST['videoName'];
        $videoID = getVideoID($videoName); // Get videoID using the videoName
        echo "Video ID: $videoID";

        // Insert the link
        $added = insertLink($StartNode, $EndNode, $weights, $videoName);

        if ($added) {
            $message .= " Link insertion Success";
        } else {
            $message .= " Link insertion Error";
        }
    } else {
        $message .= " Please fill out all the required fields for link submission.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/style.php'; ?>

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



<body>


    <style>
        * {
            box-sizing: border-box;
        }

        #SLCTBox {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 20%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #TxtBox {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 20%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #TxtSimple {
            font-weight: bold;
            font-size: 20px;

        }

        #confirmButton,
        #searchButton {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 8%;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 20px 12px 20px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #searchInput1 {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 60%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

    </style>


    <h1>Enter route</h1>
    <tr>
        <td>
            <form method="post" enctype="multipart/form-data">
                <label id='TxtSimple' for="nodeName">New location:</label>
                &nbsp; &nbsp; &nbsp; 
                <input type="text" id='TxtBox' name="nodeName">
                &nbsp; &nbsp; &nbsp; 
                <select id='SLCTBox' name="Floor">
                    <option value="First Floor">Lower floor</option>
                    <option value="Second Floor">Ground floor</option>
                    <option value="Third Floor">First floor</option>
                </select>
                &nbsp; &nbsp; &nbsp; 
                <select id='SLCTBox' name="Zone">
                    <option value="Green">Green</option>
                    <option value="Blue">Blue</option>
                    <option value="Pink">Pink</option>
                    <option value="Orange">Orange</option>
                    <option value="Yellow">Yellow</option>
                    
                    <input type="submit" id='confirmButton' name="upload" value="Add location" class="btn btn-action"> 
            </form>
        </td>
    </tr>
    <form method="post">
        <br>
        <br>

        <tr>
            <td class="tbContents">
                <label id='TxtSimple' for="StartNode">Start location:</label>
                &nbsp; &nbsp; &nbsp; 
                <select id='SLCTBox' name="StartNode" id="StartNode">
                    <?php foreach ($nodes as $node) : ?>
                        <option value="<?php echo $node['nodeName']; ?>"><?php echo $node['nodeName']; ?></option>
                    <?php endforeach; ?>
                </select>
                
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td class="tbContents">
                <label id='TxtSimple' for="EndNode">End location:</label>
                &nbsp; &nbsp; &nbsp; 
                <select id='SLCTBox' name="EndNode" id="EndNode">
                    <?php foreach ($nodes as $node) : ?>
                        <option value="<?php echo $node['nodeName']; ?>"><?php echo $node['nodeName']; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td class="tbContents">
                <label id='TxtSimple' for="weights">Distance:</label>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <input id='SLCTBox' type="text" name="weights" placeholder="Enter Distance">
            </td>
        </tr>
        <br>
        <br>
        <td class="tbContents">
            <label id='TxtSimple' for="EndNode">Select video:</label>
            &nbsp; &nbsp; &nbsp; 
            <select id='SLCTBox' name="videoName" id="videName">
                <?php foreach ($videos as $video) : ?>
                    <option value="<?php echo $video['videoName']; ?>"><?php echo $video['videoName']; ?></option>
                <?php endforeach; ?>
                <input type="submit" id='confirmButton' name="submit" value="Confirm" class="btn btn-light">

            </select>
        </td>
        </tr>


        </div>
    </form>

    <div>
        <?php echo ($message != "") ? $message : ""; ?>
    </div>
</body>

</html>