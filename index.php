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
        <h2 class="visually-hidden">Header</h2>
    </header>

    <main class="container">
        <section class="catalog">
                 
            <h2 class="visually-hidden">Items</h2>
            <ul class="catalog-list">


        

            </ul>
            
            <button id="show_more" class="show_more" onclick="ShowItems(true)">Load more</button>
             <div class="loader"></div> 
        </section>
    
    
    <footer >
        <h2 class="visually-hidden">Header</h2>
   
        <section class="offer">
            <h2>Hot offers</h2>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
            <ul>
                <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                <li>Donec eget tellus non erat lacinia fermentum</li>
                <li>Donec in velit vel ipsum auctor pulvin</li>
            </ul>
        </section>

        <section class="offer">
            <h2>Hot offers</h2>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
            <ul>
                <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                <li>Donec eget tellus non erat lacinia fermentum</li>
                <li>Donec in velit vel ipsum auctor pulvin</li>
            </ul>
        </section>

        <section class="offer">
            <h2>Store information</h2>
            <div class="adress">Company Inc., 8901 Marmora Road, Glasgow, D04 89GR</div>
            <div class="phone">Call us now toll free: (800) 2345-6789</div>
            <div class="email">Customer support: support@example.com<br/>
                Press: pressroom@example.com</div>
            <div class="skype">Skype: sample-username</div>
        </section>
    </footer>
    </main>
</body>
</html>