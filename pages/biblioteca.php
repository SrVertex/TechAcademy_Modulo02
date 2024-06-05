<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarja de Promoção</title>
    <style>
        .promotion-container {
            position: relative;
            display: inline-block;
        }

        .promotion-container img {
            display: block;
            width: 100%;
            height: auto;
        }

        .promotion-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            background-color: red;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            z-index: 1;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="promotion-container">
        <img src="img/banner.jpg" alt="Produto">
        <div class="promotion-tag">Promoção</div>
    </div>
</body>
</html>
