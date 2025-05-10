<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $produits = $_POST['produits'];
    $total = $_POST['total'];

    $conn = new mysqli("localhost", "root", "", "kitskingdom");
    if ($conn->connect_error) die("Échec de la connexion: " . $conn->connect_error);

    $stmt = $conn->prepare("INSERT INTO commandes (nom, adresse, telephone, produits, total) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Erreur dans la requête SQL : " . $conn->error);
    }
    $stmt->bind_param("ssssd", $nom, $adresse, $telephone, $produits, $total);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "<h2>Merci pour votre commande, $nom !</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Paiement - KitsKingdom</title>
  <link rel="stylesheet" href="paiement.css">
</head>
<body>

  <h1>Formulaire de Paiement</h1>

  <form method="POST" onsubmit="return prepareForm()">
    <label for="nom">Nom complet :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="adresse">Adresse :</label>
    <textarea id="adresse" name="adresse" rows="3" required></textarea>

    <label for="telephone">Numéro de téléphone :</label>
    <input type="text" id="telephone" name="telephone" required>

    <input type="hidden" name="produits" id="produits">
    <input type="hidden" name="total" id="total">

    <button type="submit" class="btn">Confirmer la commande</button>
  </form>

  <script>
    function prepareForm() {
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      let produits = "";
      let total = 0;

      cart.forEach(item => {
        produits += `${item.name} x${item.quantity} (${item.price} Euros)\n`;
        total += item.price * item.quantity;
      });

      document.getElementById("produits").value = produits.trim();
      document.getElementById("total").value = total.toFixed(2);
      localStorage.removeItem("cart");

      return true;
    }
  </script>
</body>
</html>
