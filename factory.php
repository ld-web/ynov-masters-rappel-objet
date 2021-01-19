<?php
require_once 'vendor/autoload.php';

use App\Factory\ProductFactory;
use App\ProductType;

if (!empty($_POST)) {
  $productFactory = new ProductFactory();
  try {
    $product = $productFactory->create(intval($_POST['productType']));
  } catch (InvalidArgumentException $e) {
    die('Une erreur est survenue : ' . $e->getMessage());
  }
  var_dump($product);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factory</title>
</head>

<body>
  <h2>Quel type de produit voulez-vous ?</h2>
  <form method="post">
    <select name="productType">
      <option value="<?php echo ProductType::BOOK; ?>">Livre</option>
      <option value="<?php echo ProductType::CLOTHING; ?>">Vêtement</option>
    </select>
    <div><input type="submit" value="Créer" /></div>
  </form>
</body>

</html>