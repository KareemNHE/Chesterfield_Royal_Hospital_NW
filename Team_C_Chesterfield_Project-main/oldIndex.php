<?php

// Fetch distinct floor options from the database
function fetchFloors()
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $floors = [];
    $result = $db->query("SELECT DISTINCT floor FROM node");
    while ($row = $result->fetchArray()) {
        $floors[] = $row['floor'];
    }
    return $floors;
}



// Fetch distinct zones based on selected floor
function fetchZones($floor)
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $zones = [];
    $stmt = $db->prepare("SELECT DISTINCT zones FROM node WHERE floor = :floor");
    $stmt->bindParam(':floor', $floor, SQLITE3_TEXT);
    $result = $stmt->execute();
    while ($row = $result->fetchArray()) {
        $zones[] = $row['zones'];
    }
    return $zones;
}

// Fetch wards based on selected zones and floor
function fetchWards($zones, $floor)
{
    $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
    $wards = [];
    $stmt = $db->prepare("SELECT nodeName FROM node WHERE zones = :zones AND floor = :floor");
    $stmt->bindParam(':zones', $zones, SQLITE3_TEXT);
    $stmt->bindParam(':floor', $floor, SQLITE3_TEXT);
    $result = $stmt->execute();
    while ($row = $result->fetchArray()) {
        $wards[] = $row['nodeName'];
    }
    return $wards;
}



// Handle AJAX requests to fetch zones and wards
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'getZones') {
        $floor = $_GET['floor'];
        $zones = fetchZones($floor);
        echo json_encode($zones);
    } elseif ($_GET['action'] == 'getWards') {
        $zones = $_GET['zones'];
        $floor = $_GET['floor']; // Add this line to get the selected floor
        $wards = fetchWards($zones, $floor); // Update this line to pass both zones and floor
        echo json_encode($wards);
    }
    exit; // Stop further execution
}


?>




<!DOCTYPE html>
<html lang="en">
<?php include 'include/style.php'; ?>


<head>

</head>

<header>
    <div class="nav-bar">
        <?php include 'include/nav2.php'; ?>

    </div>
</header>

<body id='index' class="index">


    <style>
        #border {
            margin: 20px;
            background-color: white;
            padding: 10px;
        }

        * {
            box-sizing: border-box;
        }

        #floorSelect,
        #wardSelect,
        #zoneSelect {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 20%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #floorSelect2,
        #wardSelect2,
        #zoneSelect2 {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 20%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
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

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL option a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL option a:hover:not(.header) {
            background-color: #eee;
        }

        img {
            border-radius: 10px;
            height: 300px;
            width: auto;
            float: right;
        }


        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }


        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL option a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL option a:hover:not(.header) {
            background-color: #eee;
        }
    </style>


    <script>
        // ------------------------------------------------------FIRST DROP DOWN MENU SCRIPT------------------------------------------------------------
        // Function to update zones options based on selected floor
        function updateZoneOptions() {
            var floorSelect = document.getElementById("floorSelect");
            var zoneSelect = document.getElementById("zoneSelect");

            zoneSelect.innerHTML = ""; // Clear existing options

            var selectedFloor = floorSelect.value;

            // Fetch zones from the database based on the selected floor
            fetch('index.php?action=getZones&floor=' + selectedFloor)
                .then(response => response.json())
                .then(data => {
                    data.forEach(zones => {
                        addOption(zoneSelect, zones, zones);
                    });
                });
        }

        // Function to update ward options based on selected zones
        function updateWardOptions() {
            var zoneSelect = document.getElementById("zoneSelect");
            var wardSelect = document.getElementById("wardSelect");
            wardSelect.innerHTML = ""; // Clear existing options

            var selectedZone = zoneSelect.value;
            var selectedFloor = document.getElementById("floorSelect").value; // Get selected floor

            // Fetch wards from the database based on the selected zones and floor
            fetch('index.php?action=getWards&zones=' + selectedZone + '&floor=' + selectedFloor)
                .then(response => response.json())
                .then(data => {
                    data.forEach(wards => {
                        addOption(wardSelect, wards, wards);
                    });
                });
        }


        // Function to add option to select element
        function addOption(selectElement, value, text) {
            var option = document.createElement("option");
            option.value = value;
            option.text = text;
            selectElement.add(option);
        }

        // Confirmation function
        function confirmSelection() {
            var selectedFloor = document.getElementById("floorSelect").value;
            var selectedZone = document.getElementById("zoneSelect").value;
            var selectedWard = document.getElementById("wardSelect").value;

            alert("Selected Floor: " + selectedFloor + "\nSelected zones: " + selectedZone + "\nSelected Ward: " + selectedWard);
            // Add your logic here to handle the confirmed selection
        }

        // ------------------------------------------------------SECOND DROP DOWN MENU SCRIPT---------------------------------------------------------------------
        // Function to update start zones options based on selected start floor
        function updateZoneOptions2() {
            var floorSelect = document.getElementById("floorSelect2");
            var zoneSelect = document.getElementById("zoneSelect2");
            zoneSelect.innerHTML = ""; // Clear existing options

            var selectedFloor = floorSelect.value;

            // Fetch zones from the database based on the selected start floor
            fetch('index.php?action=getZones&floor=' + selectedFloor)
                .then(response => response.json())
                .then(data => {
                    data.forEach(zones => {
                        addOption(zoneSelect, zones, zones);
                    });
                });
        }

        // Function to update start ward options based on selected start zones
        function updateWardOptions2() {
            var zoneSelect = document.getElementById("zoneSelect2");
            var wardSelect = document.getElementById("wardSelect2");
            wardSelect.innerHTML = ""; // Clear existing options

            var selectedZone = zoneSelect.value;
            var selectedFloor = document.getElementById("floorSelect2").value; // Get selected start floor

            // Fetch wards from the database based on the selected start zones and floor
            fetch('index.php?action=getWards&zones=' + selectedZone + '&floor=' + selectedFloor)
                .then(response => response.json())
                .then(data => {
                    data.forEach(wards => {
                        addOption(wardSelect, wards, wards);
                    });
                });
        }


        // ---------------------------------------------------SEARCH BAR FUNCTION SCRIPT-----------------------------------------
        // Function to filter options based on input text
        function filterOptions(searchBarNum) {
            var input, filter, dropdown, options, i;
            input = document.getElementById("searchInput" + searchBarNum);
            filter = input.value.toUpperCase();
            dropdown = document.getElementById("dropdown" + searchBarNum);
            options = dropdown.getElementsByTagName("option");
            for (i = 0; i < options.length; i++) {
                if (options[i].text.toUpperCase().indexOf(filter) > -1) {
                    options[i].style.display = "";
                } else {
                    options[i].style.display = "none";
                }
            }
        }

        // Function to hide dropdown if no text is entered
        function hideDropdown(searchBarNum) {
            var input = document.getElementById("searchInput" + searchBarNum);
            var dropdown = document.getElementById("dropdown" + searchBarNum);
            if (input.value === "") {
                dropdown.selectedIndex = -1; // Deselect any selected option
                dropdown.style.display = "none";
            }
        }

        // Function to select an option from the dropdown
        function selectOption(searchBarNum) {
            var input = document.getElementById("searchInput" + searchBarNum);
            var dropdown = document.getElementById("dropdown" + searchBarNum);
            input.value = dropdown.value;
        }

        // Function to perform search
        function search() {
            var input1 = document.getElementById("searchInput1").value;
            var input2 = document.getElementById("searchInput2").value;
            // Add your logic here to perform the search based on input1 and input2
        }

        //////////////////////////////////////////////////////////////////////////
        // Function to show dropdown with filtered options
        function showDropdown(searchBarNum) {
            var input, filter, dropdown, options, i;
            input = document.getElementById("searchInput" + searchBarNum);
            filter = input.value.toUpperCase();
            dropdown = document.getElementById("dropdown" + searchBarNum);
            if (filter === "") {
                dropdown.style.display = "none";
                return;
            }
            dropdown.style.display = "block";
            // Fetch options from the server
            fetchOptionsFromServer(filter, dropdown);
        }

        // Function to hide dropdown if no text is entered
        function hideDropdown(searchBarNum) {
            var input = document.getElementById("searchInput" + searchBarNum);
            var dropdown = document.getElementById("dropdown" + searchBarNum);
            if (input.value === "") {
                dropdown.style.display = "none";
            }
        }

        // Function to fetch options from the server and update dropdown
        function fetchOptionsFromServer(searchTerm, dropdown) {
            console.log("Fetching options for search term:", searchTerm);
            fetch('index.php?action=getOptions&searchTerm=' + searchTerm)
                .then(response => response.json())
                .then(data => {
                    console.log("Received options:", data);
                    updateDropdown(data, dropdown);
                })
                .catch(error => {
                    console.error("Error fetching options:", error);
                });
        }


        // Function to update dropdown with fetched options
        function updateDropdown(options, dropdown) {
            dropdown.innerHTML = ""; // Clear existing options
            options.forEach(option => {
                var optionElement = document.createElement("option");
                optionElement.value = option;
                optionElement.text = option;
                dropdown.add(optionElement);
            });
        }

        // Function to select an option from the dropdown
        function selectOption(searchBarNum) {
            var input = document.getElementById("searchInput" + searchBarNum);
            var dropdown = document.getElementById("dropdown" + searchBarNum);
            input.value = dropdown.value;
        }

        // Function to perform search
        function search() {
            var input1 = document.getElementById("searchInput1").value;
            var input2 = document.getElementById("searchInput2").value;
            // Add your logic here to perform the search based on input1 and input2
        }


        <?php
        // Fetch options from the database based on the search input
        function fetchOptions($searchTerm)
        {
            $db = new SQLite3('C:\\xampp\\htdocs\\CRHTeam_Project\\Team_C_Chesterfield_Project-main\\database\\chesterfield.db');
            $options = [];
            $stmt = $db->prepare("SELECT nodeName FROM node WHERE nodeName LIKE :searchTerm");
            $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', SQLITE3_TEXT);
            $result = $stmt->execute();
            while ($row = $result->fetchArray()) {
                $options[] = $row['nodeName'];
            }
            return $options;
        }


        // Handle AJAX requests to fetch options
        if (isset($_GET['action']) && $_GET['action'] == 'getOptions' && isset($_GET['searchTerm'])) {
            $searchTerm = $_GET['searchTerm'];
            $options = fetchOptions($searchTerm);
            echo json_encode($options);
            exit; // Stop further execution
        }

        ?>
    </script>

    <?php

    // Function to filter options based on input text
    function filterOptions($searchBarNum)
    {
        $input = $_POST["searchInput" . $searchBarNum];
        $filter = strtoupper($input);
        $options = $_POST["dropdown" . $searchBarNum];
        foreach ($options as $option) {
            if (strpos(strtoupper($option), $filter) !== false) {
                echo "<option value='$option'>$option</option>";
            }
        }
    }

    // Function to hide dropdown if no text is entered
    function hideDropdown($searchBarNum)
    {
        $input = $_POST["searchInput" . $searchBarNum];
        $dropdown = $_POST["dropdown" . $searchBarNum];
        if (empty($input)) {
            $dropdown = [];
        }
    }

    // Function to perform search
    function search()
    {
        $input1 = $_POST["searchInput1"];
        $input2 = $_POST["searchInput2"];
        // Add your logic here to perform the search based on input1 and input2
    }

    // Function to fetch options from the server and update dropdown
    function fetchOptionsFromServer($searchTerm)
    {
        $options = []; // Fetch options from the server based on $searchTerm
        return $options;
    }

    // Function to show dropdown with filtered options
    function showDropdown($searchBarNum)
    {
        $input = $_POST["searchInput" . $searchBarNum];
        $filter = strtoupper($input);
        if (empty($filter)) {
            return;
        }
        $options = fetchOptionsFromServer($filter);
        foreach ($options as $option) {
            echo "<option value='$option'>$option</option>";
        }
    }

    // Handle AJAX requests to filter options
    if (isset($_POST['action']) && $_POST['action'] == 'filterOptions') {
        $searchBarNum = $_POST['searchBarNum'];
        filterOptions($searchBarNum);
        exit; // Stop further execution
    }

    // Handle AJAX requests to hide dropdown
    if (isset($_POST['action']) && $_POST['action'] == 'hideDropdown') {
        $searchBarNum = $_POST['searchBarNum'];
        hideDropdown($searchBarNum);
        exit; // Stop further execution
    }

    // Handle AJAX requests to perform search
    if (isset($_POST['action']) && $_POST['action'] == 'search') {
        search();
        exit; // Stop further execution
    }

    ?>



    <div id='border'>
        <h1>Don't know where you are?</h1>


        <h3>Search and select your current location</h3>


        <!-- --------------------------------------------FIRST DROP MENU--------------------------------------------------------- -->

        &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="floorSelect"><b>Select floor:</b></label>
        <select id="floorSelect" onchange="updateZoneOptions()">
            <?php
            // Populate floor dropdown
            $floors = fetchFloors();
            foreach ($floors as $floor) {
                echo "<option value='$floor'>$floor</option>";
            }
            ?>
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="zoneSelect"><b>Select zone:</b></label>
        <select id="zoneSelect" onchange="updateWardOptions()">
            <!-- Options will be dynamically added based on the selected floor -->
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="wardSelect"><b>Select ward:</b></label>
        <select id="wardSelect">
            <!-- Options will be dynamically added based on the selected zones -->
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <button id="confirmButton" onclick="confirmSelection()">Confirm</button>

        <br>
        <br>

        <t><b>Or input here:</b></t>
        <!-- 1st Search Bar -->
        <br>
        <br>

        <input type="text" id="searchInput1" onkeyup="filterOptions(1)" onblur="hideDropdown(1)" onchange="filterOptions(1)" placeholder="Search for ward..." title="Type in a name">
        <select id="dropdown1" style="display:none;">
            <!-- Options will be dynamically added here -->
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <button id="searchButton" onclick="performSearch()">Search</button>

        <!-- --------------------------------------------SECOND DROP MENU------------------------------------------------------------ -->

        <picture>
            <source media="(min-width: 650px)" srcset="image/Corridoor1.jpg">
            <img src="image/Corridoor1.jpg">
        </picture>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h3>Where would you like to go to?</h3>

        &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="floorSelect2"><b>Select floor:</b></label>
        <select id="floorSelect2" onchange="updateZoneOptions2()">
            <?php
            // Populate start floor dropdown
            $floors = fetchFloors();
            foreach ($floors as $floor) {
                echo "<option value='$floor'>$floor</option>";
            }
            ?>
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="zoneSelect2"><b>Select zone:</b></label>
        <select id="zoneSelect2" onchange="updateWardOptions2()">
            <!-- Options will be dynamically added based on the selected start floor -->
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <label for="wardSelect2"><b>Select ward:</b></label>
        <select id="wardSelect2">
            <!-- Options will be dynamically added based on the selected start zones -->
        </select>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        <button id='confirmButton' onclick="confirmSelection()">Confirm</button>

        <br>
        <br>

        <t><b>Or input here:</b></t>
        <!-- 2nd Search Bar -->
        <!-- Second Search Bar
<input type="text" id="searchInput2" onkeyup="showDropdown(2)" onblur="hideDropdown(2)" placeholder="Search for ward names.." title="Type in a name">
<select id="dropdown2" style="display:none;" onchange="selectOption(2)">
    Options will be dynamically added here
</select> -->
        <br>
        <br>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


        <ul id="myUL" hidden autocomplete="on">
            <option><a href="#">Main Entrance, Reception</a></option>
            <option><a href="#">Emergency Dept Entrance</a></option>
            <option><a href="#">Scarsdale Wing Entrance</a></option>
            <option><a href="#">Nightingale Wing Entrance</a></option>
            <option><a href="#">Visitors’ Entrance</a></option>
            <option><a href="#">Hartington Unit Entrance</a></option>
            <option><a href="#">The Den Entrance</a></option>
            <option><a href="#">NGS Macmillan Unit</a></option>
            <option><a href="#">Breast Screening</a></option>
            <option><a href="#">Emergency Department</a></option>
            <option><a href="#">Medical Physics</a></option>
            <option><a href="#">Operating Theatres</a></option>
            <option><a href="#">Osteoporosis Centre</a></option>
            <option><a href="#">Pre-Assessment Clinic & Endoscopy Unit</a></option>
            <option><a href="#">Outpatient Suite 5</a></option>
            <option><a href="#">Dietetics</a></option>
            <option><a href="#">Occupational Therapy</a></option>
            <option><a href="#">Orthotics</a></option>
            <option><a href="#">Physiotherapy</a></option>
            <option><a href="#">Podiatry</a></option>
            <option><a href="#">Speech & Language Therapy</a></option>
            <option><a href="#">Outpatient Suite 8</a></option>
            <option><a href="#">Fracture Clinic</a></option>
            <option><a href="#">Orthopaedics</a></option>
            <option><a href="#">Plaster Suite</a></option>
            <option><a href="#">X-ray & Diagnostic Imaging</a></option>
            <option><a href="#">CT Scanning</a></option>
            <option><a href="#">Magnetic Resonance Imaging (MRI)</a></option>
            <option><a href="#">Ultrasound</a></option>
            <option><a href="#">Antenatal Clinic</a></option>
            <option><a href="#">Cavendish Suite (Renal Dialysis)</a></option>
            <option><a href="#">Chesterfield Birth Centre</a></option>
            <option><a href="#">Holywell Day Care Ward</a></option>
            <option><a href="#">Neonatal Unit</a></option>
            <option><a href="#">Snax@theRoyal</a></option>
            <option><a href="#">Bereavement Services Lower Ground Floor</a></option>
            <option><a href="#">Cardio-Respiratory Department</a></option>
            <option><a href="#">Chapel</a></option>
            <option><a href="#">Chaplains Office</a></option>
            <option><a href="#">Diabetes Education Centre</a></option>
            <option><a href="#">Hospedia</a></option>
            <option><a href="#">Medical Illustration</a></option>
            <option><a href="#">Outpatient Suite 1</a></option>
            <option><a href="#">Adult Audiology</a></option>
            <option><a href="#">Anti-coagulation Clinic</a></option>
            <option><a href="#">General Surgery</a></option>
            <option><a href="#">Pharmacy</a></option>
            <option><a href="#">Urology</a></option>
            <option><a href="#">Outpatient Suite 2</a></option>
            <option><a href="#">Audiology (ENT)</a></option>
            <option><a href="#">Community Dentistry</a></option>
            <option><a href="#">Ear, Nose & Throat (ENT)</a></option>
            <option><a href="#">Maxillofacial Surgery</a></option>
            <option><a href="#">Newborn Hearing Clinic</a></option>
            <option><a href="#">Othodontics</a></option>
            <option><a href="#">Outpatient Suite 3</a></option>
            <option><a href="#">MRSA Screening</a></option>
            <option><a href="#">Dermatology</a></option>
            <option><a href="#">Medical Outpatients</a></option>
            <option><a href="#">Outpatient Suite 6</a></option>
            <option><a href="#">Pain Management</a></option>
            <option><a href="#">Outpatient Suite 7</a></option>
            <option><a href="#">Bereavement Office and Foot Clinic</a></option>
            <option><a href="#">Anaesthetic Suite</a></option>
            <option><a href="#">Barnes Ward</a></option>
            <option><a href="#">Basil Ward</a></option>
            <option><a href="#">Clinical Decision Unit (CDU)</a></option>
            <option><a href="#">Devonshire Ward</a></option>
            <option><a href="#">Elmton Ward</a></option>
            <option><a href="#">Emergency Management Unit (EMU)</a></option>
            <option><a href="#">High Dependency Unit (HDU)</a></option>
            <option><a href="#">Intensive Therapy Unit (ITU)</a></option>
            <option><a href="#">Medical Engineering</a></option>
            <option><a href="#">Patient Discharge lounge</a></option>
            <option><a href="#">Staveley Ward</a></option>
            <option><a href="#">Outpatient Suite 4</a></option>
            <option><a href="#">Medical Day-Case Unit</a></option>
            <option><a href="#">Medical Out-Patients</a></option>
            <option><a href="#">Outpatient Suite 9</a></option>
            <option><a href="#">NGS Macmillan Unit</a></option>
            <option><a href="#">Elizabeth Ward</a></option>
            <option><a href="#">Hasland Ward</a></option>
            <option><a href="#">Murphy Ward</a></option>
            <option><a href="#">Portland Ward</a></option>
            <option><a href="#">Robinson Ward</a></option>
            <option><a href="#">The Chesterfield Eye Centre</a></option>
            <option><a href="#">Children’s Hearing Services</a></option>
            <option><a href="#">Children’s Outpatients</a></option>
            <option><a href="#">The Den (all Children’s)</a></option>
            <option><a href="#">Ashover Ward</a></option>
            <option><a href="#">Durrant Ward</a></option>
            <option><a href="#">Eastwood Ward</a></option>
            <option><a href="#">Manvers Ward</a></option>
            <option><a href="#">Markham Ward</a></option>
            <option><a href="#">Pearson Ward</a></option>
            <option><a href="#">Ridgeway Ward</a></option>
            <option><a href="#">Speedwell Therapy Unit</a></option>
            <option><a href="#">Margaret Grieve Colposcopy Suite</a></option>
            <option><a href="#">Trinity Ward</a></option>
            <option><a href="#">Womens’ Health Unit</a></option>

        </ul>



        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div>
        <?php include "include/foot.php" ?>

        <?php include "accessibility.php" ?>
    </div>
</body>

</html>







<!-- 

<div class="header-inline-group bottom">
                                                                    <div class="header-search header-mobile-tool" id="header-mobile-tool-search">
                                        <div class="core-style">
 <div class="search-weighted default predictive" >

            <div class="search-tool">
            <form method="GET" action="https://www.chesterfieldroyal.nhs.uk/search#search" class="icon" role="search">
                                <div class="inline-submit">
                    <div class="form-group input keyword-input">
                        <label for="query-939" class="visually-hidden">Search this website</label>
                        <input data-search-element="true" data-action="/ajax_search/ajax_keypress/939" name="query" id="query-939" type="text" value="" placeholder="Search this website" />
                    </div>
                    <button data-search-element="true" type="submit" class="submit-btn"><i class="fas fa-search" aria-hidden="true"></i><span class="visually-hidden">Search</span></button>
                </div>

                <div class="ajax-results-holder" aria-live="polite"></div>
            </form>
        </div>
    
    
    
</div>
                                        </div>
                                        <button class="btn-close d-lg-none" aria-expanded="false">
                                            <span class="visually-hidden">Close search</span>
                                        </button>
                                    </div>
                                                                                                    <div class="header-intranet header-mobile-tool" id="header-mobile-tool-intranet">
                                        <div class="core-style">
                                            

       </div>
    
</style> -->