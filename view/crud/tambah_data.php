<?php
require_once 'database.php';
require_once 'contacts.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id = $_POST['Id'];
    $CURRENT_JOB = $_POST['CURRENT_JOB'];
    $NAME = $_POST['NAME'];
    $ADRESS = $_POST['ADRESS'];
    $Status = $_POST['Status'];
    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];

    $inserted = Contact::insert($Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER);

    // Check if insertion was successful
    if ($inserted) {
        echo "New record added successfully.";
    } else {
        echo "Error adding record.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
</head>
<body>
    <h2>Add New Record</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Id">Id:</label><br>
        <input type="text" id="Id" name="Id"><br>

        <label for="CURRENT_JOB">CURRENT_JOB:</label><br>
        <input type="text" id="CURRENT_JOB" name="CURRENT_JOB"><br>

        <label for="NAME">NAME:</label><br>
        <input type="text" id="NAME" name="NAME"><br>

        <label for="ADRESS">ADRESS:</label><br>
        <input type="text" id="ADRESS" name="ADRESS"><br>

        <label for="Status">Status:</label><br>
        <input type="text" id="Status" name="Status"><br>

        <label for="PHONE_NUMBER">PHONE_NUMBER:</label><br>
        <input type="text" id="PHONE_NUMBER" name="PHONE_NUMBER"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
