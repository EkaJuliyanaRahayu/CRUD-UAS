<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Reset Default Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #fefefe;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 3rem;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        header p {
            font-size: 1.2rem;
            color: #666;
            margin-top: 10px;
        }

        .about-section {
            background: #a8e6cf;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 800px;
            text-align: center;
            margin-top: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #fefefe;
        }

        .team-section {
            margin-top: 30px;
        }

        .team-section h3 {
            font-size: 1.8rem;
            color: #333;
        }

        .team-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .team-card {
            background: #fefefe;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 150px;
            text-align: center;
        }

        .team-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-card h4 {
            font-size: 1rem;
            color: #555;
        }

        .team-card p {
            font-size: 0.9rem;
            color: #888;
        }

        footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #777;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

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
    </style>
</head>
<body>
    <header>
        <h1>Tentang Indonesia</h1>
        <p>Menjelajahi Kuliner Tradisional Indonesia</p>
    </header>

    <div class="about-section">
        <h2>Tujuan</h2>
        <p>Mengenal lebih banyak keanekaragaman kuliner di Indonesia sebagai upaya dalam melestarikan warisan Indonesia.</p>
    </div>

</body>
</html>
