<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>My Demo Site</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        <h1>Welcome to My Demo Site</h1>
    </header>

    <main>
        <p>This is a very simple static site used to learn GitHub Actions.</p>
        <button id="clickMe">Click me</button>
        <p id="message"></p>

        <section style="margin-top: 20px; padding: 10px; border: 1px solid #ccc;">
            <h3>Current Server Time</h3>
            <?php
                // The 'h:i:s A' format displays hour:minute:second AM/PM.
                $currentTime = date("h:i:s A");
                echo "<p>$currentTime</p>";
            ?>
        </section>

        <section style="margin-top: 20px; padding: 10px; border: 1px solid #ccc;">
            <h3>Register</h3>
            <form action="process_form.php" method="POST">
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" required
                style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; box-sizing: border-box;"><br>
                <button type="submit" 
                        style="background-color: #007bff; color: white; padding: 10px 15px; border: none; cursor: pointer;">
                    Register
                </button>
            </form>
        </section>
        </main>

    <footer>
        <small>&copy; 2025 Demo Site by Matthew Wingson</small>
    </footer>

    <script src="script.js"></script>
</body>
</html>