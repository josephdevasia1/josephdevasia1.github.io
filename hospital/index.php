<?php
// Assuming you have established a database connection
$servername = "127.0.0.1:3306";
$username = "u598634345_root";
$dbname = "u598634345_doclist";

// Create connection
$conn = new mysqli($servername, $username, "Dijudev@1", $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define arrays to store variables for each category
$medicine = array();
$surgery = array();
$orthopedics = array();
$omfs = array();
$ent = array();
$redzone = array();
$oph = array();
$special = array();
$stroke = array();

// Retrieve data for Medicine category
$sql = "SELECT * FROM medicine_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $medicine = $result->fetch_assoc();
}

// Retrieve data for Surgery category
$sql = "SELECT * FROM surgery_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $surgery = $result->fetch_assoc();
}

// Retrieve data for Orthopedics category
$sql = "SELECT * FROM orthopedics_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $orthopedics = $result->fetch_assoc();
}

// Retrieve data for OMFS category
$sql = "SELECT * FROM omfs_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $omfs = $result->fetch_assoc();
}

// Retrieve data for ENT category
$sql = "SELECT * FROM ent_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $ent = $result->fetch_assoc();
}

// Retrieve data for Red Zone category
$sql = "SELECT * FROM redzone_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $redzone = $result->fetch_assoc();
}

// Retrieve data for OPH category
$sql = "SELECT * FROM oph_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $oph = $result->fetch_assoc();
}

// Retrieve data for sprecial category
$sql = "SELECT * FROM special_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $special = $result->fetch_assoc();
}

// Retrieve data for stroke category
$sql = "SELECT * FROM stroke_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $stroke = $result->fetch_assoc();
}


// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors on duty</title>
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <meta http-equiv="refresh" content="240; URL=https://aswinreji.com/vision.html" />
</head>
<body>

    <div class="navbar">
        <h1>WELCOME TO KOTTAYAM MEDICAL COLLEGE</h1>
    </div>

    <div class="main">
        <h1>Doctors on Duty</h1>
    </div>
<marquee direction="up" vspace="-10px" scrollamount="10">
  <div class="scroll">
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>Medicine</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $medicine['MO']; ?></li>
                    <li><a>JR3 : </a><?php echo $medicine['JR3']; ?></li>
                    <li><a>JR2 : </a><?php echo $medicine['JR2']; ?></li>
                    <li><a>JR1 : </a><?php echo $medicine['JR1']; ?></li>
                    <li><a>HS : </a><?php echo $medicine['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>Surgery</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $surgery['MO']; ?></li>
                    <li><a>JR3 : </a><?php echo $surgery['JR3']; ?></li>
                    <li><a>JR2 : </a><?php echo $surgery['JR2']; ?></li>
                    <li><a>JR1 : </a><?php echo $surgery['JR1']; ?></li>
                    <li><a>HS : </a><?php echo $surgery['HS']; ?></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>Orthopedics</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $orthopedics['MO']; ?></li>
                    <li><a>JR3 : </a><?php echo $orthopedics['JR3']; ?></li>
                    <li><a>JR2 : </a><?php echo $orthopedics['JR2']; ?></li>
                    <li><a>JR1 : </a><?php echo $orthopedics['JR1']; ?> </li>
                    <li><a>NAJR : </a><?php echo $orthopedics['NAJR']; ?></li>
                    <li><a>HS : </a><?php echo $orthopedics['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>OMFS</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $omfs['MO']; ?> </li>
                    <li><a>PG : </a><?php echo $omfs['PG']; ?></li>
                    <li><a>HS : </a><?php echo $omfs['HS']; ?></li>
                </ul>
            </li>
            <!-- Add more categories as needed -->
        </ul>
    </div>
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>ENT</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $ent['MO']; ?></li>
                    <li><a>PG : </a><?php echo $ent['PG']; ?></li>
                    <li><a>HS : </a><?php echo $ent['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>Red Zone</h1>
                <ul class="doctor-list">
                    <li><a>Emergency Physician : </a><?php echo $redzone['emergency_physician']; ?></li>
                    <li><a>PG : </a><?php echo $redzone['PG']; ?></li>
                    <li><a>HS : </a><?php echo $redzone['HS']; ?></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>OPH</h1>
                <ul class="doctor-list">
                    <li><a>MO : </a><?php echo $oph['MO']; ?></li>
                    <li><a>PG : </a><?php echo $oph['PG']; ?></li>
                    <li><a>HS : </a><?php echo $oph['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>SPECIALITY ON CALL</h1>
                <ul class="doctor-list">
                    <li><a>NEURO SURGERY : </a><?php echo $special['neuro']; ?></li>
                    <li><a>PLASTIC SURGERY : </a><?php echo $special['plastic']; ?></li>
                    <li><a>UROLOGY : </a><?php echo $special['uro']; ?></li>
                    <li><a>CTVS : </a><?php echo $special['ctvs']; ?></li>
                    <li><a>STROKE ON CALL : </a><?php echo $stroke['oncall']; ?></li>
                    <li><a>PSYCHIATRY : </a><?php echo $stroke['psychiatry']; ?></li>
                    <li><a>DERMATOLOGY : </a><?php echo $stroke['derma']; ?></li>
                    <li><a>BURNS : </a><?php echo $stroke['burn']; ?></li>
                    <li><a>PREVENTIVE CLINIC : </a><?php echo $stroke['preventive']; ?></li>
            </li>

        </ul>
    </div>
</div>
</marquee>
<div class="navbar-bottom">
    <marquee>
    <h1>Public Relation Officer at your service : +91 7025212233</h1>
</marquee>
</div>

</body>
</html>
