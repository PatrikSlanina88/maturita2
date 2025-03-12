<?php
$server = "localhost"; // U hostingu změňte na IP nebo doménu
$user = "root"; // Uživatelské jméno (u hostingu může být jiné)
$password = "bublinka"; // Heslo (u XAMPP prázdné, u hostingu nutné zadat)
$database = "wellness_bublinka"; // Název vaší databáze

// Připojení k databázi
$conn = new mysqli($server, $user, $password, $database);

// Kontrola připojení
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}

// Nastavení UTF-8 pro správné zobrazení češtiny
$conn->set_charset("utf8");

?>