# Panjabi Movie - Overzicht

Dit markdown-bestand bevat een stapsgewijs overzicht van het Panjabi Movie Beroeps-project, inclusief alle stappen en codevoorbeelden die zijn behandeld vanaf het begin tot nu. Dit project is gebouwd door Vighnesh Lachman uit klas D2C2.

## Stap 1: HTML-structuur voor de startpagina (index.html)


```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panjabi Movies - PVR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar, Hero-sectie en Film-collectie-sectie -->
    <!-- ... (zie originele HTML voor details) -->
    
    <footer class="text-center">
        <p>This website is made by Vighnesh Lachman (089521)</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="/scripts/app.js"></script>
</body>
</html>
```

## Stap 2: Stijlen toevoegen met CSS (styles.css)
```css
/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set the font-family to 'Space Grotesk' for the entire page */
body {
    font-family: 'Space Grotesk', sans-serif;
    background: #1a1a1a; /* Background color */
}

/* Navbar Styles */
.navbar {
    background: url("https://images.unsplash.com/photo-1608447714925-599deeb5a682?auto=format&fit=crop&q=80&w=2944&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
    background-size: cover;
    border-bottom: 2px solid #771224;
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: background 0.3s;
}

.navbar-brand {
    font-size: 36px;
    color: #771224;
    text-transform: uppercase;
    letter-spacing: 4px;
    padding: 20px;
    transition: color 0.3s;
}

.navbar-brand:hover {
    color: #771224;
}

.navbar-toggler-icon {
    background-color: #771224;
    border: 2px solid #fff;
    border-radius: 4px;
    transition: background 0.3s;
}

.navbar-toggler-icon:hover {
    background-color: #fff;
}

.nav-link {
    color: #fff;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    padding: 15px 20px;
    margin: 0 15px;
    transition: color 0.3s;
}

.nav-link::before {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background: #771224;
    bottom: 0;
    left: 0;
    transition: width 0.3s;
}

.nav-link:hover {
    color: #61dafb;
}

.nav-link:hover::before {
    width: 100%;
}

.nav-link.active::before {
    width: 100%;
}

/* Responsive Navigation Dropdown Styles */
.navbar-collapse {
    justify-content: flex-end;
    background: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
}

.nav-item {
    text-align: center;
}

.nav-item::after {
    content: "";
    border-right: 1px solid #771224;
    height: 50%;
    position: absolute;
    right: 0;
    top: 25%;
}

.nav-item:last-child::after {
    border: none;
}

/* Hero Section Styles */
.hero {
    background-image: url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 150px 0;
    text-align: center;
}

.hero h1 {
    font-size: 64px;
    margin-bottom: 40px;
    text-transform: uppercase;
}

.hero p {
    font-size: 28px;
    margin-bottom: 60px;
}

.btn-primary {
    background: linear-gradient(45deg, #771224, #a80c0c); /* Gradient button */
    border: none;
    color: #fff;
    padding: 20px 40px;
    border-radius: 8px;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 4px;
    transition: background 0.3s;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

.btn-primary:hover {
    background: linear-gradient(45deg, #a80c0c, #771224);
}

/* Film Card Styles with 3D Effect */
.card {
    background: #fff;
    border: none;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    border-radius: 16px;
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

.card-title {
    font-size: 36px;
    margin-top: 30px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.card-text {
    font-size: 24px;
    color: #6c757d;
    margin-bottom: 25px;
    line-height: 1.5;
}

/* Footer Styles */
footer {
    background: #1a1a1a;
    color: #fff;
    padding: 30px 0;
    text-align: center;
    font-size: 24px;
}

/* Additional Styles */
/* Add your custom styles below this line */
```

## Stap 3: Dynamische filmkaarten (index.html)


<!-- Voorbeeld van een filmkaart -->
<div class="card">
    <img src="film1.avif" class="card-img-top" alt="Film Thumbnail">
    <div class="card-body">
        <h5 class "card-title">Maurh</h5>
        <p class="card-text">Set tegen de achtergrond van ongetemde zandvlaktes van Punjab tussen 1885 en 1893, ontvouwt Maurh een verhaal van veerkracht, eer en verzet tegen de onderdrukkende dubbele heerschappij van Britse kolonisten en inheemse koningen.</p>
        <!-- Link om naar order.php te gaan met filmgegevens als queryparameters -->
        <a href="order.php?film_id=1&film_title=Maurh&film_description=..." class="btn btn-primary">Bestel Maurh</a>
    </div>
</div>

## Stap 4: Bestelpagina (order.php)
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Movie</title>
    <!-- Include necessary CSS and scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./order.css">
    <style>
        /* Import the font */
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500&display=swap');

        /* Body */
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Space Grotesk', sans-serif;
        }

        h1, h2, h5 {
            text-align: center;
        }

        #color {
            color: #1098F7;
        }


        /* Center the card and adjust its width */
.card {
    margin: 0 auto;
    max-width: 400px; /* Adjust the max-width as needed */
}

/* Add this CSS for the hover effect */
.card:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    transition: transform 0.3s, box-shadow 0.3s;
}



/* Style the form container */
.form-container {
    background-color: #f8f9fa; /* Light gray background color */
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

/* Style form elements */
.form-group {
    margin-bottom: 20px;
}

.form-label {
     display: block;
    font-weight: bold;
    color: #fff; /* Dark text color */
    
}

.form-control {
    width: 25%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    display: inline-block;
    margin-right: 100%;
}

/* Style the submit button */
.btn-primary {
    background-color: #771224; /* Dark red background color */
    color: #fff; /* White text color */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: green; /* Greenish on hover */
}


    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-5">Bestel Film</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                // Retrieve movie details from query parameters
                $filmId = $_GET['film_id'];
                $filmTitle = $_GET['film_title'];
                $filmDescription = $_GET['film_description'];
                $filmPrice = $_GET['film_price'];
                ?>

                <h2 class="mb-4">Film Details</h2>
                <div class="card">
                    <img src="film<?php echo $filmId; ?>.avif" alt="<?php echo $filmTitle; ?>" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $filmTitle; ?></h5>
                        <p class="card-text"><?php echo $filmDescription; ?></p>
                        <p class="card-text" id="color">Price: €4.99</p>
                    </div>
                </div>

                <h2 class="mt-5">Bestelformulier</h2>
                <form method="post" action="process_order.php">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Naam:</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="user_email" class="form-label">E-mailadres:</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" required>
                    </div>

                    <div class="mb-3">
                        <label for="payment_info" class="form-label">Betalingsinformatie:</label>
                        <input type="text" class="form-control" id="payment_info" name="payment_info" required>
                    </div>

                    <input type="hidden" name="film_id" value="<?php echo $filmId; ?>">

                   <button type="submit" class="btn btn-primary btn-lg">
                        Bestel <i class="fas fa-shopping-cart"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        gsap.from(".card", {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
        });
        
        gsap.from(".btn", {
            opacity: 0,
            scale: 0.5,
            duration: 1,
            delay: 0.5,
            ease: "elastic.out(1, 0.3)",
        });
    </script>
</body>
</html>
```

## Stap 5: Bestelformulier opmaak (order.css)

```css
/* Stijl voor het bestelformulier */
.form-container {
    background-color: #f8f9fa; /* Lichtgrijze achtergrondkleur */
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
    color: #fff; /* Donkere tekstkleur */
}

.form-control {
    width: 25%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.btn-primary {
    background-color: #771224; /* Blauwe knop achtergrondkleur */
    color: #fff; /* Witte tekstkleur */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: green; /* Groenig bij hover */
}
```

## Stap 6: Bedankpagina (process_order.php)
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing your order!</title>
    <link rel="stylesheet" href="process_order.css">
</head>
<body>
    <?php
// Voer hier de databaseverbinding uit
$host = 'localhost';
$db = 'movie_store';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingevoerde gegevens
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $payment_info = $_POST["payment_info"];
    $film_id = $_POST["film_id"];

    // Voeg de bestelling toe aan de database
    $stmt = $pdo->prepare("INSERT INTO orders (movie_id, user_name, user_email, payment_info) VALUES (?, ?, ?, ?)");
    $stmt->execute([$film_id, $user_name, $user_email, $payment_info]);

    // Hier kun je verdere verwerking uitvoeren, zoals betalingsverwerking

    // Toon een bevestigingsbericht aan de gebruiker
    echo "Uw bestelling is succesvol geplaatst. Bedankt!";
} else {
    // Als de pagina niet via een POST-verzoek wordt benaderd, stuur de gebruiker terug naar de orderpagina
    header("Location: order.php");
    exit;
}
?>

<a href="index.html" class="btn btn-primary">
    <i class="fas fa-home"></i> Terug naar de Homepagina
</a>

<style>
    /* Stijl voor de terugknop */
.btn-primary {
    background-color: #007bff; /* Blauwe achtergrondkleur */
    color: #fff; /* Witte tekstkleur */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s;
    margin: 10px;
    text-decoration: none;
}

.btn-primary:hover {
    background-color: #0056b3; /* Donkerder blauw bij hover */
}

/* Stijl voor het icoon */
.fa-home {
    margin-right: 10px; /* Voegt wat ruimte toe tussen het icoon en de tekst */
}

</style>

</body>
</html>
```

## Stap 7: Verbeterde lay-out voor process_order.php (process_order.css)
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing your order!</title>
    <link rel="stylesheet" href="process_order.css">
</head>
<body>
    <?php
// Voer hier de databaseverbinding uit
$host = 'localhost';
$db = 'movie_store';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingevoerde gegevens
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $payment_info = $_POST["payment_info"];
    $film_id = $_POST["film_id"];

    // Voeg de bestelling toe aan de database
    $stmt = $pdo->prepare("INSERT INTO orders (movie_id, user_name, user_email, payment_info) VALUES (?, ?, ?, ?)");
    $stmt->execute([$film_id, $user_name, $user_email, $payment_info]);

    // Hier kun je verdere verwerking uitvoeren, zoals betalingsverwerking

    // Toon een bevestigingsbericht aan de gebruiker
    echo "Uw bestelling is succesvol geplaatst. Bedankt!";
} else {
    // Als de pagina niet via een POST-verzoek wordt benaderd, stuur de gebruiker terug naar de orderpagina
    header("Location: order.php");
    exit;
}
?>

<a href="index.html" class="btn btn-primary">
    <i class="fas fa-home"></i> Terug naar de Homepagina
</a>

<style>
    /* Stijl voor de terugknop */
.btn-primary {
    background-color: #007bff; /* Blauwe achtergrondkleur */
    color: #fff; /* Witte tekstkleur */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s;
    margin: 10px;
    text-decoration: none;
}

.btn-primary:hover {
    background-color: #0056b3; /* Donkerder blauw bij hover */
}

/* Stijl voor het icoon */
.fa-home {
    margin-right: 10px; /* Voegt wat ruimte toe tussen het icoon en de tekst */
}

</style>

</body>
</html>
```

## Stap 8: Terugkeerknop naar de startpagina (process_order.php)

```html
<!-- Terugkeerknop naar de startpagina -->
<a href="index.html" class="btn btn-primary">
    <i class="fas fa-home"></i> Terug naar de startpagina
</a>
```
## De Database
```sql
-- Aanmaken van de database "movie_store"
CREATE DATABASE movie_store;

-- Gebruik de database "movie_store"
USE movie_store;

-- Aanmaken van de tabel "movies" om films op te slaan
CREATE TABLE movies (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price DECIMAL(8, 2)
);

-- Aanmaken van de tabel "orders" om bestellingen op te slaan
CREATE TABLE orders (
    id INT PRIMARY KEY,
    movie_id INT,
    user_name VARCHAR(255),
    user_email VARCHAR(255),
    payment_info VARCHAR(255),
    FOREIGN KEY (movie_id) REFERENCES movies(id)
);
```

## Samenvatting:

# Project Panjabi Movie

Dit document volgt het avontuur van het maken van een project, van het begin tot nu. Het project draait om het bestellen van films en is opgebouwd met behulp van verschillende technologieën. Laten we eens kijken naar de belangrijkste stappen en technologieën die zijn gebruikt.

## Technologieën

- **HTML/CSS**: De front-end van het project is ontwikkeld met HTML en CSS. Hiermee hebben we de gebruikersinterface gemaakt en gestileerd.

- **Bootstrap**: Om het ontwerp van de website te stroomlijnen en responsiviteit te bieden, hebben we Bootstrap, een krachtig CSS-framework, geïntegreerd.

- **PHP**: PHP is de taal die wordt gebruikt om de back-end van de website te ontwikkelen. Hiermee verwerken we formulierinzendingen, maken we verbinding met de database en genereren we dynamische inhoud.

- **MySQL**: MySQL is de database die wordt gebruikt om filmgegevens en bestellingen op te slaan. We hebben SQL-query's gebruikt om tabellen aan te maken en gegevens te beheren.

- **PDO (PHP Data Objects)**: PDO is een PHP-uitbreiding waarmee we eenvoudig en veilig met databases kunnen communiceren. We hebben PDO gebruikt om een databaseverbinding tot stand te brengen en query's uit te voeren.

- **GSAP (GreenSock Animation Platform)**: GSAP is een animatiebibliotheek waarmee we verbluffende animaties hebben gecreëerd voor een betere gebruikerservaring.

- **Markdown**: Dit document is opgesteld in Markdown, een opmaaktaal voor eenvoudig schrijven en opmaken van tekst.

## Stap 1: Project Start

We begonnen met een eenvoudige HTML-structuur voor de startpagina ("index.html"). Hier hebben we ook verwijzingen toegevoegd naar Bootstrap en CSS-bestanden om het uiterlijk van de site te verbeteren.

## Stap 2: Navigatie en Styling

We hebben een navigatiebalk toegevoegd met links naar de startpagina, de filminformatiepagina ("order.php"), en andere secties. We hebben Bootstrap gebruikt om de navigatie vorm te geven.

## Stap 3: Filmcollectie

De filmcollectie-sectie op de startpagina bevat kaarten voor verschillende films. We hebben elke kaart gemaakt met HTML en Bootstrap-styling. We hebben de gegevens voor elke film opgenomen, samen met links naar de filminformatiepagina.

## Stap 4: Filminformatiepagina

De filminformatiepagina ("order.php") is de bestelpagina voor een specifieke film. De informatie over de film wordt dynamisch ingeladen via queryparameters. We hebben ook een bestelformulier gemaakt met invoervelden voor de gebruiker.

## Stap 5: Bestellingen verwerken

Na het indienen van het bestelformulier wordt de gebruiker doorgestuurd naar "process_order.php". Hier worden de gegevens van de bestelling verwerkt. We hebben een database met de naam "movie_store" aangemaakt en gebruik gemaakt van SQL-instructies om bestellingen op te slaan.

## Stap 6: Animaties toevoegen

GSAP werd geïntegreerd om animaties aan de website toe te voegen, waaronder animaties voor het verschijnen van filmkaarten en bestelknoppen.

## Stap 7: Verbeteringen aanbrengen

We hebben enkele verbeteringen doorgevoerd, zoals het responsief maken van de site, het toevoegen van hover-effecten en het centreren van inhoud.

## Bedankt voor uw aandacht!

Dank u voor uw aandacht en tijd. Hopelijk begrijpt u nu beter hoe dit project is opgebouwd en welke technologieën er zijn gebruikt. Als u nog vragen heeft of meer wilt weten, aarzel dan niet om contact met ons op te nemen. We wensen u veel plezier met het verkennen van onze site!


















