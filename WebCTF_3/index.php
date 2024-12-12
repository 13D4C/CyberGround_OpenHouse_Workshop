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
    <div class="container-xl">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Cyb3rGr0und CTF</a>
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#languageModal">
                Select Language
            </button>
            </div>
        </nav>
        <div style="margin-top: 80px;"></div>

        <!-- Language Modal -->
        <div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="languageModalLabel">Select Language</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="btn-group flex-wrap" role="group" aria-label="Language Selector">
                    <button type="button" class="btn btn-outline-primary m-2" onclick="changeLang('en')" data-bs-dismiss="modal">
                        <img src="./assets/images/usflag.jpg" style="width:100px; height:60px; object-fit:cover" alt="American" class="flag-icon mb-2">
                        <p class="mb-0">American</p>
                    </button>
                    <button type="button" class="btn btn-outline-primary m-2" onclick="changeLang('en')" data-bs-dismiss="modal">
                        <img src="./assets/images/Flag_of_Australia_(converted).svg" style="width:100px; height:60px; object-fit:cover" alt="English" class="flag-icon mb-2">
                        <p class="mb-0">English</p>
                    </button>
                    <button type="button" class="btn btn-outline-primary m-2" onclick="changeLang('cn')" data-bs-dismiss="modal">
                        <img src="./assets/images/Flag_of_the_People's_Republic_of_China.svg" style="width:100px; height:60px; object-fit:cover" alt="Chinese" class="flag-icon mb-2">
                        <p class="mb-0">中文</p>
                    </button>
                    <button type="button" class="btn btn-outline-primary m-2" onclick="changeLang('th')" data-bs-dismiss="modal">
                        <img src="./assets/images/Flag_of_Thailand_(proposed_shade_of_colours).png" style="width:100px; height:60px; object-fit:cover" alt="Thai" class="flag-icon mb-2">
                        <p class="mb-0">ไทย</p>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <h1 class="text-center mb-5">Cyb3rGr0und CTF</h1>
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                <h3 class="card-title mb-4">Cyber Blog</h3>
                <div class="accordion" id="blog-posts">
                    <p class="text-muted">Loading Blog Posts...</p>
                </div>
                <!-- <?php echo $flagPart1; ?> -->
                </div>
            </div>
            </div>
            <!-- Right Column -->
            <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                <h3 class="card-title mb-4">Latest Updates</h3>
                <div class="alert alert-info">
                    <h5>Welcome to Cyb3rGr0und CTF!</h5>
                    <p class="mb-0">Start exploring our challenges and test your cybersecurity skills.</p>
                </div>
                </div>
            </div>
            <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h3 class="card-title mb-4">Top Contributors</h3>
                <ul class="list-unstyled">
                    <li class="mb-2 ms-2"><i class="fas fa-trophy text-warning"></i> CyberNinja - 2500 pts</li>
                    <li class="mb-2 ms-2"><i class="fas fa-medal text-secondary"></i> H4ckM4ster - 2100 pts</li>
                    <li class="mb-2 ms-2"><i class="fas fa-medal text-brown"></i> SecurityPro - 1800 pts</li>
                </ul>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h3 class="card-title mb-4">Upcoming Events</h3>
                <div class="list-group">
                    <div class="list-group-item">
                        <h5 class="mb-1">ITKMITL Cyber Workshop</h5>
                        <p class="mb-1">Date: Dec 14, 2024</p>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1">ITKMITL Cyber Workshop #2</h5>
                        <p class="mb-1">Date: Dec 15, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h3 class="card-title mb-4">Categories</h3>
                <div class="btn-group-vertical w-100">
                    <button class="btn btn-outline-secondary mb-2">Web Exploitation</button>
                    <button class="btn btn-outline-secondary mb-2">Cryptography</button>
                    <button class="btn btn-outline-secondary mb-2">Forensics</button>
                    <button class="btn btn-outline-secondary">Reverse Engineering</button>
                </div>
            </div>
        </div>
            </div>

        </div>
    </d iv>
    <script src="./assets/scripts/bootstrap.min.js"></script>
</body>

</html>