<?php
include 'config.php'; // Připojení k databázi

// Načtení nabídek z databáze
$sql = "SELECT id, nazev FROM nabidka";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervace</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="icon" href="IMG/favicon.ico" type="image/x-icon"  />
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <nav>
        <div class="logo">
           <a href="index.html"><img src="IMG/LOGO.png" width="300"></a>
        </div>
    </nav>            
    <section class="pozadi padding2">
           
            <div class="container">
                <div class="text">
                   Rezervace online
                </div>
                <form action="zpracovani.php" method="post">
                   <div class="form-row">
                      <div class="input-data">
                         <input type="text" name="jmeno" required>
                         <div class="underline"></div>
                         <label for="">Jméno</label>
                      </div>
                      <div class="input-data">
                         <input type="text" name="prijmeni" required>
                         <div class="underline"></div>
                         <label for="">Přijmení</label>
                      </div>
                   </div>
                   <div class="form-row">
                      <div class="input-data">
                         <input type="text" name="email" required>
                         <div class="underline"></div>
                         <label for="">Váš email</label>
                      </div>
                      <div class="input-data">
                         <input type="date" name="cas" required>
                         <div class="underline"></div>
                      </div>
                   </div> 
                    
                      <label for="nabidka">Vyberte nabídku:</label>
                        <select name="nabidka" required>
                            <option value="">-- Vyberte nabídku --</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["id"]."'>".$row["nazev"]."</option>";
                            }
                            ?>
                        </select><br><br>  
                        <div class="form-row submit-btn">
                         <div class="input-data">
                            <div class="inner"></div>

                         </div>
                      </div>
                </form>
                </div>

    </section>
</body>
</html>