<?php
require_once 'database.php';
require_once 'contacts.php';

if (
    isset($_POST['Id']) &&
    isset($_POST['CURRENT_JOB']) &&
    isset($_POST['NAME']) &&
    isset($_POST['ADRESS']) &&
    isset($_POST['Status']) &&
    isset($_POST['PHONE_NUMBER'])
) {
    $Id = $_POST['Id'];
    $CURRENT_JOB = $_POST['CURRENT_JOB'];
    $NAME = $_POST['NAME'];
    $ADRESS = $_POST['ADRESS'];
    $Status = $_POST['Status'];
    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];

    $result = Contact::update($Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER);
    if ($result) {
        echo "Data with ID = $Id updated successfully.";
    } else {
        echo "Failed to update data with ID = $Id.";
    }
} else {
    echo "One or more parameters are missing.";
}
?>
