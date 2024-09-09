<?php
include("langs.php");
if(isset($_GET["lang"])){
    $langCode = $_GET["lang"];
} else {
    $langCode = "en";
}
?>
<!doctype html>
<html lang="en" dir="<?php echo $lang[$langCode]['dir']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang[$langCode]['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $lang[$langCode]['description']; ?></h1>
    <h1><?php echo el('description'); ?></h1>

    <a href="index.php?lang=en" class="btn btn-primary">EN</a>
    <a href="index.php?lang=fa" class="btn btn-primary">FA</a>
    <div class="row">
        <?php foreach ($lang[$langCode]['products'] as $pid => $product): ?>
        <div class="col-3">
            <div class="card">
                <img src="<?php echo $product['images']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p class="card-text"><?php echo $product['price']; ?></p>
                    <a href="detail.php?product_id=<?php echo $pid; ?>" class="btn btn-primary"><?php echo $lang[$langCode]['detail']; ?></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
