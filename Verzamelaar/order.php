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
