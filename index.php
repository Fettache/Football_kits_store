<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Définir l'encodage des caractères et la compatibilité mobile -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>KitsKingdom - Boutique de Maillots</title>
    <!-- Lien vers la feuille de style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <!-- En-tête principal avec logo et recherche -->
         <div class="main-header">
            <div class="left-header">
                <div class="logo">[KitsKingdom]</div>
                <div class="sidebar">
                    <label for="team-select">Choisir une équipe :</label>
                    <select id="team-select" name="team">
                        <option value="" selected>-- Sélectionner --</option>
                        <option value="barcelona">Barcelona</option>
                        <option value="liverpool">Liverpool</option>
                        <option value="milan">AC Milan</option>
                        <option value="manunited">Manchester United</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Barre supérieure en haut à droite -->
        <div class="top-bar">
            <div class="top-right">
                <!-- Menu déroulant pour choisir la langue -->
                <select id="language-select">
                    <option value="fr">Langue</option>
                    <option value="fr">Français</option>
                    <option value="ar">العربية</option>
</select>
                <!-- Icône de panier -->
                <a href="panier.html" class="cart">🛒</a>
            </div>
        </div>
    </header>
    <!-- Contenu principal : titre, paragraphe et image -->
    <div class="content">
        <!-- Message de bienvenue simple -->
        <h1>Bienvenue sur Kits Kingdom</h1>
        <p>Choisissez une equipe dans la barre laterale pour voir les maillots disponibles!</p><br>
        <!-- Image avec nouvelles dimensions -->
        <img src="jerseys.jpg" alt="Aperçu de mode sportive" class="sport-image">
    </div>
    <script>
    document.getElementById("team-select").addEventListener("change", function () {
        const team = this.value;
        if (team) {
            window.location.href = team + ".html";
        }
    });

    document.getElementById("language-select").addEventListener("change", function () {
        const lang = this.value;

        const title = document.querySelector("h1");
        const paragraph = document.querySelector("p");
        const label = document.querySelector("label[for='team-select']");
        const teamSelect = document.getElementById("team-select");

        const options = teamSelect.options;

        if (lang === "ar") {
            title.textContent ="مرحبا بكم في مملكة القمصان الرياضية";
            paragraph.textContent = "اختر فريقا من الشريط الجانبي لرؤية القمصان المتاحة!";
            label.textContent = "اختر فريقاً:";

            options[0].textContent = "-- اختر --";
            options[1].textContent = "برشلونة";
            options[2].textContent = "ليفربول";
            options[3].textContent = "إي سي ميلان";
            options[4].textContent = "مانشستر يونايتد";

            document.body.setAttribute("dir", "rtl");
        } else if (lang === "fr") {
            title.textContent = "Bienvenue sur Kits Kingdom";
            paragraph.textContent = "Choisissez une equipe dans la barre laterale pour voir les maillots disponibles!";
            label.textContent = "Choisir une équipe :";

            options[0].textContent = "-- Sélectionner --";
            options[1].textContent = "Barcelona";
            options[2].textContent = "Liverpool";
            options[3].textContent = "AC Milan";
            options[4].textContent = "Manchester United";

            document.body.setAttribute("dir", "ltr");
        }
    });
</script>
</body>
</html>