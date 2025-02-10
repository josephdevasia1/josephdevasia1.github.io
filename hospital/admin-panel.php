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
    <title>Admin</title>
    
    <link rel="stylesheet" type="text/css" href="style/admin.css">
</head>
<body>

<div class="container">
<div class="scroll">
    <form action="update.php" method="post">
        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>Medicine</h1>
                    <ul class="doctor-list">
                        <li><label for="medicine_MO">MO :</label> <input type="text" id="medicine_MO" name="medicine_MO" value="<?php echo $medicine['MO']; ?>"></li>
                        <li><label for="medicine_JR3">JR3 :</label> <input type="text" id="medicine_JR3" name="medicine_JR3" value="<?php echo $medicine['JR3']; ?>"></li>
                        <li><label for="medicine_JR2">JR2 :</label> <input type="text" id="medicine_JR2" name="medicine_JR2" value="<?php echo $medicine['JR2']; ?>"></li>
                        <li><label for="medicine_JR1">JR1 :</label> <input type="text" id="medicine_JR1" name="medicine_JR1" value="<?php echo $medicine['JR1']; ?>"></li>
                        <li><label for="medicine_HS">HS :</label> <input type="text" id="medicine_HS" name="medicine_HS" value="<?php echo $medicine['HS']; ?>"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>Surgery</h1>
                    <ul class="doctor-list">
                        <li><label for="surgery_MO">MO :</label> <input type="text" id="surgery_MO" name="surgery_MO" value="<?php echo $surgery['MO']; ?>"></li>
                        <li><label for="surgery_JR3">JR3 :</label> <input type="text" id="surgery_JR3" name="surgery_JR3" value="<?php echo $surgery['JR3']; ?>"></li>
                        <li><label for="surgery_JR2">JR2 :</label> <input type="text" id="surgery_JR2" name="surgery_JR2" value="<?php echo $surgery['JR2']; ?>"></li>
                        <li><label for="surgery_JR1">JR1 :</label> <input type="text" id="surgery_JR1" name="surgery_JR1" value="<?php echo $surgery['JR1']; ?>"></li>
                        <li><label for="surgery_HS">HS :</label> <input type="text" id="surgery_HS" name="surgery_HS" value="<?php echo $surgery['HS']; ?>"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>Orthopedics</h1>
                    <ul class="doctor-list">
                        <li><label for="orthopedics_MO">MO :</label> <input type="text" id="orthopedics_MO" name="orthopedics_MO" value="<?php echo $orthopedics['MO']; ?>"></li>
                        <li><label for="orthopedics_JR3">JR3 :</label> <input type="text" id="orthopedics_JR3" name="orthopedics_JR3" value="<?php echo $orthopedics['JR3']; ?>"></li>
                        <li><label for="orthopedics_JR2">JR2 :</label> <input type="text" id="orthopedics_JR2" name="orthopedics_JR2" value="<?php echo $orthopedics['JR2']; ?>"></li>
                        <li><label for="orthopedics_JR1">JR1 :</label> <input type="text" id="orthopedics_JR1" name="orthopedics_JR1" value="<?php echo $orthopedics['JR1']; ?>"></li>
                        <li><label for="orthopedics_NAJR">NAJR :</label> <input type="text" id="orthopedics_NAJR" name="orthopedics_NAJR" value="<?php echo $orthopedics['NAJR']; ?>"></li>
                        <li><label for="orthopedics_HS">HS :</label> <input type="text" id="orthopedics_HS" name="orthopedics_HS" value="<?php echo $orthopedics['HS']; ?>"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>OMFS</h1>
                    <ul class="doctor-list">
                        <li><label for="omfs_MO">MO :</label> <input type="text" id="omfs_MO" name="omfs_MO" value="<?php echo $omfs['MO']; ?>"></li>
                        <li><label for="omfs_PG">PG :</label> <input type="text" id="omfs_PG" name="omfs_PG" value="<?php echo $omfs['PG']; ?>"></li>
                        <li><label for="omfs_HS">HS :</label> <input type="text" id="omfs_HS" name="omfs_HS" value="<?php echo $omfs['HS']; ?>"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>ENT</h1>
                    <ul class="doctor-list">
                        <li><label for="ent_MO">MO :</label> <input type="text" id="ent_MO" name="ent_MO" value="<?php echo $ent['MO']; ?>"></li>
                        <li><label for="ent_PG">PG :</label> <input type="text" id="ent_PG" name="ent_PG" value="<?php echo $ent['PG']; ?>"></li>
                        <li><label for="ent_HS">HS :</label> <input type="text" id="ent_HS" name="ent_HS" value="<?php echo $ent['HS']; ?>"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>Red Zone</h1>
                    <ul class="doctor-list">
                        <li><label for="redzone_emergency_physician">Emergency Physician :</label> <input type="text" id="redzone_emergency_physician" name="redzone_emergency_physician" value="<?php echo $redzone['emergency_physician']; ?>"></li>
                        <li><label for="redzone_PG">PG :</label> <input type="text" id="redzone_PG" name="redzone_PG" value="<?php echo $redzone['PG']; ?>"></li>
                        <li><label for="redzone_HS">HS :</label> <input type="text" id="redzone_HS" name="redzone_HS" value="<?php echo $redzone['HS']; ?>"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>OPH</h1>
                    <ul class="doctor-list">
                        <li><label for="oph_MO">MO :</label> <input type="text" id="oph_MO" name="oph_MO" value="<?php echo $oph['MO']; ?>"></li>
                        <li><label for="oph_PG">PG :</label> <input type="text" id="oph_PG" name="oph_PG" value="<?php echo $oph['MO']; ?>"></li>
                        <li><label for="oph_HS">HS :</label> <input type="text" id="oph_HS" name="oph_HS" value="<?php echo $oph['MO']; ?>"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>SPECIALITY ON CALL</h1>
                    <ul class="doctor-list">
                        <li><label for="special_neuro">NEURO SURGERY :</label> <input type="text" id="special_neuro" name="special_neuro" value="<?php echo $special['neuro']; ?>"></li>
                        <li><label for="special_plastic">PLASTIC SURGERY :</label> <input type="text" id="special_plastic" name="special_plastic" value="<?php echo $special['plastic']; ?>"></li>
                        <li><label for="special_uro">UROLOGY :</label> <input type="text" id="special_uro" name="special_uro" value="<?php echo $special['uro']; ?>"></li>
                        <li><label for="special_ctvs">CTVS :</label> <input type="text" id="special_ctvs" name="special_ctvs" value="<?php echo $special['ctvs']; ?>"></li>
                        <li><label for="stroke_oncall">STROKE ON CALL :</label><input type="text" id="stroke_oncall" name="stroke_oncall" value="<?php echo$stroke['oncall']; ?>"></li>
                        <li><label for="stoke_psychiatry">PSYCHIATRY :</label> <input type="text" id="stoke_psychiatry" name="stoke_psychiatry" value="<?php echo $stroke['psychiatry']; ?>"></li>
                        <li><label for="stroke_derma">DERMATOLOGY :</label> <input type="text" id="stroke_derma" name="stroke_derma" value="<?php echo $stroke['derma']; ?>"></li>
                        <li><label for="stroke_burn">BURNS :</label> <input type="text" id="stroke_burn" name="stroke_burn" value="<?php echo $stroke['burn']; ?>"></li>
                        <li><label for="stroke_preventive">PREVENTIVE CLINIC :</label> <input type="text" id="stroke_preventive" name="stroke_preventive" value="<?php echo $stroke['preventive']; ?>"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <input type="submit" value="Submit" style="color: blue;">
    </form>
</div>
</div>
</body>
</html>