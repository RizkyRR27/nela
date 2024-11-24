<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="nela.css">
</head>
<body>
    <header>
        <h1>Toko mochibliss</h1>
    </header>
    <main>
        <section id="response">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $message = htmlspecialchars($_POST["message"]);

                echo "<h2>Terima kasih, $name!</h2>";
                echo "<p>Pesan Anda telah kami terima:</p>";
                echo "<blockquote>" . nl2br($message) . "</blockquote>";
                echo "<p>Kami akan menghubungi Anda melalui email: <strong>$email</strong>.</p>";
            } else {
                echo "<h2>Formulir tidak valid!</h2>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Toko Mochi Lezat</p>
    </footer>
</body>
</html>
