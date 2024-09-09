<?php
include("langs.php");
if(isset($_GET["lang"])){
    $langCode = $_GET["lang"];
} else {
    $langCode = "en";
}
if(isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];
  if($product_id >= 0 && $product_id <= 4){
        $product = $lang[$langCode]['products'][$product_id];
  } else {
      echo "Invalid product id";
      exit;
  }
}
?>

<!doctype html>
<html lang="en" dir="<?php echo $lang[$langCode]['dir']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $product['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $product['name']; ?></h1>


    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="<?php echo $product['images']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['price']; ?></h5>
                    <p class="card-text"><?php echo $product['des']; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

