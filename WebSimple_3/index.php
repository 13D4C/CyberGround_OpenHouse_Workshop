<?php

// Define the flag
$flag = "cyb3rgr0und{n3tw0rk_4nd_c0mm3nt5_4r3_1mp0rt4nt}";

// API endpoint logic (simulated)
if (isset($_GET['api'])) {
    if ($_GET['api'] === 'get_data') {
        $response = array("message" => "This is some sensitive data.", "hint" => "Check the HTML source code!");
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    } else if ($_GET['api'] === 'get_flag') {
        // Hidden API endpoint revealed through network inspection
        $response = array("flag" => $flag);
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    } else {
        $response = array("error" => "Invalid API request.");
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Demo</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cybergrount CTF Demo</h1>
        <p>Welcome to the CTF demo. Your goal is to find the flag.</p>

        <!-- There might be some hints here. But maybe not... -->

        <button id="getDataBtn">Get Data</button>

        <div id="data"></div>

        <!--
        Hmm, the API seems interesting. I wonder what else it can do?
        I should try to see what API calls are being made.
        -->

    </div>

    <script>
        const getDataBtn = document.getElementById('getDataBtn');
        const dataDiv = document.getElementById('data');

        getDataBtn.addEventListener('click', () => {
            fetch('?api=get_data')
                .then(response => response.json())
                .then(data => {
                    dataDiv.innerHTML = `<p>${data.message}</p><p>Hint: ${data.hint}</p>`;
                })
                .catch(error => {
                    dataDiv.innerHTML = "<p>Error fetching data.</p>";
                    console.error(error);
                });
        });

        // Hidden API call to be discovered through network tab
        // This is a comment, it won't be executed
        // fetch('?api=get_flag')
        //     .then(response => response.json())
        //     .then(data => {
        //         console.log("Flag:", data.flag);
        //     });
    </script>
</body>

</html>