<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/forum/post.php
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
// Post Titles
$locale['400'] = "Se indl�g";
$locale['401'] = "Gem indl�g";
$locale['402'] = "Se svar";
$locale['403'] = "Svar p� indl�g";
$locale['404'] = "Gem svar";
$locale['405'] = "Se �ndringer";
$locale['407'] = "Slet indl�g";
$locale['408'] = "Rediger indl�g";
$locale['409'] = "Gem �ndringer";
// Post Preview
$locale['420'] = "Ingen overskrift";
$locale['421'] = "Ingen tekst. Dit indl�g vil blive afvist, hvis du ikke skriver noget tekst";
$locale['422'] = "Forfatter:";
$locale['423'] = "Antal indl�g:";
$locale['424'] = "Bop�l:";
$locale['425'] = "Oprettet:";
$locale['426'] = "Skrevet d. ";
$locale['427'] = "Redigeret af ";
$locale['428'] = " d. ";
$locale['429'] = " skrev:";
$locale['430'] = "Brugers avatar";
$locale['431'] = "Seneste indl�g";
$locale['432'] = "Seneste %s indl�g";
// Post Error/Success
$locale['440a'] = "Filer af denne type m� ikke tilknyttes.";
$locale['440b'] = "Filnavn eller filst�rrelse er forkert.";
$locale['441'] = "Fejl: Du glemte at angive en overskrift eller at skrive en tekst";
$locale['442'] = "Dit indl�g er gemt";
$locale['443'] = "Dit svar er gemt";
$locale['444'] = "Emnet er slettet";
$locale['445'] = "Indl�gget er slettet";
$locale['446'] = "Dit indl�g er blevet opdateret";
$locale['447'] = "Tilbage til emne";
$locale['448'] = "Tilbage til debat";
$locale['449'] = "Tilbage til debatoversigt";
$locale['450'] = "Fejl: Din session er udl�bet, log p� igen og skriv et nyt indl�g";
$locale['451'] = "F�lg med i denne debat";
$locale['452'] = "Du bliver nu underrettet, n�r der er nye indl�g";
$locale['453'] = "Du f�lger ikke l�ngere med i denne debat";
$locale['454'] = "Dette indl�g er l�st. Kontakt ordstyreren for yderligere information.";
$locale['455'] = "Du m� f�rst redigere et indl�g %d minut(ter) efter at du har gemt det.";
// Post Form
$locale['460'] = "Overskrift";
$locale['461'] = "Indl�g";
$locale['462'] = "Fontfarve: ";
$locale['463'] = "Valgmuligheder";
$locale['464'] = "Tilknyttet fil";
$locale['465'] = " (Valgfrit)";
$locale['466'] = "Maksimal filst�rrelse: %s / Tilladte filtyper: %s";
$locale['467'] = "Tilf�j afstemning";
$locale['468'] = "Rediger afstemning";
$locale['469'] = "Overskrift";
$locale['470'] = "Svarmulighed";
$locale['470a'] = $locale['470']." 1";
$locale['470b'] = $locale['470']." 2";
$locale['471'] = "Tilf�j svarmulighed";
$locale['472'] = "Opdater";
$locale['473'] = "Slet";
$locale['474'] = "Redigerings�rsag";
// Post Form Options
$locale['480'] = " Fasthold emne i toppen af listen";
$locale['481'] = " L�s dette emne";
$locale['482'] = " Sl� smileys fra i dette indl�g";
$locale['483'] = " Vis min signatur i dette indl�g";
$locale['484'] = " Slet dette indl�g";
$locale['485'] = " Slet den tilknyttede fil -";
$locale['486'] = " Underret mig, n�r der kommer nye indl�g";
$locale['487'] = "Skjul redigering";
$locale['488'] = "L�s indl�g";
// Post Access Violation
$locale['500'] = "Du har ikke lov til at redigere dette indl�g.";

// Forum Post Merger
$locale['520'] = "Indl�g samlet";

// Search Forum Form
$locale['530'] = "S�g i debat";
$locale['531'] = "S�geord";
$locale['532'] = "S�g";
// Forum Notification Email
$locale['550'] = "Der er svar i debatten - {THREAD_SUBJECT}";
$locale['551'] = "Hej {USERNAME},

Der er kommet et svar i debatten '{THREAD_SUBJECT}' som du f�lger med i p� ".$settings['sitename'].". Du kan bruge linket herunder til at se svaret:

{THREAD_URL}

Hvis du ikke l�ngere �nsker at f�lge med i denne debat, kan du klikke p� linket 'Hold op med at f�lge debatten' i bunden af denne debat.

Venlig hilsen
".$settings['siteusername'].".";
?>