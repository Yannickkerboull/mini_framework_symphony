<?php
  $user = $variables['user'];
 ?>


<h1><?php print $user->name; ?></h1>

<div class="header">
    Création de compte: <?php print $user->created; ?><br>
    Dernière modification du compte: <?php print $user->updated; ?><br>
</div>

<div class="body">
  Email: <?php print $user->email; ?><br>
  Age: <?php print $user->age; ?><br>
  Ville: <?php print $user->localisation; ?><br>
  Rôle: <?php print $user->role; ?><br>
</div>
