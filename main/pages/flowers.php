<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../modal"></script>
    <title>Каталог</title>
</head>
<body>
    <header><? include '../header.php' ?></header>

    <div class="container-fluid">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-3 main-navi" style="background-color: black; margin-left: -36px;">
                <div class="categories mt-2">
                        <div class="category-case" style="margin-top: 20px; margin-bottom: 0px;">
                            <a href="../pages/flowers.php">Букеты</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/decor.php">Декор</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/care.php">Уход за цветами</a> 
                        </div>
                        <br>
                        <div class="category-case">
                            <a href="../pages/presents.php">Подарки и сувениры</a> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 main-navi-2" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                        <a href="#"><p style="margin-top: 4%;">Букеты</p></a>
                    </div>
                </div>
                <div class="col-lg-3 main-navi-3" style="margin-left: 12px;">
                    <div class="category-case" style="margin-top: 120%;">
                </div>
                
                <div class="col-lg-3 main-navi" style="margin-left: -36px; margin-top: 20px;">
                </div>
            </div>
        </div>
    </div>
    
    <footer><? include '../footer.php' ?></footer>
</body>
</html>