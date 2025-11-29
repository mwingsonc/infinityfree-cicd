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
            <h2>Current Server Time</h2>
            <?php
                // The 'h:i:s A' format displays hour:minute:second AM/PM.
                $currentTime = date("h:i:s A");
                echo "<p>The time right now is: **$currentTime**</p>";
            ?>
        </section>
        </main>

    <footer>
        <small>&copy; 2025 Demo Site</small>
    </footer>

    <script src="script.js"></script>
</body>
</html>