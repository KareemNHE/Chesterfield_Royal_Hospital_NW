
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/style.php" ?>
    <?php include "include/nav.php" ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Navigation</title>
</head>
<header>
    <div class = "nav-bar"></div>
</header>
<body>

<?php


class Node {
    public $value;
    public array $edges = [];

    public function __construct($v) {
        $this->value = $v;
    }
}



class Graph {
    public array $nodes = [];

    public function addNode(Node $n) {
        $this->nodes[] = $n;
    }

    public function getOptimalRoute(array $routes) {
        if (empty($routes)) {
            return null;
        }
    
        $minDistance = PHP_INT_MAX;
        $optimalRoute = null;
        
        foreach ($routes as $route) {
            if ($route['distance'] < $minDistance) {
                $minDistance = $route['distance'];
                $optimalRoute = $route;
            }
        }
    
        return $optimalRoute;
    }
    

    public function setEdge(Node $fromNode, Node $toNode, int $distance) {
        $fromNode->edges[] = [$toNode, $distance];
        $toNode->edges[] = [$fromNode, $distance]; // Assuming edges are bidirectional for simplicity
       
    }


    
    public function findAllRoutes(Node $startNode, Node $endNode) {
        $allRoutes = [];
        $this->findAllRoutesHelper($startNode, $endNode, [$startNode], 0, $allRoutes);
        return $allRoutes;
    }

    private function findAllRoutesHelper(Node $current, Node $endNode, array $path, int $totalDistance, array &$allRoutes) {
        if ($current == $endNode) {
            $allRoutes[] = ['path' => $path, 'distance' => $totalDistance];
            return;
        }

        foreach ($current->edges as $edge) {
            $neighbor = $edge[0];

            if (!in_array($neighbor, $path)) {
                $newPath = $path;
                $newPath[] = $neighbor;
                $this->findAllRoutesHelper($neighbor, $endNode, $newPath, $totalDistance + $edge[1], $allRoutes);
            }
        }
    }
}

function getNodeByName(array $nodes, string $name) {
    foreach ($nodes as $node) {
        if ($node->value === $name) {
            return $node; // Return the node if its name matches the desired name
        }
    }
    return null; // Return null if no node with the desired name is found
}
// Example hospital layout
function getNodes() {
    $db = new SQLite3('C:\\Users\\Public\\data\\chesterfield.db');
    $sql = "SELECT * FROM node"; 
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}
function getStart() {
    $db = new SQLite3('C:\\Users\\Public\\data\\chesterfield.db');
    $sql = "SELECT StartNode FROM Links"; 
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}

function getEnd() {
    $db = new SQLite3('C:\\Users\\Public\\data\\chesterfield.db');
    $sql = "SELECT EndNode FROM Links"; 
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}

function getWeight() {
    $db = new SQLite3('C:\\Users\\Public\\data\\chesterfield.db');
    $sql = "SELECT Weights FROM Links"; 
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = array(); // Initialize the array
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }
    return $arrayResult;
}

function getVids(string $Start, string $End) {
    $db = new SQLite3('C:\\Users\\Public\\data\\chesterfield.db');
    // Prepare the SQL statement with placeholders
    $sql = "SELECT videoID FROM Links WHERE StartNode = :startnode AND EndNode = :endnode";
    $stmt = $db->prepare($sql);

    // Bind values to the placeholders
    $stmt->bindParam(':startnode', $Start, SQLITE3_TEXT);
    $stmt->bindParam(':endnode', $End, SQLITE3_TEXT);

    // Execute the prepared statement
    $result = $stmt->execute();

    // Return the result set
    return $result;}
function getPairsInOptimalRoute(array $optimalRoute): array {
    $pairs = [];
    if (!empty($optimalRoute)) {
        $pathNodes = $optimalRoute['path'];
        for ($i = 0; $i < count($pathNodes) - 1; $i++) {
            $pairs[] = [$pathNodes[$i]->value, $pathNodes[$i + 1]->value];
        }
    }
    return $pairs;
}

// Retrieve nodes from the database
$nodeData = getNodes();

// Create a new graph
$graph = new Graph();

// Add nodes to the graph
foreach ($nodeData as $newNode) {
    $nodeName = $newNode['nodeName'];
    $node = new Node($nodeName);
    $graph->addNode($node);
}

// Retrieve start nodes and end nodes
$startNodes = getStart();
$endNodes = getEnd();
$weights = getWeight();

// Iterate over start nodes and retrieve corresponding end nodes and weights
foreach ($startNodes as $index => $start) {
    // Ensure that there are corresponding end nodes and weights
    if (isset($endNodes[$index]) && isset($weights[$index])) {
        // Find the corresponding Node objects
        $startNode = getNodeByName($graph->nodes, $start['StartNode']);
        $endNode = getNodeByName($graph->nodes, $endNodes[$index]['EndNode']);
        $weight = (int) $weights[$index]['Weights']; // Adjust the column name based on your database schema

        // Set edge with the corresponding weight
        $graph->setEdge($startNode, $endNode, $weight);
    }
}


// Form for user input
echo "<form method='post'>";
echo "<label for='start'>Select starting point:</label>";
echo "<select name='start'>";
foreach ($graph->nodes as $node) {
    echo "<option value='{$node->value}'>{$node->value}</option>";
}
echo "</select>";

echo "<label for='end'>Select end point:</label>";
echo "<select name='end'>";
foreach ($graph->nodes as $node) {
    echo "<option value='{$node->value}'>{$node->value}</option>";
}
echo "</select>";

echo "<input type='submit' value='Find Routes'>";
echo "</form>";

// Process user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $startLocation = $_POST['start'];
    $endLocation = $_POST['end'];

    $startNode = null;
    $endNode = null;

    foreach ($graph->nodes as $node) {
        if ($node->value === $startLocation) {
            $startNode = $node;
        }

        if ($node->value === $endLocation) {
            $endNode = $node;
        }
    }

    if ($startNode && $endNode) {
        $allRoutes = $graph->findAllRoutes($startNode, $endNode);

        echo "<h2>All Routes from {$startLocation} to {$endLocation}:</h2>";

        if (empty($allRoutes)) {
            echo "<p>No routes found.</p>";
        } else {
            $optimalRoute = $graph->getOptimalRoute($allRoutes);
             
            $optimalPairs = getPairsInOptimalRoute($optimalRoute);

            for ($i = 0; $i < count($optimalPairs); $i++) {
                $Start = $optimalPairs[$i][0];
                $End = $optimalPairs[$i][1];
            
                // Call the getVids function to retrieve the video IDs
                $result = getVids($Start, $End);
            
                // Fetch the video IDs from the result object
                $Video[$i] = [];
                while ($row = $result->fetchArray()) {
                    $Video[$i][] = $row['videoID'];
                }
            
            
            // Loop through each Video array
            
            }
                echo "<h3>Optimal Route:</h3>";
                if (!empty($optimalRoute)) {
                    echo "<p>Route: ";
                    foreach ($optimalRoute['path'] as $node) {
                        echo "{$node->value} ";
                    }
                    echo " - Distance: {$optimalRoute['distance']}</p>";
                    echo "Optimal Pairs: <br>";
                    echo "<pre>";
                    print_r($optimalPairs);
                    echo "</pre>";
                } else {
                    echo "<p>No optimal route found.</p>";
                }


            echo "<h3>All Routes:</h3>";
            foreach ($allRoutes as $route) {
                echo "<p>Route: ";
                foreach ($route['path'] as $node) {
                    echo "{$node->value} ";
                }
                echo " - Distance: {$route['distance']}</p>";
            }
        }
    } else {
        echo "<p>Invalid input. Please select valid starting and end points.</p>";
    }
}



if (!empty($Video)) {
    echo '<form action="videoPlayerPage.php" method="get">';
    foreach ($Video as $item) {
        foreach ($item as $videoID) {
            echo '<input type="hidden" name="videoID[]" value="'.$videoID.'">';
        }
    }
    echo '<input type="submit" name="display" value="Display" class="btn btn-action">';
    echo '</form>';
}
?>


</body>
</html>