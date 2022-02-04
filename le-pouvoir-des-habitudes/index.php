<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Le Pouvoir des habitudes. Changer un rien pour tout changer";
  $index->metaDescription = "Lisa souffrait de boulimie, d’alcoolisme, de tabagisme et de surendettement. Un jour, tout a changé : en modifiant une pièce du puzzle de son existence, elle est sortie du cercle vicieux de ses habitudes toxiques.";
  require("le-pouvoir-des-habitudes-book-info.php");
  $index->Display();
?>