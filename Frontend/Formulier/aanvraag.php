<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanvraagformulier Volkstuin</title>
    <style>
        /* BASIS STIJLEN (ZELFDE ALS ORIGINEEL) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .main-container {
            margin-left: 250px;
            margin-top: 60px;
            padding: 20px;
            width: calc(100% - 250px);
            box-sizing: border-box;
        }
        .Dashtitle {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar img {
            width: 150px;
            margin: 20px 0;
        }
        .Icoontjes {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }
        .icon1, .icon2, .icon3 {
            width: 50px;
            height: 50px;
            background-color: #444;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .icon1:hover, .icon2:hover, .icon3:hover {
            background-color: #555;
        }
        .icon1 img, .icon2 img, .icon3 img {
            width: 30px;
            height: 30px;
        }

        /* ALLEEN DIT IS AANGEPAST - GROTERE INPUTVELDEN */
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group select {
            width: 100%;
            padding: 14px;  /* Vergroot van 10px naar 14px */
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px; /* Vergroot van standaard naar 16px */
            height: 48px;   /* Vaste hoogte voor consistentie */
        }
        .form-group textarea {
            width: 100%;
            padding: 14px;  /* Vergroot van 10px naar 14px */
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px; /* Vergroot van standaard naar 16px */
            min-height: 140px; /* Vergroot van 100px naar 140px */
            resize: vertical;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 14px 28px; /* Vergroot van 10px 20px */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px; /* Vergroot van standaard */
        }
    </style>
</head>
<body>

<div class="header">
    VOLKSTUIN VERENIGING SITTARD
</div>
<div class="main-container">

    <p class="Dashtitle">Aanvraagformulier Volkstuin</p>
    <div class="content">

    <form method="POST" action="">
        <div class="form-group">
            <label for="voornaam">Voornaam *</label>
            <input type="text" id="voornaam" name="voornaam" required>
        </div>

        <div class="form-group">
            <label for="achternaam">Achternaam *</label>
            <input type="text" id="achternaam" name="achternaam" required>
        </div>

        <div class="form-group">
            <label for="email">E-mailadres *</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="telefoon">Telefoonnummer</label>
            <input type="tel" id="telefoon" name="telefoon">
        </div>

        <div class="form-group">
            <label>Adres</label>
            <div style="display: flex; gap: 10px;">
                <input type="text" id="postcode" name="postcode" placeholder="Postcode" style="flex: 1; padding: 14px; height: 48px; font-size: 16px;">
                <input type="text" id="huisnummer" name="huisnummer" placeholder="Huisnummer" style="width: 80px; padding: 14px; height: 48px; font-size: 16px;">
            </div>
            <input type="text" id="straatnaam" name="straatnaam" placeholder="Straatnaam" style="margin-top: 5px; padding: 14px; height: 48px; font-size: 16px; width: 100%;">
        </div>

        <div class="form-group">
            <label for="complex1">Voorkeurscomplex *</label>
            <select id="complex1" name="complex1" required>
                <option value="">-- Kies een complex --</option>
                <!-- Hier komen de complex opties -->
            </select>
        </div>

        <div class="form-group">
            <label for="complex2">Tweede keuze complex (optioneel)</label>
            <select id="complex2" name="complex2">
                <option value="">-- Kies een tweede complex --</option>
                <!-- Hier komen de complex opties -->
            </select>
        </div>

        <div class="form-group">
            <label for="motivatie">Motivatie</label>
            <textarea id="motivatie" name="motivatie" placeholder="Waarom wilt u een volkstuin?"></textarea>
        </div>

        <button type="submit" class="submit-btn">Verzend aanvraag</button>
    </form>

    </div>

</div>

<div class="sidebar">
    <img src="../../Frontend/Gedeeld/pictures/logo-volkstuinverenigingsittard.png" alt="Logo">
    <div class="Icoontjes">
        <a href="dashboard.php">
            <div class="icon1">
                <img src="../../Frontend/Gedeeld/pictures/HomeMenuButton.svg" alt="huisknop">
            </div>
        </a>
        <a href="../../Frontend/Gedeeld/GebruikerInfo.php">
            <div class="icon2">
                <img src="../../Frontend/Gedeeld/pictures/UserMenuButton.svg" alt="settings">
            </div>
        </a>
        <a href="../../Frontend/login.php">
            <div class="icon3">
                <img src="../../Frontend/Gedeeld/pictures/ExitMenuButton.svg" alt="uitloggen">
            </div>
        </a>
    </div>
</div>

</body>
</html>