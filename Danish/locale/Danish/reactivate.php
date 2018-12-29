<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/reactivate.php
| Author: Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
// Error messages
$locale['500'] = "Der opstod en fejl";
$locale['501'] = "Genaktiverings linket du har trykket p� er ikke l�ngere gyldigt.<br /><br />
Kontakt sidens administrator via <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> hvis du vil foresp�rge om manuel gen-aktivering.";
$locale['502'] = "Genaktiverings linket du har trykket p� er ikke gyldigt!<br /><br />
Kontakt sidens administrator via <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> hvis du vil foresp�rge om manuel gen-aktivering.";
$locale['503'] = "Det genaktiverings link du fulgte kunne ikke genaktivere din konto.<br />
M�ske er din konto allerede blevet aktiveret igen, og i s� fald b�r du v�re i stand til at <a href='".$settings['siteurl']."login.php'>logge ind her</a>.<br /><br />
Hvis du ikke kan logge ind nu, kan du kontakte sidens administrator p� <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> 
hvis du vil anmode om en manuel genaktivering.";
$locale['504'] = "Konto genaktiveret p� ".$settings['sitename'];
$locale['505'] = "Hej [USER_NAME],\n
Din brugerkonto p� ".$settings['sitename']." er blevet genaktiveret. Vi h�ber at se dig oftere p� hjemmesiden.\n\n
Med venlig hilsen\n\n
".$settings['siteusername'];
$locale['506'] = "Genaktiveret af bruger.";
?>