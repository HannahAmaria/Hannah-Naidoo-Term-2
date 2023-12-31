<?php
error_reporting(0);

include 'actions/db.php';

$sql_test = "SELECT * FROM receptionist WHERE SignedIn = '1'";
$result_test = $conn->query($sql_test);

while ($row_test = $result_test->fetch_assoc()) {

    if ($row_test['Rank'] == 'Head Receptionist') {
        $SuperUser_Global = true;
    } else if ($row_test['Rank'] == 'Receptionist') {
        $SuperUser_Global = false;
    }

}

// Select all to display
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

if ($SuperUser_Global == true) {

    // --Headers
    echo '<tr>';
    echo '<th class="th_all_table">Name</th>';
    echo '<th class="th_all_table">ID</th>';
    echo '<th class="th_all_table">Specialization</th>';

    echo '<th class="th_all_table">Email</th>';
    echo '<th class="th_all_table">Doctor Room</th>';               
    echo '<th class="th_all_table" style="border-right: 0px;"><a href="doctorRegister.php" role="button">ADD NEW</a></th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {

        // --Create an entry
        echo '<tr>';
        echo '<td style="color: #0098c7;"> <a href="doctors.php?id=' . $row['DoctorID'] . '">' . $row['Name'] . ' ' . $row['Surname'] . '</a></td>';
        echo '<td>' . $row['DoctorID'] . '</td>';

        echo '<td>' . $row['Specialization'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['DoctorRoom'] . '</td>';                         
        echo '<td style="border-right: 0px;"><a class="btn btn-danger" href="actions/delete.php?id=' . $row['DoctorID'] . '&page=doctor" role="button">Delete</a></td>';
        echo '<tr>';

    }

} else if ($SuperUser_Global == false) {

    echo '<tr>';
    echo '<th class="th_all_table">Name</th>';
    echo '<th class="th_all_table">ID</th>';
    echo '<th class="th_all_table">Specialization</th>';

    echo '<th class="th_all_table">Email</th>';
    echo '<th class="th_all_table">Doctor Room</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {

        echo '<tr>';
        echo '<td style="color: #0098c7;"> <a href="doctors.php?id=' . $row['DoctorID'] . '">' . $row['Name'] . ' ' . $row['Surname'] . '</a></td>';
        echo '<td>' . $row['DoctorID'] . '</td>';

        echo '<td>' . $row['Specialization'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['DoctorRoom'] . '</td>';
        echo '<tr>';

    }

}

$conn->close();

?>