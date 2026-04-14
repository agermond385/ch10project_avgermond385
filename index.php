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

    <!-- This form collects the user's input and sends it to confirm.php via POST-->
     <form action="confirm.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>