<?php
include 'actions/db.php';

// Sql query for the doctors table
$sqlD = "SELECT Name, Surname, DoctorID FROM doctors ORDER BY DoctorID ASC";
$resultD = $conn->query($sqlD);

echo '<label style="font-size: 20px;"> Select Doctor </label><br>';
echo '<select name="app_doctor" style="width: 200px; height: 30px; font-size: 23px;">';

while ($rowD = $resultD->fetch_assoc()) {

    echo '<option name="doctor_select" value="' . $rowD['DoctorID'] . '"> ' . $rowD['Name'] . ' ' . $rowD['Surname'] . '</option>';

}

echo '</select>';
echo '<br>';
echo '<br>';

// Sql query for the patients table 
$sqlP = "SELECT Name, Surname, PatientID FROM patients ORDER BY PatientID ASC";
$resultP = $conn->query($sqlP);

echo '<label style="font-size: 20px;"> Select Patient </label><br>';
echo '<select name="app_patient" style="width: 200px; height: 30px; font-size: 23px;">';

while ($rowP = $resultP->fetch_assoc()) {

    echo '<option value="' . $rowP['PatientID'] . '"> ' . $rowP['Name'] . ' ' . $rowP['Surname'] . '</option>';

}

echo "</select>";
echo '<br>';
echo '<br>';

// Display date
echo '<h4 style="width: 400px; text-align: center;"> Create an appointment for: <br>' . $_GET['date'] . '</h4>';
echo '<input type="hidden" name="app_date" value="' . $_GET['date'] . '">';

$conn->close();

?>