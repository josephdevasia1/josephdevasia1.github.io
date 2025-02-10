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

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form for Medicine category
    $medicine_MO = $_POST['medicine_MO'];
    $medicine_JR3 = $_POST['medicine_JR3'];
    $medicine_JR2 = $_POST['medicine_JR2'];
    $medicine_JR1 = $_POST['medicine_JR1'];
    $medicine_HS = $_POST['medicine_HS'];

    // Example SQL query to insert data into a table named 'medicine_doctors'
    $sql = "UPDATE medicine_doctors SET id ='1',MO ='$medicine_MO',JR3='$medicine_JR3',JR2 ='$medicine_JR2',JR1='$medicine_JR1',HS='$medicine_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $medicine_MO, $medicine_JR3, $medicine_JR2, $medicine_JR1, $medicine_HS);
    $stmt->execute();

    // Retrieve data from the form for Surgery category
    $surgery_MO = $_POST['surgery_MO'];
    $surgery_JR3 = $_POST['surgery_JR3'];
    $surgery_JR2 = $_POST['surgery_JR2'];
    $surgery_JR1 = $_POST['surgery_JR1'];
    $surgery_HS = $_POST['surgery_HS'];

    // Example SQL query to insert data into a table named 'surgery_doctors'
    $sql = "UPDATE `surgery_doctors` SET id='1',MO='$surgery_MO',JR3='$surgery_JR3',JR2='$surgery_JR2',JR1='$surgery_JR1',HS='$surgery_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Repeat the same process for other categories
     // Handle Orthopedics form data
    $orthopedics_MO = $_POST["orthopedics_MO"];
    $orthopedics_JR3 = $_POST["orthopedics_JR3"];
    $orthopedics_JR2 = $_POST["orthopedics_JR2"];
    $orthopedics_JR1 = $_POST["orthopedics_JR1"];
    $orthopedics_NAJR = $_POST["orthopedics_NAJR"];
    $orthopedics_HS = $_POST["orthopedics_HS"];

    // Handle OMFS form data
    $omfs_MO = $_POST["omfs_MO"];
    $omfs_PG = $_POST["omfs_PG"];
    $omfs_HS = $_POST["omfs_HS"];

    // Handle ENT form data
    $ent_MO = $_POST["ent_MO"];
    $ent_PG = $_POST["ent_PG"];
    $ent_HS = $_POST["ent_HS"];

    // Handle Red Zone form data
    $redzone_emergency_physician = $_POST["redzone_emergency_physician"];
    $redzone_PG = $_POST["redzone_PG"];
    $redzone_HS = $_POST["redzone_HS"];

    // Handle OPH form data
    $oph_MO = $_POST["oph_MO"];
    $oph_PG = $_POST["oph_PG"];
    $oph_HS = $_POST["oph_HS"];

    // Handle SPECIALITY form data
    $special_neuro = $_POST['special_neuro'];
    $special_plastic = $_POST['special_plastic'];
    $special_uro = $_POST['special_uro'];
    $special_ctvs = $_POST['special_ctvs'];

    // Handle Stroke form data
    $stroke_oncall = $_POST['stroke_oncall'];
    $stoke_psychiatry = $_POST['stoke_psychiatry'];
    $stroke_derma = $_POST['stroke_derma'];
    $stroke_burn = $_POST['stroke_burn'];
    $stroke_preventive = $_POST['stroke_preventive'];

    // Update the database for Orthopedics
    $sql = "UPDATE orthopedics_doctors SET MO = '$orthopedics_MO', JR3 = '$orthopedics_JR3', JR2 = '$orthopedics_JR2', JR1 = '$orthopedics_JR1', NAJR = '$orthopedics_NAJR', HS = '$orthopedics_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for OMFS
    $sql = "UPDATE omfs_doctors SET MO = '$omfs_MO', PG = '$omfs_PG', HS = '$omfs_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for ENT
    $sql = "UPDATE ent_doctors SET MO = '$ent_MO', PG = '$ent_PG', HS = '$ent_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for Red Zone
    $sql = "UPDATE redzone_doctors SET Emergency_Physician = '$redzone_emergency_physician', PG = '$redzone_PG', HS = '$redzone_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for OPH
    $sql = "UPDATE oph_doctors SET MO = '$oph_MO', PG = '$oph_PG', HS = '$oph_HS' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for special
    $sql = "UPDATE special_doctors SET neuro = '$special_neuro', plastic = '$special_plastic', uro = '$special_uro', ctvs='$special_ctvs' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();

    // Update the database for stroke
    $sql = "UPDATE stroke_doctors SET  oncall = '$stroke_oncall', psychiatry = '$stoke_psychiatry', derma = '$stroke_derma', burn = '$stroke_burn', preventive='$stroke_preventive' WHERE 1";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sssss", $surgery_MO, $surgery_JR3, $surgery_JR2, $surgery_JR1, $surgery_HS);
    $stmt->execute();


    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
