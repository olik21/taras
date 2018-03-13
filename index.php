<?php
    require __DIR__ . "/model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h2>Header</h2>
    </header>

    <main class="container">
        <section class="catalog">
                 
            <h2 class="visually-hidden">Items</h2>
            <ul class="catalog-list">

        
                <?php foreach (getItems(1, 4) as $item): ?>
                <li class="catalog-item">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    <h3><?= $item['title']; ?></h3>
                    <?= $item['description']; ?>
                    <?php echo $item['discountCost'] ? $item['discountCost'] : $item['cost']; ?>
                    <?php if ($item['discountCost'] !== null): ?>
                        <span><?= $item['cost']; ?>
                         Sale</span>
                    <?php endif; ?>
                    <?php if ($item['new']): ?>
                        <span>New</span>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <button>Load more</button>
        </section>
    </main>
    
    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>