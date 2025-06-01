<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404: Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            color: #fff;
            overflow: hidden;
        }

        .container {
            max-width: 600px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 80px;
            color: #ffcc00;
            text-shadow: 0 0 10px rgba(255, 204, 0, 0.7);
            margin-bottom: 20px;
        }

        p {
            font-size: 22px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #e0e0e0;
        }

        .funny-text {
            font-size: 18px;
            color: #ffcc00;
            margin-bottom: 30px;
            font-style: italic;
        }

        .gif-container {
            margin: 20px 0;
        }

        .gif-container img {
            max-width: 100%;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        a {
            display: inline-block;
            padding: 15px 40px;
            background: #ff4b5c;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
            box-shadow: 0 4px 15px rgba(255, 75, 92, 0.4);
        }

        a:hover {
            background: #e04350;
            transform: scale(1.1);
        }

        /* Animation for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Floating animation for fun */
        .float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 600px) {
            h1 {
                font-size: 60px;
            }

            p {
                font-size: 18px;
            }

            a {
                padding: 12px 30px;
                font-size: 16px;
            }

            .container {
                margin: 20px;
            }
        }

        .gif-wrapper {
    width: 100%;
    max-width: 500px; /* or any size you want */
    aspect-ratio: 16 / 15;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    margin: 0 auto;
}

.gif-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="float">404</h1>
        <div class="gif-container">
            <p>Hum pe toh hai hi 9</p>
            <div class="gif-wrapper">
                <img src="https://media1.tenor.com/m/7dPiMeeUhgsAAAAd/humpe-toh-hai-hi-9-humpe-toh-hai-hi-nahi.gif" alt="Funny 404 GIF">
            </div>            
        </div>
        <a href="/">Home🏠</a>
    </div>

    <!-- Fallback for Google Fonts if needed -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</body>
</html>