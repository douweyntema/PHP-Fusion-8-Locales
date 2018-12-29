<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/global.php
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

setlocale(LC_TIME, "da","DA"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['region'] = "DA";
$locale['xml_lang'] = "da";
$locale['short_lang_name'] = "da";
$locale['tinymce'] = "da";
$locale['select2'] = "da";
$locale['phpmailer'] = "da";
$locale['datepicker'] = "da";
$locale['datepicker_js'] = "DD-M-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "da";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";

// Full & Short Months
$locale['months'] = "&nbsp|Januar|Februar|Marts|April|Maj|Juni|Juli|August|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Maj|Jun|Jul|Aug|Sep|Okt|Nov|Dec";
$locale['weekdays'] = "S�ndag|Mandag|Tirsdag|Onsdag|Torsdag|Fredag|L�rdag";
// Timers
$locale['year'] = "�r";
$locale['year_a'] = "�r";
$locale['month'] = "m�ned";
$locale['month_a'] = "m�neder";
$locale['week'] = "uge";
$locale['week_a'] = "uger";
$locale['day'] = "dag";
$locale['day_a'] = "dage";
$locale['hour'] = "time";
$locale['hour_a'] = "timer";
$locale['minute'] = "minut";
$locale['minute_a'] = "minutter";
$locale['second'] = "sekund";
$locale['second_a'] = "sekunder";
$locale['just_now'] = "lige nu";
$locale['now'] = 'nu';
$locale['ago'] = "siden";
// Name
$locale['name'] = "Fulde navn";
$locale['username_pretext'] = "Dit offentlige brugernavn er det samme som din brugerprofil adresse: %s %s";
$locale['first_name'] = "Fornavn";
$locale['middle_name'] = "Mellemnavn";
$locale['last_name'] = "Efternavn";
// Standard User Levels
$locale['user0'] = "G�st";
$locale['user1'] = "Bruger";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super Administrator";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "G�st";
$locale['user_anonymous'] = "Anonym Bruger";
$locale['genitive'] = "%ss %s";
// Standard User Status
$locale['status0'] = "Aktiv";
$locale['status1'] = "Udelukket";
$locale['status2'] = "Ikke aktiveret";
$locale['status3'] = "Suspenderet";
$locale['status4'] = "Udelukket af sikkerheds�rsager";
$locale['status5'] = "Annulleret";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktiveret";
$locale['status8'] = "Inaktiv";
// Forum Moderator Level(s)
$locale['userf1'] = "Ordstyrer";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Der er ikke oprettet links\n";
$locale['global_003'] = "Intet at vise";
// Users Online
$locale['global_010'] = "Bes�gende";
$locale['global_011'] = "G�ster online";
$locale['global_012'] = "Brugere online";
$locale['global_013'] = "Ingen brugere online";
$locale['global_014'] = "Antal brugere";
$locale['global_015'] = "Ikke aktiverede";
$locale['global_016'] = "Nyeste bruger";
$locale['global_017'] = "Skift navigation";
// Forum Side panel
$locale['global_020'] = "Debatemner";
$locale['global_021'] = "Nyeste emne";
$locale['global_022'] = "Mest aktive emner";
$locale['global_023'] = "Ingen emner oprettet";
$locale['global_024'] = "Deltaget i debat";
$locale['global_027'] = "Ubesvarede tr�de";
$locale['global_028'] = "Ul�ste sp�rgsm�l";
// Comments Side panel
$locale['global_025'] = "Seneste kommentarer";
$locale['global_026'] = "Der er ikke skrevet kommentarer";
// Articles Side panel
$locale['global_030'] = "Nyeste artikler";
$locale['global_031'] = "Ingen artikler tilg�ngelige";
// Downloads Side panel
$locale['global_032'] = "Seneste downloads";
$locale['global_033'] = "Der er ikke oprettet downloads";
// Welcome panel
$locale['global_035'] = "Velkommen";
// Latest Active Forum Threads panel
$locale['global_040'] = "Senest aktive debatemner";
$locale['global_041'] = "Mine nyeste emner";
$locale['global_042'] = "Mine nyeste emner";
$locale['global_043'] = "Nye indl�g";
$locale['global_044'] = "Debat";
$locale['global_045'] = "Visninger";
$locale['global_046'] = "Svar";
$locale['global_047'] = "Nyeste indl�g";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Skrevet";
$locale['global_050'] = "Forfatter";
$locale['global_051'] = "Afstemning";
$locale['global_052'] = "Flyttet";
$locale['global_053'] = "Du har ikke oprettet debatemner endnu.";
$locale['global_054'] = "Du har ikke oprettet debatindl�g endnu.";
$locale['global_055'] = "Der er kommet %u nye indl�g siden dit sidste bes�g.";
$locale['global_056'] = "Mine udvalgte emner";
$locale['global_057'] = "Valgmuligheder";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Du har ikke udvalgt emner.";
$locale['global_060'] = "Frav�lg dette emne?";
// News & Articles
$locale['global_070'] = "Skrevet af ";
$locale['global_070b'] = "Se alle indl�g af %s";
$locale['global_071'] = "d. ";
$locale['global_071b'] = "Skribent";
$locale['global_072'] = "L�s mere";
$locale['global_073'] = " Kommentarer";
$locale['global_073b'] = " Kommentar";
$locale['global_074'] = " Visninger";
$locale['global_074b'] = " visning";
$locale['global_075'] = "Udskriv";
$locale['print'] = "Print";
$locale['global_076'] = "Rediger";
$locale['global_077'] = "Nyheder";
$locale['global_078'] = "Der er ikke oprettet nyheder endnu";
$locale['global_079'] = "I ";
$locale['global_080'] = "Ikke-kategoriseret";
$locale['global_081'] = "Nyheder hjem";
$locale['global_082'] = "Nyheder";
$locale['global_083'] = "Senest opdateret";
$locale['global_084'] = "Nyheds kategori";
$locale['global_085'] = "Alle andre kategorier";
$locale['global_086'] = "Seneste nyheder";
$locale['global_087'] = "Mest kommenterede nyheder";
$locale['global_088'] = "H�jest bed�mte nyheder";
$locale['global_089'] = "V�r den f�rste til at kommentere %s";
$locale['global_089a'] = "V�r den f�rste til at bed�mme %s";
$locale['global_089b'] = "Thumb visning";
$locale['global_089c'] = "Liste visning";
// Page Navigation
$locale['global_090'] = "Foreg�ende";
$locale['global_091'] = "N�ste";
$locale['global_092'] = "Side ";
$locale['global_093'] = " af ";
$locale['global_094'] = " ud af ";
// Guest User Menu
$locale['global_100'] = "Log ind";
$locale['global_101'] = "Brugernavn";
$locale['global_101a'] = "Indtast brugernavn";
$locale['global_101b'] = "Indtast mailadresse";
$locale['global_101c'] = "Indtast mailadresse eller brugernavn";
$locale['global_102'] = "Kodeord";
$locale['global_103'] = "Husk mig";
$locale['global_104'] = "Log ind";
$locale['global_105'] = "Er du endnu ikke registreret bruger?<br /><a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['global_106'] = "Har du glemt dit kodeord?<br />Bed om et nyt <a href='".BASEDIR."lostpassword.php' class='side'>ved at klikke her</a>.";
$locale['global_107'] = "Tilmelding";
$locale['global_108'] = "Glemt kodeord";
$locale['global_109'] = "Tilmeld";
// Member User Menu
$locale['global_120'] = "Rediger profil";
$locale['global_121'] = "Beskeder";
$locale['global_122'] = "Brugerliste";
$locale['global_123'] = "Administration";
$locale['global_124'] = "Log ud";
$locale['global_125'] = "Der er %u <br />";
$locale['global_126'] = "ny besked til dig";
$locale['global_127'] = "nye beskeder til dig";
$locale['global_128'] = "forslag";
$locale['global_129'] = "forslag";
// Poll
$locale['global_130'] = "Brugerafstemning";
$locale['global_131'] = "Stem";
$locale['global_132'] = "Du er n�dt til at logge p� for at stemme.";
$locale['global_133'] = "Stemme";
$locale['global_134'] = "Stemmer";
$locale['global_135'] = "Stemmer: ";
$locale['global_136'] = "P�begyndt: ";
$locale['global_137'] = "Afsluttet: ";
$locale['global_138'] = "Afstemningsarkiv";
$locale['global_139'] = "V�lg en afstemning fra listen:";
$locale['global_140'] = "Se";
$locale['global_141'] = "Se afstemning";
$locale['global_142'] = "Der er endnu ikke oprettet afstemninger.";
$locale['global_143'] = "Bed�mmelser";
// User Menu
$locale['UM060'] = "Log ind";
$locale['UM061'] = "Brugernavn";
$locale['UM061a'] = "Mailadresse";
$locale['UM061b'] = "Brugernavn eller mailadresse";
$locale['UM062'] = "Kodeord";
$locale['UM063'] = "Husk mig p� denne computer";
$locale['UM064'] = "Log ind";
$locale['UM065'] = "Ikke registreret endnu?<br /><a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['UM066'] = "Glemt kodeord?<br />F� et nyt <a href='".BASEDIR."lostpassword.php' class='side'>her</a>.";
$locale['UM067'] = "(ikke anbefalet p� offentlige eller delte computere)";
$locale['UM080'] = "Rediger profil";
$locale['UM081'] = "Private beskeder";
$locale['UM082'] = "Brugerliste";
$locale['UM083'] = "Administrations element";
$locale['UM084'] = "Log ud";
$locale['UM085'] = "Du har %u nye ";
$locale['UM086'] = "besked";
$locale['UM087'] = "beskeder";
$locale['UM088'] = "Fulgte tr�de";
// Submit (news, blog, link, article)
$locale['UM089'] = "Indsend ...";
$locale['UM090'] = "Indsend nyhed";
$locale['UM091'] = "Indsend link";
$locale['UM092'] = "Indsend artikel";
$locale['UM093'] = "Indsend foto";
$locale['UM094'] = "Indsend download";
$locale['UM095'] = "Indsend blog";
$locale['UM102'] = "Indsend FAQ";
// User Panel
$locale['UM096'] = "Velkommen: ";
$locale['UM097'] = "Personlig menu";
$locale['UM101'] = "Skift sprog";
// Gauges
$locale['UM098'] = "PB indboks :";
$locale['UM099'] = "PB udboks :";
$locale['UM100'] = "PB arkiv :";
// Keywords and Meta
$locale['tags'] = "Tags";
$locale['notfound'] = "Ikke fundet noget.";
$locale['sel_user'] = "V�lg bruger";
// Captcha
$locale['global_150'] = "Valideringskode";
$locale['global_151'] = "Indtast valideringskode:";
// Footer Counter
$locale['global_170'] = "Unikt bes�g";
$locale['global_171'] = "Unikke bes�g";
$locale['global_172'] = "Siden dannet p�: %s sekunder";
$locale['global_173'] = "Foresp�rgsler";
$locale['global_174'] = "Anvendt hukommelse";
$locale['global_175'] = "Gennemsnit: %s sekunder";
$locale['global_176'] = "Privatlivspolitik";
// Admin Navigation
$locale['global_180'] = "Administration";
$locale['global_181'] = "Forside";
$locale['global_182'] = "<strong>Bem�rk</strong>: Administratorkodeordet er ikke blevet indtastet eller er ikke korrekt.";
// Miscellaneous
$locale['global_190'] = "Vedligeholdelsestilstand er aktiveret";
$locale['global_191'] = "Din IP adresse er aktuelt udelukket.";
$locale['global_192'] = "Logger ud som ";
$locale['global_193'] = "Logger ind som ";
$locale['global_194'] = "Denne konto er aktuelt lukket.";
$locale['global_195'] = "Denne konto er endnu ikke aktiveret.";
$locale['global_196'] = "Forkert brugernavn eller kodeord.";
$locale['global_197'] = "Vent et �jeblik, mens vi overf�rer dig ...<br /><br />
[ <a href='index.php'>Eller klik her, hvis du ikke �nsker at vente</a> ]";
$locale['global_198'] = "<strong>Advarsel:</strong> Du har glemt at slette setup.php. Slet den med det samme!";
$locale['global_199'] = "<strong>Advarsel:</strong> administratorkodeord er ikke oprettet. Klik p� <a href='".BASEDIR."edit_profile.php'>Rediger profil</a> for at oprette det.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."S�g";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Debat";
//Themes
$locale['global_210'] = "Spring til indhold";
$locale['global_300'] = "intet tema fundet";
$locale['global_301'] = "Vi beklager meget, men siden kan ikke vises. Af ukendte �rsager kan sidens tema ikke findes. 
Hvis du er administrator p� siden, s� brug din FTP-klient til at uploade et tema designet til brug i forbindelse med 
<strong>PHP-Fusion version 7</strong> til folderen <strong>themes/</strong>. Efter at du har gjort det, skal du se 
under <strong>Hovedops�tning</strong> for at sikre dig, at det uploadede tema er kommet korrekt op p� siden. 
Bem�rk at den uploadede temafolder skal have n�jagtigt samme navn inklusive store og sm� bogstaver som navnet 
p� det tema, du v�lger under <strong>Hovedops�tning</strong>.<br /><br /> Hvis du er medlem p� siden, s� skal 
du kontakte sidens administrator via ".hide_email($settings[SITE_EMAIL])." mail og rapportere om problemet.";
$locale['global_302'] = "Det tema, som du har valgt under hovedops�tning eksisterer ikke eller er inkompatibelt!";
// JavaScript Not Enabled
$locale['global_303'] = "Jamen dog! Hvor finder vi det st�rke <strong>JavaScript</strong>?<br />Din browser underst�tter ikke
JavaScript eller har ikke underst�ttelsen sl�et til. Sl� <strong>JavaScript til</strong> i din browser for at se denne side
ordentligt,<br /> eller <strong>opgrader</strong> til en browser, der underst�tter JavaScript.";
// User Management
$locale['global_400'] = "suspenderet";
$locale['global_401'] = "udelukket";
$locale['global_402'] = "deaktiveret";
$locale['global_403'] = "brugerkontoen lukket";
$locale['global_404'] = "brugerkontoen anonymiseret";
$locale['global_405'] = "anonym bruger";
$locale['global_406'] = "Denne brugerkonto er udelukket af f�lgende �rsag:";
$locale['global_407'] = "Denne brugerkonto er suspenderet indtil ";
$locale['global_408'] = " af f�lgende �rsag:";
$locale['global_409'] = "Denne konto er blevet udelukket af sikkerheds�rsager.";
$locale['global_410'] = "Begrundelsen er: ";
$locale['global_411'] = "Denne konto er blevet sat i passiv tilstand.";
$locale['global_412'] = "Denne konto er blevet anonymiseret sandsynligvis p� grund af manglende aktivitet.";
// Banning due to flooding
$locale['global_440'] = "Automatisk udelukkelse via Flood Control";
$locale['global_441'] = "Din brugerkonto p� [SITENAME] er blevet udelukket";
$locale['global_442'] = "Hej [USER_NAME]<br />
Din konto p� [SITENAME] blev registreret fordi den offentliggjorde for mange indl�g p� for kort tid fra IP-adressen [USER_IP]. Derfor er kontoen blevet udelukket. Dette sker for at forhindre, at scripts kan l�gge spam ind meget hurtigt.<br />
Kontakt administratoren p� [SITE_EMAIL] for at f� gen�bnet din konto eller dokumenter, at det ikke var dig der udl�ste denne udelukkelse.<br />
[SITEUSERNAME]";
// Lifting of suspension
$locale['global_450'] = "Udelukkelsen er automatisk oph�vet af systemet";
$locale['global_451'] = "Udelukkelse er oph�vet p� [SITENAME]";
$locale['global_452'] = "Hej USER_NAME<br />
Udelukkelsen af din konto p� [SITEURL] er blevet oph�vet. Her er dine p�logningsoplysninger:<br />
Brugernavn: USER_NAME
Kodeord: Skjult af sikkerheds�rsager<br />
Hvis du har glemt dit kodeord kan du oprette et nyt via f�lgende link: LOST_PASSWORD<br /><br />
Venlig hilsen<br />
[SITEUSERNAME]";
$locale['global_453'] = "Hej USER_NAME<br />
Udelukkelsen af din konto p� [SITEURL] er blevet oph�vet.<br /><br />
Venlig hilsen<br />
[SITEUSERNAME]";
$locale['global_454'] = "Kontoen er genaktiveret p� [SITENAME]";
$locale['global_455'] = "Hej USER_NAME<br />
Sidste gang du loggede p�, blev din konto reaktiveret p� [SITEURL] og du er ikke l�ngere registreret som inaktiv.<br /><br />
Venlig hilsen<br />
[SITEUSERNAME]";
$locale['global_456'] = "Nyt koderord underrettelse til [SITENAME]";
$locale['global_457'] = "Hej USER_NAME,
<br/>Et nyt kodeord er blevet oprettet til din konto hos [SITENAME]. Her er de nye log ind oplysninger:<br/>
Brugernavn: USER_NAME<br/>Kodeord: [PASSWORD]<br/>Med venlig hilsen,<br/>[SITEUSERNAME]";
$locale['global_458'] = "Nyt kodeord er blevet oprettet til USER_NAME";
$locale['global_459'] = "Nyt kodeord er blevet oprettet til USER_NAME, og mail blev ikke sendt. Venligst underret brugeren om de nye oplysninger.";
// Function parsebytesize()
$locale['global_460'] = "Tom";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vi sender dig videre til %s, vent venligst. Hvis du ikke bliver sendt videre, s� klik her.";
// Captcha Locales
$locale['global_600'] = "Sikkerhedskode";
$locale['global_601'] = "Du skal indtaste en gyldig valideringskode";
$locale['recaptcha'] = "da";
// Site links
$locale['global_700'] = "Vis mere";
//Miscellaneous
$locale['global_900'] = "Ude af stand til at konvertere HEX til DEC";
$locale['global_901'] = "Inds�t media";
//Language Selection
$locale['global_ML100'] = "Sprog:";
$locale['global_ML101'] = "- V�lg sprog -";
$locale['global_ML102'] = "Hjemmesidens sprog";
$locale['global_ML103'] = "Skift sprog";
// Flood Control
$locale['flood'] = "Du kan ikke skrive indl�g f�r flood periodens cooldown er overst�et. Vent venligst i %s.";
$locale['no_image'] = "Ingen billede";
$locale['send_message'] = "Send besked";
$locale['go_profile'] = "G� til %s profilside";
// Global one word locales
$locale['hello'] = "Hej!";
$locale['goodbye'] = "Farvel!";
$locale['welcome'] = "Velkommen tilbage";
$locale['home'] = "Hjem";
// Status
$locale['error'] = "Fejl!";
$locale['success'] = "Gennemf�rt!";
$locale['enable'] = "Aktiver";
$locale['disable'] = "Deaktiver";
$locale['can'] = "kan";
$locale['cannot'] = "kan ikke";
$locale['no'] = "Nej";
$locale['yes'] = "Ja";
$locale['off'] = "Aktiveret";
$locale['on'] = "Deaktiveret";
$locale['or'] = "eller";
$locale['by'] = "af";
$locale['in'] = "i";
$locale['of'] = "af";
$locale['and'] = "og";
$locale['na'] = "Ingen information tilg�ngelig";
$locale['joined'] = "Tilmeldt siden: ";
$locale['enter'] = "Kom ind";
// Navigation
$locale['next'] = "N�ste";
$locale['previous'] = "Forrige";
$locale['back'] = "Tilbage";
$locale['forward'] = "Frem";
$locale['go'] = "G�";
$locale['cancel'] = "Fortryd";
$locale['clear'] = "Ryd";
$locale['move'] = "Flyt";
$locale['move_up'] = "Flyt op";
$locale['move_down'] = "Flyt ned";
$locale['load_more'] = "Hent flere emner";
$locale['load_end'] = "Hent fra begyndelsen";
// Actions
$locale['add'] = "Tilf�j";
$locale['save'] = "Gem";
$locale['save_changes'] = "Gem �ndringer";
$locale['save_and_close'] = "Gem og luk";
$locale['confirm'] = "Bekr�ft";
$locale['update'] = "Opdater";
$locale['updated'] = "Opdateret";
$locale['remove'] = "Fjern";
$locale['delete'] = "Slet";
$locale['search'] = "S�g";
$locale['help'] = "Hj�lp";
$locale['register'] = "Registrer";
$locale['ban'] = "Udeluk";
$locale['reactivate'] = "Genaktiver";
$locale['user'] = "Bruger";
$locale['promote'] = "Promover";
$locale['show'] = "Vis";
$locale['actions'] = "Handlinger";
$locale['language'] = "Sprog";
$locale['loading'] = "Henter ...";
// Persons & Identifiers
$locale['you'] = "Dig";
$locale['me'] = "Mig";
$locale['they'] = "Dem";
$locale['we'] = "Vi";
$locale['us'] = "Os";
$locale['he'] = "Ham";
$locale['she'] = "Hende";
$locale['it'] = "Den";
//Tables
$locale['order'] = "R�kkef�lge";
$locale['sort'] = "Sorter";
$locale['id'] = "ID";
$locale['title'] = "Titel";
$locale['rights'] = "Rettigheder";
$locale['info'] = "Info";
$locale['image'] = "Billede";
// Forms
$locale['choose'] = "V�lg venligst en ...";
$locale['no_opts'] = "Ingen valg";
$locale['root'] = "Som for�ldre";
$locale['choose-user'] = "V�lg venligst en bruger ...";
$locale['choose-location'] = "V�lg venligst en lokation";
$locale['parent'] = "Opret som ny for�lder ...";
$locale['item_order'] = "Emne sortering";
$locale['status'] = "Status";
$locale['note'] = "Lav en note om dette emne";
$locale['publish'] = "Offentligg�r";
$locale['unpublish'] = "Fjern offentligg�relse";
$locale['sticky'] = "Sticky";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Kladde";
$locale['settings'] = "Indstillinger";
$locale['posted'] = "oprettet";
$locale['profile'] = "Profil";
$locale['edit'] = "Rediger";
$locale['qedit'] = "Hurtig redigering";
$locale['view'] = "Se";
$locale['login'] = "Log ind";
$locale['logout'] = "Log ud";
$locale['admin-logout'] = "Admin log ud";
$locale['message'] = "Private beskeder";
$locale['logged'] = "Logget ind som ";
$locale['version'] = "Version ";
$locale['browse'] = "Browse ...";
$locale['close'] = "Luk";
$locale['nopreview'] = "Intet at vise";
$locale['mark_as'] = "Marker som";
$locale['preview'] = "Se";
$locale['custom'] = "Brugerdefineret";
$locale['submit'] = "Send";
// Alignment
$locale['left'] = "Venstre";
$locale['center'] = "Center";
$locale['right'] = "H�jre";
// Comments and ratings
$locale['comments'] = "Kommentarer";
$locale['ratings'] = "Bed�mmelser";
$locale['comments_ratings'] = "Kommentarer og bed�mmelser";
$locale['user_account'] = "Brugerkonto";
$locale['about'] = "Om";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "forslag|forslag";
$locale['fmt_article'] = "artikel|artikler";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "kommentar|kommentarer";
$locale['fmt_vote'] = "stemme|stemmer";
$locale['fmt_rating'] = "bed�mmelse|bed�mmelser";
$locale['fmt_day'] = "dage|dage";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "f�lger|f�lgere";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "g�st|g�ster";
$locale['fmt_hour'] = "time|timer";
$locale['fmt_item'] = "emne|emner";
$locale['fmt_member'] = "bruger|brugere";
$locale['fmt_message'] = "besked|beskeder";
$locale['fmt_minute'] = "minut|minutter";
$locale['fmt_month'] = "m�ned|m�neder";
$locale['fmt_news'] = "nyhed|nyheder";
$locale['fmt_photo'] = "foto|fotos";
$locale['fmt_post'] = "indl�g|indl�g";
$locale['fmt_question'] = "sp�rgsm�l|sp�rgsm�l";
$locale['fmt_read'] = "l�sning|l�sninger";
$locale['fmt_second'] = "sekund|sekunder";
$locale['fmt_shouts'] = "replik|replikker";
$locale['fmt_thread'] = "tr�d|tr�de";
$locale['fmt_user'] = "bruger|brugere";
$locale['fmt_views'] = "visning|visninger";
$locale['fmt_weblink'] = "link|links";
$locale['fmt_week'] = "uge|uger";
$locale['fmt_year'] = "�r|�r";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "gruppe|grupper";
$locale['fmt_category'] = "kategori|kategorier";
$locale['fmt_review'] = "anmeldelse|anmeldelser";