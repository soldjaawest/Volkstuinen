<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Ongeldig e-mailadres.";
    }

    if (!isset($error)) {
        $token = bin2hex(random_bytes(16));
        $verificationLink = "https://www.example.com/verify.php?token=" . $token;

        $subject = "Bevestig je e-mailadres";
        $message = "Hallo,\n\n"
                 . "Klik op onderstaande link om je e-mailadres te bevestigen:\n"
                 . $verificationLink . "\n\n"
                 . "Heb je dit niet aangevraagd? Negeer deze e-mail.\n\n"
                 . "Bedankt!";

        $from = "ilunga866@gmail.com";
        $headers  = "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($email, $subject, $message, $headers)) {
            $success = "Een bevestigingslink is verzonden naar <strong>" . htmlspecialchars($email) . "</strong>.";
        } else {
            $error = "Verzenden mislukt. Probeer het later opnieuw.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Verificatie E-mail Versturen</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f9f1;
            color: #2e7d32;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 80px auto;
            background-color: #ffffff;
            border: 2px solid #c8e6c9;
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #1b5e20;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #aed581;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        button {
            background-color: #388e3c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #2e7d32;
        }

        .message {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .success {
            background-color: #dcedc8;
            border: 1px solid #7cb342;
            color: #33691e;
        }

        .error {
            background-color: #ffcdd2;
            border: 1px solid #d32f2f;
            color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificatie Link Versturen</h1>

        <?php if (isset($error)) : ?>
            <div class="message error"><?= $error ?></div>
        <?php endif; ?>

        <?php if (isset($success)) : ?>
            <div class="message success"><?= $success ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="email">Vul je e-mailadres in:</label>
            <input type="email" id="email" name="email" placeholder="jouw-email@example.com" required>
            <button type="submit">Verstuur verificatielink</button>
        </form>
    </div>
</body>
</html>
