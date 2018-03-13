<?php
    require __DIR__ . "/model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
    <header>
        <h2>Header</h2>
    </header>

    <main class="container">
        <section class="catalog">
                 
            <h2 class="visually-hidden">Items</h2>
            <ul class="catalog-list">


        

            </ul>
            
            <button id="show_more" onclick="ShowItems(true)">Load more</button>
             <div class="loader"></div> 
        </section>
    </main>
    
    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>