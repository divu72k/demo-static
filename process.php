<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h2>Hospital Registration Details</h2>";
    echo "<strong>Patient Details:</strong><br>";
    echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Age: " . htmlspecialchars($_POST['age']) . "<br>";
    echo "Contact: " . htmlspecialchars($_POST['contact']) . "<br>";
    echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br><br>";

    echo "<strong>Medical History:</strong><br>";
    echo "Allergies: " . htmlspecialchars($_POST['allergies']) . "<br>";
    echo "Current Medications: " . htmlspecialchars($_POST['current_medications']) . "<br>";
    echo "Past Medical Conditions: " . htmlspecialchars($_POST['past_conditions']) . "<br><br>";

    echo "<strong>Appointment Details:</strong><br>";
    echo "Preferred Doctor: " . htmlspecialchars($_POST['doctor']) . "<br>";
    echo "Appointment Date: " . htmlspecialchars($_POST['appointment_date']) . "<br>";
    echo "Reason for Visit: " . htmlspecialchars($_POST['reason']) . "<br>";
} else {
    echo "Invalid request method.";
}
?>
