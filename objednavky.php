<?php
include 'config.php'; // Připojení k databázi

$sql = "SELECT o.id, o.jmeno, o.prijmeni, o.email, o.cas, n.nazev AS nabidka 
        FROM objednavky o
        JOIN nabidka n ON o.nabidka_id = n.id
        ORDER BY o.cas DESC";

$result = $conn->query($sql);

echo "<h2>Seznam objednávek</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Email</th><th>Čas objednávky</th><th>Nabídka</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["jmeno"]."</td><td>".$row["prijmeni"]."</td><td>".$row["email"]."</td><td>".$row["cas"]."</td><td>".$row["nabidka"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Žádné objednávky nebyly nalezeny.";
}