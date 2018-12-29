<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/members.php
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
// Member Management Options
$locale['400'] = "Brugere";
$locale['401'] = "Brugernavn";
$locale['402'] = "Tilf�j ny bruger";
$locale['403'] = "Brugerstatus";
$locale['404'] = "Valgmuligheder";
$locale['405'] = "Se";
$locale['406'] = "Rediger";
$locale['407'] = "Aktiver";
$locale['408'] = "Oph�v udelukkelse";
$locale['409'] = "Udeluk";
$locale['410'] = "Slet";
$locale['411'] = "Der er ikke fundet: <i>%s brugere</i>";
$locale['412'] = ", hvis brugernavn begynder med ";
$locale['413'] = ", der passer p� s�gekriteriet ";
$locale['414'] = "Vis alle";
$locale['415'] = "S�g efter bruger:";
$locale['416'] = "S�g";
$locale['417'] = "V�lg handling";
$locale['418'] = "Fortryd";
$locale['419'] = "Genopret";
// Ban/Unban/Delete Member
$locale['420'] = "Udelukkelsen er gennemf�rt";
$locale['421'] = "Udelukkelsen er oph�vet";
$locale['422'] = "Brugeren er slettet";
$locale['423'] = "Er du sikker p�, at denne bruger skal slettes?";
$locale['424'] = "Brugerkonto aktiveret";
$locale['425'] = "<h2>Advarsel!</h2><br />
Du er ved at slette bruger <strong>%s</strong> !<br />
F�lgende indhold <u>oprettet af denne bruger</u> p� denne hjemmeside vil blive slettet hvis du forts�tter:<br />
- Artikler<br />
- Nyheder<br />
- Debatforumtr�de. Bem�rk at indl�g oprettet af andre brugere i disse tr�de ogs� vil blive slettet, sammen med afgivne stemmer i afstemninger og filvedh�ftelser.<br />
- Debatforumindl�g<br />
- Debatforum vedh�ftelser<br />
- Kommentarer<br />
- Private beskeder sendt eller modtaget af denne bruger<br />
- Afgivne afstemningsstemmer<br />
- Afgivne bed�mmelser<br />
Medmindre det f.eks. er en spammer anbefaler vi at du i stedet for udelukker, suspenderer eller anonymiserer brugeren.<br />
<br />
Vil du slette denne bruger?<br />";
$locale['426'] = "Ja";
$locale['427'] = "Nej";
// Edit Member Details
$locale['430'] = "Rediger bruger";
$locale['431'] = "Brugeroplysninger er opdateret";
$locale['432'] = "Tilbage til brugerstyring";
$locale['433'] = "Tilbage til administration";
$locale['434'] = "Var ikke i stand til at opdatere brugeroplysninger:";
// Extra Edit Member Details form options
$locale['440'] = "Gem �ndringer";
// Update Profile Errors
$locale['450'] = "Den prim�re administrator kan ikke redigeres.";
$locale['451'] = "Du skal angive et brugernavn og en mail adresse.";
$locale['452'] = "Brugernavnet indeholder forbudte tegn.";
$locale['453'] = "Brugernavnet ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." anvendes allerede.";
$locale['454'] = "Fejl i mail adresse.";
$locale['455'] = "Mail adressen ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." anvendes allerede.";
$locale['456'] = "De to kodeord er ikke identiske.";
$locale['457'] = "Der er fejl i kodeordet, brug kun alfanumeriske karakterer.<br />
Kodeordet skal v�re p� mindst 8 tegn.";
$locale['458'] = "<strong>Advarsel:</strong> fejl i udf�relsen af scriptet.";
// View Member Profile
$locale['470'] = "Brugerprofil";
$locale['472'] = "Statistik";
$locale['473'] = "Brugergrupper";
// Add Member Errors
$locale['480'] = "Tilf�j bruger";
$locale['481'] = "Brugerkontoen er oprettet.";
$locale['482'] = "Brugerkontoen kunne ikke oprettes.";
// Suspension Log 
$locale['510s'] = "Udelukkelseslog for ";
$locale['511s'] = "Der er ikke registreret udelukkelse for denne bruger.";
$locale['512s'] = "Tidligere udelukkelse for ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Dato";
$locale['515'] = "�rsag";
$locale['516'] = "Udelukket af";
$locale['517'] = "Systemhandling";
$locale['518'] = "Tilbage til brugerprofil";
$locale['519'] = "Udelukkelseshistorik for denne bruger ";
$locale['520'] = "Oph�vet: ";
$locale['521'] = "IP: ";
$locale['522'] = "Endnu ikke genaktiveret";
$locale['540'] = "Fejl";
$locale['541'] = "Fejl: Du skal angive en �rsag til udelukkelsen!";
$locale['542'] = "Fejl: Du skal angive en �rsag til sikkerhedsudelukkelsen!";
// User Management Admin
$locale['550'] = "Suspend�r bruger: ";
$locale['551'] = "Varighed i dage:";
$locale['552'] = "�rsag:";
$locale['553'] = "Udelukket af";
$locale['554'] = "Der er ikke registreret udelukkelse for denne bruger.";
$locale['555'] = "Hvis du beslutter, at denne bruger skal udelukkes, s� klik UDELUK";
$locale['556'] = "Oph�v udelukkelse af brugeren: ";
$locale['557'] = "Oph�v suspension";
$locale['558'] = "Fjern udelukkelse af brugeren: ";
$locale['559'] = "Oph�v udelukkelse for: ";
$locale['560'] = "Oph�v sikkerhedsudelukkelse for brugeren: ";
$locale['561'] = "Oph�v sikkerhedsudelukkelse";
$locale['562'] = "Udeluk brugeren: ";
$locale['563'] = "Sikkerhedsudeluk brugeren: ";
$locale['585a'] = "Angiv en �rsag til udelukkelse eller oph�velse af udelukkelse for brugeren: ";
$locale['566'] = "Udelukkelsen er oph�vet";
$locale['568'] = "Sikkerhedsudelukkelse gennemf�rt";
$locale['569'] = "Sikkerhedsudelukkelse oph�vet";
$locale['572'] = "Brugeren er suspenderet";
$locale['573'] = "Suspensionen er oph�vet";
$locale['574'] = "Brugeren er deaktiveret";
$locale['575'] = "Brugeren er genaktiveret";
$locale['576'] = "Kontoen er slettet";
$locale['577'] = "Sletning af brugerkonto oph�vet";
$locale['578'] = "Brugerkontoen er slettet og brugeren anonymiseret";
$locale['579'] = "Anonymiseringen er oph�vet";
$locale['580'] = "Fjern inaktive brugere";
$locale['581'] = "Du har flere end 50 inaktive brugere og er n�dt til at gennemf�re processen <strong>%d gange</strong>.";
$locale['582'] = "Genaktiver";
$locale['583'] = "Geninds�t";
$locale['584'] = "V�lg ny status";
$locale['585'] = "Denne bruger blev oprindelig udelukket af sikkerheds�rsager! Er du sikker p�, at du vil genaktivere brugeren nu?";
$locale['590'] = "Suspend�r";
$locale['591'] = "Oph�v suspension";
$locale['592'] = "udelukker";
$locale['593'] = "oph�ver udelukkelsen af";
$locale['594'] = "Angiv en �rsag til at du ";
$locale['595'] = " brugeren ";
$locale['596'] = "Varighed:";
$locale['600'] = "Sikkerhedsudelukkelse";
$locale['601'] = "sikkerhedsudelukkelse";
$locale['602'] = "Oph�v";
$locale['603'] = "oph�ver";
$locale['604'] = "�rsag:";
// Deactivation System
$locale['610'] = "<strong>%d bruger(e)</strong> har ikke v�ret logget p� i <strong>%d dag(e)</strong> og er markeret som inaktive. 
Ved at deaktivere disse brugere vil de f� <strong>%d dag(e)</strong> f�r de bliver %s.";
$locale['611'] = "Bem�rk at visse brugere kan have bidraget med indhold til siden s� som debatindl�g, kommentarer, billeder og s� videre.
Dette indhold vil blive slettet, hvis deaktiverede brugere slettes.";
$locale['612'] = "bruger";
$locale['613'] = "brugere";
$locale['614'] = "Deaktiver";
$locale['615'] = "slettet helt";
$locale['616'] = "anonymiser";
$locale['617'] = "Advarsel:";
$locale['618'] = "Det anbefales st�rkt at �ndre den handling, som udl�ses af en deaktivering til anonymisering i stedet for sletning for ikke at miste data!";
$locale['619'] = "Det kan du g�re det samme <a href='".ADMIN."settings_users.php".$aidlink."'>HER</a>.";
$locale['620'] = "anonymiser";
$locale['621'] = "Automatisk deaktivering af inaktive brugere.";
?>