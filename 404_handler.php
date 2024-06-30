<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            background-image: url("/onions_site/stardust.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .div-404-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; 
        }
        .image-404 {
            width: 50%; 
            height: auto; 
            mix-blend-mode: multiply;
        }
        .text-404 {
            color: #9F88D8;
            text-align: center;
            margin-top: 25px; 
            font-family:'Courier New', Courier, monospace;
            font-size:0.8rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        @media (max-width: 768px) {
            .image-404 {
                width: 80%; 
            }
            .text-404 {
                font-size:0.6rem;
            }
        }
    </style>
    <title>404 | Page Not Found</title>
</head>
<body>
    <div class="div-404-image">
        <img src="/onions_site/404.png" class="image-404" alt="404 Image">
        <p class="text-404">Looks like our cat's gone exploring again and got tangled up trying to chase digital mice. May Blessing master's Blessing be onto the curious cat...</p>
    </div>
</body>
</html>

