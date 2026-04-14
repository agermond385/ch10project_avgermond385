<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building a Dynamic Form with PHP</title>
</head>
<body>
    <h1>Building a Dynamic Form with PHP</h1>
    <p>Annabelle Germond</p>
    <p>April 13, 2026</p>

    <?php
    // This block checks whether or not the form was submitted using the POST method
    if ($_SERVER["REQUESTED_METHOD"] == "POST") {

    //This block stores the values and removes any extra spaces
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    //This block sanitizes the email values
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //This block validates the inputs and creates and error/success message
    if (empty($name) || empty($email) || empty($message)) {
        $statusMessage = "Error: All fields are required.";
        $statusClass = "error";
    } else {
        $statusMessage = "Success! Thank you, " . htmlspecialchars($name) . ", your form has been submitted.";
        $statusClass = "success";
    }

    //This block displays the status message
    echo "<div class=\"$statusClass\">$statusMessage</div>";

    //This block displays the values submitted beneath the confirmation message
    echo "<div class=\"output\">";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
    echo "</div>";

    } else {
        //This block displays a message if the page gets opened without submitting the form
        echo "<div class=\"error\">Error: Please submit the form first.</div>";
    }
    ?>
</body>
</html>