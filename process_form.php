<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        <h1>Registration Status</h1>
    </header>

    <main>
        <?php
            // Check if the form was submitted using the POST method
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if the 'email' field is set in the POST data
                if (isset($_POST["email"])) {
                    // Sanitize the input for display
                    $userEmail = htmlspecialchars($_POST["email"]);
                    
                    // Display the confirmation message
                    echo "<h2>Thank You for Registering!</h2>";
                    echo "<p>Your email address, $userEmail, has been successfully submitted.</p>";

                    // In a real application, you would save $userEmail to a database here.

                } else {
                    // Handle case where email field is missing
                    echo "<h2>Error</h2>";
                    echo "<p>The email field was not found in the submission.</p>";
                }
            } else {
                // Handle direct access to the script without a form submission
                echo "<h2>Access Denied</h2>";
                echo "<p>This page should only be accessed through the registration form.</p>";
            }
        ?>
        <p><a href="index.php">Go back to the homepage</a></p>
    </main>

    <footer>
        <small>&copy; 2025 Demo Site by Matthew Wingson</small>
    </footer>
</body>
</html>