<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>

    <!-- University-style fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Source Sans 3', system-ui, sans-serif;
            min-height: 100vh;
            background: linear-gradient(160deg, #0a0a0a 0%, #1a1a1a 50%, #111111 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 12vh;
            color: #ffffff;
            overflow-x: hidden;
        }

        .content {
            text-align: center;
            max-width: 700px;
            padding: 0 20px;
        }

        h1 {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 3.4rem;
            font-weight: 700;
            margin-bottom: 1.1rem;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        p {
            font-size: 1.45rem;
            color: #e5e5e5;
            margin-bottom: 3.5rem;
            font-weight: 400;
            letter-spacing: 0.2px;
        }

        .buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.3rem;
            font-family: 'Source Sans 3', system-ui, sans-serif;
            font-size: 1.15rem;
            font-weight: 600;
            text-decoration: none;
            color: #000000;
            background: #ffffff;
            border-radius: 50px;
            border: 2px solid #ffffff;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.12);
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease, color 0.25s ease;
            opacity: 0;
            transform: translateY(40px) scale(0.8);
            animation: bounceIn 0.7s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .btn:nth-child(1) {
            animation-delay: 0.15s;
        }

        .btn:nth-child(2) {
            animation-delay: 0.3s;
        }

        .btn:hover {
            transform: translateY(-4px) scale(1.05);
            background: transparent;
            color: #ffffff;
            box-shadow: 0 12px 30px rgba(255, 255, 255, 0.18);
        }

        .btn:active {
            transform: translateY(-1px) scale(1.02);
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.7);
            }
            60% {
                opacity: 1;
                transform: translateY(-12px) scale(1.08);
            }
            80% {
                transform: translateY(4px) scale(0.98);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Student Page</h1>
        <p>Welcome to the student page!</p>

        <div class="buttons">

            <a href="<?= site_url('/student') ?>" class="btn">Home</a>
            <a href="<?= site_url('/student/verify') ?>" class="btn">View Profile</a>
        </div>
    </div>
</body>
</html>