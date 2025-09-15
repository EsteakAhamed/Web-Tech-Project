<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;url=view/home.php">
    <title>HealWell - Redirecting</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e6e6fa 0%, #d3cce3 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #2c3e50;
            overflow-x: hidden;
        }

        .container {
            text-align: center;
            padding: 32px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: #2c3e50;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
        }

        a {
            color: #6a5acd;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            color: #5b4cb8;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <?php echo "Index loaded"; ?>
    <div class="container">
        <h1>Redirecting to HealWell Home...</h1>
        <p>If you are not redirected, <a href="view/home.php">click here</a>.</p>
    </div>
</body>

</html>