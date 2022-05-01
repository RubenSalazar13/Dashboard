<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
      "width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .piechart {
        margin-top: 30px;
        display: block;
        position: relative;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-image: conic-gradient(
            #1ABC9C 70deg,
            #3498DB 0 235deg,
            #FFC300 0);
    }

    body,
    .piechart {
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
    }
</style>
<body>
    <div class="piechart"></div>
</body>
</html>