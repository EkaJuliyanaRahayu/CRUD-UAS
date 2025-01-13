<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    
    <style>
        /* Reset Default Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #FFFFFF;
            color: #333333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 3rem;
            color:  #333333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        header p {
            font-size: 1.2rem;
            color:  #555555;
            margin-top: 10px;
        }

        nav {
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #FFFFFF;
            font-size: 1.2rem;
            margin: 0 15px;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        footer {
            position: absolute;
            bottom: 20px;
            font-size: 0.9rem;
            color: #333333;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Animation for Hero Text */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1 class="fade-in">Menjelajahi Kuliner Indonesia</h1>
        <p class="fade-in" style="animation-delay: 0.5s;">Cita Rasa Khas Indonesia</p>
    </header>
    <div class="container mt-3">
        <img src="https://cdn.rri.co.id/berita/42/images/1701058456142-k/cr8sasfhb2a3n6e.jpeg" alt="Gambar Fashion"
            class="custom-size mt-3">
    </div>
    <script>
        // Optional JavaScript for adding delay effect to animations
        document.querySelectorAll('.fade-in').forEach((el, index) => {
            el.style.animationDelay = `${index * 0.3}s`;
        });
    </script>
</body>
</html>
