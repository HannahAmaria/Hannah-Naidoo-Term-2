<?php
$days = array('Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su');
$months = array('January', 'February', 'March', "April", 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$SelectedDay = date("d");
$SelectedMonth = date("m");
$SelectedMonth2 = date("M");
$SelectedYear = date("Y");

echo '
<div class="month">
    <ul class="calendar">
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>' . $SelectedMonth2 . '<br><span style="font-size:18px"> ' . $SelectedYear . '</span></li>
    </ul>
</div>';

// Days
echo '
<div class="weekdays calendar" style="text-align: center;">
    <form method="post" action="actions/calendar_change.php">
        <input type="date" name="date_input" value="' . $SelectedYear . '-' . $SelectedMonth . '-' . $SelectedDay . '">
        <button>Select Date</button>
    </form>
</div>';

echo '
<ul class="days calendar">';

// Calendar
switch ($SelectedMonth) {
    // --January
    case "01":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --February
    case "02":

        // ---- leap years
        if ((intval($SelectedYear) % 4) == 0) {
            for ($k = 1; $k <= 29; $k++) {

                if ($k == intval($SelectedDay)) {
                    echo '<li><span class="active">' . $k . '</span></li>';
                } else {
                    echo '<li>' . $k . '</li>';
                }

            }
        } else {

            for ($k = 1; $k <= 28; $k++) {

                if ($k == intval($SelectedDay)) {
                    echo '<li><span class="active">' . $k . '</span></li>';
                } else {
                    echo '<li>' . $k . '</li>';
                }

            }
        }

        break;
    // --March
    case "03":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --April
    case "04":

        for ($k = 1; $k <= 30; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --May
    case "05":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --June
    case "06":

        for ($k = 1; $k <= 30; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --July
    case "07":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --August
    case "08":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --September
    case "09":

        for ($k = 1; $k <= 30; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --October
    case "10":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --November
    case "11":

        for ($k = 1; $k <= 30; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
    // --December
    case "12":

        for ($k = 1; $k <= 31; $k++) {

            if ($k == intval($SelectedDay)) {
                echo '<li><span class="active">' . $k . '</span></li>';
            } else {
                echo '<li>' . $k . '</li>';
            }

        }

        break;
}

echo '</ul>';


?>