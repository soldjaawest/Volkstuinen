<?php
require_once __DIR__ . "/../../Backend/SessionChecker.php";
require_once __DIR__."/../../Backend/Models/User.php";
checkSession($allowedUserTypes = [1,2,3]);
$user = new User();
$id = $_SESSION['user_id'];
$user->findByIdUser($id)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volkstuin Vereniging Sittard</title>
    <link rel="stylesheet" href="CSS-Gedeeld/Gebruikerinfo.css">
    </head>
<body>


<div class="sidebar">
    <img src="../../Frontend/Gedeeld/pictures/logo-volkstuinverenigingsittard.png" alt="Logo">
    <div class="Icoontjes">

    <a href="../../Frontend/Deelnamer/dashboard.php">
            <div class="icon1">
                <img src="../Gedeeld/pictures/HomeMenuButton.svg" alt="huisknop">
            </div>
        </a>
        <a href="../../Frontend/Gedeeld/GebruikerInfo.php">
            <div class="icon2">
                <img src="../Gedeeld/pictures/UserMenuButton.svg" alt="gebruikerinfo">
            </div>
        </a>
        <a href="../../Frontend/login.php">
            <div class="icon2">
                <img src="../Gedeeld/pictures/ExitMenuButton.svg" alt="uitloggen">
            </div>
        </a>
    </div>

</div>


<div class="header">
    VOLKSTUIN VERENIGING SITTARD
</div>
<?php

// if (!isset($_SESSION['user_id'])) {
//     echo "Sessie niet gevonden, probeer opnieuw in te loggen.";
//     exit();
// }
                
//     require_once '../../Backend/DatabaseContext/database.php'; // Zorg ervoor dat dit het juiste pad is naar jouw databasebestand
    
//     if (isset($_POST['checkUser'])) {
//         if (isset($_SESSION['user_id'])) {
//             try {
//                 $conn = Database::GetConnection();
                
//                 // Haal usertype op uit database
//                 $user_id = $_SESSION['user_id'];
//                 $sql = "SELECT UserType FROM users WHERE id = :id";
//                 $stmt = $conn->prepare($sql);
//                 $stmt->bindParam(":id", $user_id, PDO::PARAM_INT);
//                 $stmt->execute();
//                 $user = $stmt->fetch();
                
//                 if ($user) {
//                     $user_type = $user['UserType'];
                    
//                     // Stuur door op basis van usertype
//                     switch ($user_type) {
//                         case 1:
//                             header("Location: ../Bestuurder/dashboard.php");
//                             exit();
//                         case 2:
//                             header("Location: ../Beheerder/dashboard.php");                                  Ik snap het niet helemaal
//                             exit();
//                         case 3:
//                             header("Location: ../Deelnamer/dashboard.php");
//                             exit();
//                         default:
//                             echo "Ongeldig usertype.";
//                     }
//                 } else {
//                     echo "Usertype niet gevonden.";
//                 }
//             } catch (Exception $e) {
//                 echo "Fout bij ophalen usertype: " . htmlspecialchars($e->getMessage());
//             }
//         } else {
//             echo "Geen gebruiker ingelogd.";
//         }
//     }
//     ?>

    

</body>
</html>