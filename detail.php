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
    <h1><?php echo $product['des']; ?></h1>

    <a href="detail.php?lang=en" class="btn btn-primary">EN</a>
    <a href="detail.php?lang=fa" class="btn btn-primary">FA</a>

    <div class="row">

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

