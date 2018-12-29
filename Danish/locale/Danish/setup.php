<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/setup.php
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
$locale['title'] = "PHP-Fusion version 8 installation";
$locale['sub-title'] = "PHP-Fusion version 8 installation";
$locale['os_version'] = '8.0';
$locale['xml_lang'] = "da";
$locale['charset'] = "uft8";
$locale['001'] = "Trin 1: Sprogvalg";
$locale['002'] = "Trin 2: Test af tilladelser p� filer og foldere";
$locale['003'] = "Trin 3: Databaseops�tning";
$locale['004'] = "Trin 4: Ops�tning af konfigurationsfil og database";
$locale['005'] = "Trin 5: Ops�tning af data vedr�rende administrationen";
$locale['006'] = "Trin 6: Afsluttende ops�tning";
$locale['007'] = "N�ste";
$locale['008'] = "Tilbage";
$locale['009'] = "Afslut";

// Step 1
$locale['010'] = "V�lg et sprog";
$locale['011'] = "Hent flere sprogfiler p� <a href='http://www.php-fusion.co.uk'>php-fusion.co.uk</a>.";

// Step 2
$locale['020'] = "For at installationen kan forts�tte, skal f�lgende filer v�re skrivbare:";
$locale['021'] = "Skriverettigheder st�r korrekt, klik p� N�STE for at forts�tte.";
$locale['022'] = "Skriverettigheder st�r forkert. Du skal �ndre rettigheder p� de filer og foldere, som st�r forkert.";
$locale['023'] = "I orden";
$locale['024'] = "St�r forkert";
$locale['025'] = "Genopfrisk";

// Step 3 - Access criteria
$locale['030'] = "Database adgangsops�tning";
$locale['031'] = "Database v�rtsnavn:";
$locale['032'] = "Database brugernavn:";
$locale['033'] = "Database kodeord:";
$locale['034'] = "Databasenavn:";
$locale['035'] = "Tabellernes fornavn:";
$locale['036'] = "Cookiens fornavn:";
$locale['037'] = "Aktiver PDO eller MySqli";
$locale['038'] = "PDO er ikke tilg�ngelig";
$locale['039'] = "PDO";
$locale['039b'] = "MySqli";
$locale['039c'] = "V�lg sprog der skal benyttes:";

// Step 4 - Database Setup
$locale['040'] = "Forbindelse til databasen er etableret.";
$locale['041'] = "Konfigurationsdata er skrevet til filen.";
$locale['042'] = "Databasens tabeller er skabt.";
$locale['043'] = "Fejl:";
$locale['044'] = "Var ikke i stand til at komme i forbindelse med databasen.";
$locale['045'] = "Kontroller dine MySQL oplysninger.";
$locale['046'] = "Kunne ikke skrive til konfigurationsfilen.";
$locale['047'] = "S�rg for at filen config.php er �ben for skrivning.";
$locale['048'] = "Var ikke i stand til at skabe tabellerne i databasen.";
$locale['049'] = "Angiv navnet p� din database.";
$locale['050'] = "Ude af stand til at kobles p� din MySQL database.";
$locale['051'] = "Den angivne MySQL database eksisterer ikke.";
$locale['052'] = "Fejl i fornavnet til tabellerne.";
$locale['053'] = "Det angivne fornavn bruges allerede.";
$locale['054'] = "Kunne ikke skrive til eller slette tabeller i MySQL.";
$locale['055'] = "Du skal sikre dig, at din MySQL bruger har l�se, skrive og sletterettigheder til den valgte database.";
$locale['056'] = "Tomme felter.";
$locale['057'] = "Du skal sikre dig, at du har angivet alle n�dvendige oplysninger for at kunne etablere forbindelse til MySQL.";

// Step 5 - Super Admin login
$locale['060'] = "Hovedadministratorens p�logningsoplysninger";
$locale['061'] = "Brugernavn:";
$locale['062'] = "Kodeord:";
$locale['063'] = "Gentag kodeord:";
$locale['064'] = "Administrators kodeord:";
$locale['065'] = "Gentag administrators kodeord:";
$locale['066'] = "Mail adresse:";

// Step 6 - User details validation
$locale['070'] = "Brugernavnet indeholder forkerte karakterer.";
$locale['070b'] ="Brugernavnet skal opgives.";
$locale['071'] = "Dine to kodeord er ikke identiske.";
$locale['072'] = "Forkert kodeord. Du m� kun bruge alfanumeriske karakterer.<br />Kodeordet skal mindst v�re p� 8 karakterer.";
$locale['072b'] ="Kodeord skal opgives";
$locale['073'] = "De to administratorkodeord er ikke identiske.";
$locale['074'] = "Brugerkodeord og administratorkodeord skal v�re forskellige.";
$locale['075'] = "Dit administratorkodeord er ikke gyldigt. Du m� kun bruge alfanumeriske karakterer.<br />Kodeordet skal v�re p� mindst 8 karakterer.";
$locale['075b'] ="Administratorkodeord skal opgives.";
$locale['076'] = "Det ser ikke ud, som om du har opgivet en korrekt mail adresse.";
$locale['076b'] ="Mail adresse skal opgives.";
$locale['077'] = "Der er fejl eller mangler i dine oplysninger:";

// Step 6 - Admin Panels
$locale['080'] = "Administratorer";
$locale['081'] = "Artikelkategorier";
$locale['082'] = "Artikler";
$locale['083'] = "Bannere";
$locale['084'] = "BB Koder";
$locale['085'] = "Udeluk";
$locale['086'] = "Kommentarer";
$locale['087'] = "Brugeroprettede sider";
$locale['088'] = "Sikkerhedskopiering";
$locale['089'] = "Downloadkategorier";
$locale['090'] = "Downloads";
$locale['091'] = "FAQs";
$locale['092'] = "Debat";
$locale['093'] = "Billeder";
$locale['094'] = "Infusioner";
$locale['095'] = "Infusionsadministration";
$locale['096'] = "Brugere";
$locale['097'] = "Nyhedskategorier";
$locale['098'] = "Nyheder";
$locale['099'] = "Elementer";
$locale['100'] = "Fotoalbums";
$locale['101'] = "PHP Info";
$locale['102'] = "Afstemninger";
$locale['103'] = "Replikboks";
$locale['104'] = "Interne links";
$locale['105'] = "Smileys";
$locale['106'] = "Brugerforslag";
$locale['107'] = "Opgradering";
$locale['108'] = "Brugergrupper";
$locale['109'] = "Linkkategorier";
$locale['110'] = "Links";
$locale['111'] = "Hovedops�tning";
$locale['112'] = "Ops�tning af dato og klokkesl�t";
$locale['113'] = "Debatops�tning";
$locale['114'] = "Tilmeldingsops�tning";
$locale['115'] = "Fotoalbums";
$locale['116'] = "Diverse";
$locale['117'] = "Private beskeder";
$locale['118'] = "Brugerfelter";
$locale['119'] = "Rangsystem";
$locale['120'] = "Kategorier for brugerfelter";
$locale['121'] = "Nyheder";
$locale['122'] = "Brugerh�ndtering";
$locale['123'] = "Downloads";
$locale['124'] = "Nyheder, artikler og lignende pr. side";
$locale['125'] = "Sikkerhed";
$locale['126'] = "Nyhedsops�tning";
$locale['127'] = "Downloads - ops�tning";
$locale['128'] = "�ndring af administrativt kodeord";
$locale['129'] = "Fejllog";
$locale['129a'] = "Brugerlog";
$locale['129b'] = "robots.txt";
$locale['129c'] = "Sprog indstillinger";
$locale['129d'] = "Permalinks";
$locale['129e'] = "Migrations v�rkt�j";
$locale['129f'] = "Tema indstillinger";
$locale['130a'] = "Blog kategorier";
$locale['130b'] = "Blog";
$locale['130c'] = "Blog indstillinger";
$locale['130d'] = "Fusion Fil Manager";

// Step 6 - Navigation Links
$locale['130'] = "Forside";
$locale['131'] = "Artikler";
$locale['132'] = "Downloads";
$locale['133'] = "FAQ";
$locale['134'] = "Debatforum";
$locale['135'] = "Kontakt siden";
$locale['136'] = "Nyhedskategorier";
$locale['137'] = "Links";
$locale['138'] = "Fotoalbum";
$locale['139'] = "S�g";
$locale['140'] = "Foresl� link";
$locale['141'] = "Foresl� nyhed";
$locale['142'] = "Foresl� artikel";
$locale['143'] = "Foresl� billede";
$locale['144'] = "Foresl� download";
$locale['145'] = "Foresl� blog";

// Stage 6 - Panels
$locale['160'] = "Navigation";
$locale['161'] = "Brugere online";
$locale['162'] = "Debatindl�g";
$locale['163'] = "Nyeste artikler";
$locale['164'] = "Velkomstbesked";
$locale['165'] = "Liste over debatter";
$locale['166'] = "Brugerinformation";
$locale['167'] = "Brugerafstemning";
$locale['168'] = "";
$locale['169'] = "Blog arkiv";

//Multilanguage table rights
$locale['MLT001'] = "Artikler";
$locale['MLT002'] = "Brugeroprettede sider";
$locale['MLT003'] = "Downloads";
$locale['MLT004'] = "FAQs";
$locale['MLT005'] = "Debatforums";
$locale['MLT006'] = "Nyheder";
$locale['MLT007'] = "Fotoalbums";
$locale['MLT008'] = "Afstemninger";
$locale['MLT009'] = "Mail skabeloner";
$locale['MLT010'] = "Links";
$locale['MLT011'] = "Hjemmesidelinks";
$locale['MLT012'] = "Elementer";
$locale['MLT013'] = "Debatforum rang";
$locale['MLT014'] = "Blog";

// Stage 6 - News & Blog default Categories
$locale['180'] = "Fejl";
$locale['181'] = "Downloads";
$locale['182'] = "Spil";
$locale['183'] = "Grafik";
$locale['184'] = "Udstyr";
$locale['185'] = "Journal";
$locale['186'] = "Brugere";
$locale['187'] = "Mods";
$locale['188'] = "Film";
$locale['189'] = "Netv�rk";
$locale['190'] = "Nyheder";
$locale['191'] = "PHP-Fusion";
$locale['192'] = "Sikkerhed";
$locale['193'] = "Software";
$locale['194'] = "Temaer";
$locale['195'] = "Windows";

// Stage 6 - Default Forum Ranks
$locale['200'] = "Superadministrator";
$locale['201'] = "Administrator";
$locale['202'] = "Ordstyrer";
$locale['203'] = "Begynder";
$locale['204'] = "Lidt �vet";
$locale['205'] = "Medlem";
$locale['206'] = "Meget �vet";
$locale['207'] = "Erfaren bruger";
$locale['208'] = "Ekspert";

// Stage 6 - Default Smileys
$locale['210'] = "Smil";
$locale['211'] = "Blink";
$locale['212'] = "Trist";
$locale['213'] = "Irriteret";
$locale['214'] = "Chock";
$locale['215'] = "Ligeglad";
$locale['216'] = "Sejt";
$locale['217'] = "Bredt grin";
$locale['218'] = "Vred";

// Stage 6 - User Field Categories
$locale['220'] = "Kontaktinformation";
$locale['221'] = "Diverse informationer";
$locale['222'] = "Valgmuligheder";
$locale['223'] = "Statistik";
$locale['224'] = "Privaliv";

// Welcome message
$locale['230'] = "Velkommen til din side";

// Final message
$locale['240'] = "Installationen er f�rdig, og PHP-Fusion 7 er nu klar til brug.<br />
<a href='index.php'>Klik her</a> for at g� videre til din nye PHP-Fusion-side.<br />
<strong>HUSK</strong> at du b�r slette filen setup.php fra din server og �ndre rettighederne<br />
p� filen config.php tilbage til 644 af sikkerhedshensyn<br /><br />
Tak fordi du valgte PHP-Fusion.";

// Default time settings
$locale['shortdate'] = "%d.%m.%y";
$locale['longdate'] = "%d %B %Y %H:%M:%S";
$locale['forumdate'] = "%d-%m-%Y %H:%M";
$locale['newsdate'] = "%d %B %Y";
$locale['subheaderdate'] = " %d %B %Y %H:%M:%S";

// Email Template Setup, don�t translate the words between brackets [].
$locale['T001'] = "Mail skabeloner";
$locale['T101'] = "Underretning ved ny PB";
$locale['T102'] = "Du har en ny privat besked fra [USER] ventende p� [SITENAME]";
$locale['T103'] = "Hej [RECEIVER],\r\nDu har modtaget en ny privat besked med emnet [SUBJECT] fra [USER] p� [SITENAME]. Du kan l�se din private besked p� [SITEURL]messages.php\r\n\r\nBesked: [MESSAGE]\r\n\r\nDu kan deaktivere underretningen fra Private beskeder administrationen hvis du ikke l�ngere �nsker at modtage dem.\r\n\r\nMed venlig hilsen,\r\n[SENDER].";
$locale['T201'] = "Underretning om nye debatforum indl�g";
$locale['T202'] = "Tr�dsvar underretning - [SUBJECT]";
$locale['T203'] = "Hej [RECEIVER],\r\n\r\nEt svar er oprettet i den debattr�d \'[SUBJECT]\' du f�lger p� [SITENAME]. Se svaret p� f�lgende link:\r\n\r\n[THREAD_URL]\r\n\r\n�nsker du ikke l�ngere at f�lge denne tr�d kan du klikke p� \'Hold op med at f�lge denne tr�d\' linket i toppen af tr�den.\r\n\r\nMed venlig hilsen,\r\n[SENDER].";
$locale['T301'] = "Kontakt formular";
$locale['T302'] = "[SUBJECT]";
$locale['T303'] = "[MESSAGE]";

// Language Admin
$locale['L001'] = "Multisprogs indstillinger";