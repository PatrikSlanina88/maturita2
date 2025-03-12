<?php
include 'config.php'; // Připojení k databázi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $email = $_POST["email"];
    $cas = $_POST["cas"];
    $nabidka_id = $_POST["nabidka"];

    // Ochrana proti SQL injection
    $stmt = $conn->prepare("INSERT INTO rezervace (jmeno, prijmeni, email, cas, nabidka_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $jmeno, $prijmeni, $email, $cas, $nabidka_id);

    if ($stmt->execute()) {
        echo "Objednávka byla úspěšně uložena.";
    } else {
        echo "Chyba při ukládání: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Neplatný požadavek.";
}
?>