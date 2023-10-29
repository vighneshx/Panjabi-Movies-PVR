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