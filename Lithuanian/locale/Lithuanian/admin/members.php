<?php
// Member Management Options
$locale['400'] = "Vartotojai";
$locale['401'] = "Vartotojas";
$locale['402'] = "Pridėtį naują vartotoją";
$locale['403'] = "Vartotojo tipas";
$locale['404'] = "Pasirinkimai";
$locale['405'] = "Peržiūrėti";
$locale['406'] = "Redaguoti";
$locale['407'] = "Aktyvuoti";
$locale['408'] = "Atblokuoti šį vartotoją";
$locale['409'] = "Užblokuoti šį vartotoją";
$locale['410'] = "Ištrinti";
$locale['411'] = "Čia nėra %s vartotojų";
$locale['412'] = " prasidedančių ";
$locale['413'] = " atitinkantys ";
$locale['414'] = "Rodyti visus";
$locale['415'] = "Ieškoti nario:";
$locale['416'] = "Ieškoti";
$locale['417'] = "Pasirink veiksmą";
$locale['418'] = "Atšaukti";
$locale['419'] = "Atkurti";
// Ban/Unban/Delete Member
$locale['420'] = "Draudimas įsigaliojo";
$locale['421'] = "Draudimas pašalintas";
$locale['422'] = "Vartotojas ištrintas";
$locale['423'] = "Ar jūs tikrai norite ištrinti šį vartotoją?";
$locale['424'] = "Vartotojas aktyvuotas";
// Edit Member Details
$locale['430'] = "Redaguoti vartotojo aprašymą";
$locale['431'] = "Vartotojo aprašymas atnaujintas";
$locale['432'] = "Grįžti į vartotojų administravimą";
$locale['433'] = "Grįžti į adminisitracija";
$locale['434'] = "Negalima atnaujinti vartotojo aprašymo:";
// Extra Edit Member Details form options
$locale['440'] = "Išsaugoti pakeitimus";
// Update Profile Errors
$locale['450'] = "Negalima redaguoti pagrindinio administratoriaus profilio.";
$locale['451'] = "Privalote nurodyti el.paštą ir vartotojo vardą.";
$locale['452'] = "Vartotojo varde yra neleistinų simbolių.";
$locale['453'] = "Vartotojo vardas ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." jau yra naudojamas.";
$locale['454'] = "Blogai įvestas el.pašto adresas.";
$locale['455'] = "Šis el.paštas ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")."  jau yra naudojamas.";
$locale['456'] = "Slaptažodžiai nesutampa.";
$locale['457'] = "Blogas slaptažodis, prašome naudoti tik lotyniškas raides ir skačius.<br />
Slaptažodį turi sudaryti mažiausiai 6 simboliai.";
$locale['458'] = "<strong>Dėmesio:</strong> nelaukta skripto klaida.";
// View Member Profile
$locale['470'] = "Vartotojo aprašymas";
$locale['472'] = "Statistika";
$locale['473'] = "Vartotojo grupės";
// Add Member Errors
$locale['480'] = "Pridėti vartotoją";
$locale['481'] = "Vartotojas sukurtas.";
$locale['482'] = "Vartotojas nesukurtas.";
// Suspension Log
$locale['510s'] = "Spendavimo logas ";
$locale['511s'] = "Šis narys neturi spendavimo įrašų istorijoje.";
$locale['512s'] = "Ankstesni blokavimai ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Data";
$locale['515'] = "Priežastis";
$locale['516'] = "Suspendavęs administratorius";
$locale['517'] = "Sistomos veiksmas";
$locale['518'] = "Grįžti į profilį";
$locale['519'] = "Šio vartotojo spendavimo logas ";
$locale['520'] = "Nuimtas: ";
$locale['521'] = "IP: ";
$locale['522'] = "Dar neatkurtas";
$locale['540'] = "Klaida";
$locale['541'] = "Klaida: Jūs privalote įversti spendavimo priežastį!";
$locale['542'] = "Klaida: Jūs privalote įversti saugumo blokavimo priežastį!";
// User Management Admin
$locale['550'] = "Suspenduoti vartotoją: ";
$locale['551'] = "Trukmė dienomis";
$locale['552'] = "Priežastis:";
$locale['553'] = "Suspenduoti";
$locale['554'] = "Šis narys neturi spendavimo įrašų istorijoje.";
$locale['555'] = "Jeigu nusprendėte, jog šis narys turėtų būti užblokuotas, spauskite &#39;blokuoti&#39;";
$locale['556'] = "Pašalinti spendavimą vartotojui: ";
$locale['557'] = "Pašalinti spendavimą";
$locale['558'] = "Pašalinti blokavimą vartotojui: ";
$locale['559'] = "Pašalinti blokavimą ";
$locale['560'] = "Pašalinti saugumo blokavimą vartotojui: ";
$locale['561'] = "Pašalinti saugumo blokavimą";
$locale['562'] = "Blokuoti vartotoją: ";
$locale['563'] = "Saugumo blokavimas vartotojo: ";
$locale['585a'] = "Įvesk blokavimo/atblokavimo priežastį ";

$locale['566'] = "Blokavimas pašalintas";
$locale['568'] = "Saugumo blokavimas uždėtas";
$locale['569'] = "Saugumo blokavimas pašalintas";
$locale['572'] = "Narys suspenduotas";
$locale['573'] = "Suspendavimas pašalintas";
$locale['574'] = "Narys deaktyvuotas";
$locale['575'] = "Narys reaktyvuotas";
$locale['576'] = "Anketa atšaukta";
$locale['577'] = "Anketos atšauktimas atšauktas";
$locale['578'] = "Anketa atšauka ir anonimizuota";
$locale['579'] = "Anktetos anonimizavimas atšauktas";
$locale['580'] = "Deaktyvuoti neaktyvius narius";
$locale['581'] = "Jūs turite virš 50 neaktyvių narių ir turėsite vykdyti deaktyvacijos procesą <strong>%d kartus(-ų)</strong>.";
$locale['582'] = "Reaktyvuoti";
$locale['583'] = "Atkūrti";
$locale['584'] = "Pasirink naują statusą";
$locale['585'] = "Šis narys pirmiausia buvo užblokuotas dėl saugumo priežasčių! Ar Jūs tikras jog norite pašalinti šį draudimą?";

$locale['590'] = "Suspenduoti";
$locale['591'] = "Atspenduoti";
$locale['592'] = "suspenduoji";
$locale['593'] = "atspenduoji";
$locale['594'] = "Įvesk priežastį, kodėl tu ";
$locale['595'] = " vartotoją ";
$locale['596'] = "Trukmė:";

$locale['600'] = "Saugumo blokavimas";
$locale['601'] = "saugumo blokuoji";
$locale['602'] = "Atblokuoti";
$locale['603'] = "atblokuoji";
$locale['604'] = "Priežastis:";
// Deactivation System
$locale['610'] = "<strong>%d narys(-iai)</strong> nebuvo prisijungę ilgiau kaip <strong>%d dieną(-as)</strong> ir buvo pažymėti kaip neaktyvūs.
Deaktyvuodami šiuos narius suteiksite galimybę jiems turėti <strong>%d dieną(-as)</strong> iki jie bus %s.";
$locale['611'] = "Verta pabrėžti, kad kai kurie vartotojai gali būti pateikę nuotraukų, parašę pranešimų ar komentarų
ir visa tai pašalinama kai deaktyvuotas narys yra ištrinamas.";
$locale['612'] = "narys";
$locale['613'] = "nariai";
$locale['614'] = "Deaktyvuoti";
$locale['615'] = "iškart pašalintas";
$locale['616'] = "anonimizuoti";
$locale['617'] = "Perspėjimas:";
$locale['618'] = "Rekomenduotina pakeisti deaktyvacijos veiksmą iš ištrynimo į anominizavimą, siekant išvengti galimo svarbių duomenų praradimo!";
$locale['619'] = "Tai gali padaryti čia <a href='".ADMIN."settings_users.php".$aidlink."'>čia</a>.";
$locale['620'] = "anonimizuoti";
$locale['621'] = "Automatinis neaktyvių vartotojų deaktyvavimas.";
?>