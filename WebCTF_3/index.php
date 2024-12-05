<?php
require_once 'includes.php';


// --- Challenge Logic ---

// Challenge #1: Source Code Inspection (Easy)
// Flag Part 1 is in HTML comments.

// Challenge #2: Robots.txt (Easy)
// Create a file named robots.txt in the same directory:
// User-agent: *
// Disallow: /s3cr3t_4r34/
// Flag Part 2 is in a file inside that directory.

// Challenge #3: HTTP Headers (Intermediate)

// Challenge #4: External CSS/JS (Intermediate)
// Create a file named style.css in the same directory and add:
// /* Flag Part 4: _fl4g */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyb3rGr0und CTF</title>
    <!-- Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/scripts/script.js"></script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cyb3rGr0und CTF</h1>
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h3 class="card-title mb-4">Cyber Blog</h3>
                <div class="accordion" id="blog-posts">
                    <p>Loading Blog Post...</p>
                </div>
                <!-- <?php echo $flagPart1; ?> -->
            </div>
        </div>
    </div>
    <script src="./assets/scripts/bootstrap.min.js"></script>
</body>

</html>