<?php
include 'actions/db.php';

$appID = $_GET['id'];

$sqlSt = "SELECT * FROM appointments WHERE AppointmentID = $appID";
$resultSt = $conn->query($sqlSt);

while ($rowSt = $resultSt->fetch_assoc()) {

    $patientSt = $rowSt['PatientID'];
    $doctorSt = $rowSt['DoctorID'];
    $recepSt = $rowSt['RecepID'];
    $dateSt = $rowSt['AppointmentDate'];

}

$sqlD = "SELECT Name, Surname, DoctorID FROM doctors ORDER BY DoctorID ASC";
$resultD = $conn->query($sqlD);

echo '<label style="font-size: 20px;"> Select Doctor </label><br>';
echo '<select name="app_doctor" style="width: 200px; height: 30px; font-size: 23px;">';

while ($rowD = $resultD->fetch_assoc()) {

    if ($rowD['DoctorID'] == $doctorSt) {
        $doctorStName = $rowD['Name'] . ' ' . $rowD['Surname'];
    }

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

    if ($rowP['PatientID'] == $patientSt) {
        $patientStName = $rowP['Name'] . ' ' . $rowP['Surname'];
    }

    echo '<option value="' . $rowP['PatientID'] . '"> ' . $rowP['Name'] . ' ' . $rowP['Surname'] . '</option>';

}

echo "</select>";
echo '<br>';
echo '<br>';

echo '<label style="font-size: 20px;"> Select Date </label><br>';
echo '<input type="date" name="app_new_date" value="' . $dateSt . '">';
echo '<br>';
echo '<br>';

// Display date
echo '<h4 style="width: 400px; text-align: center;"> Currently Editing: <br>' . $doctorStName . ' and ' . $patientStName . ' appointment for ' . $dateSt . '</h4>';
echo '<input type="hidden" name="appID" value="' . $appID . '">';

$conn->close();

?>