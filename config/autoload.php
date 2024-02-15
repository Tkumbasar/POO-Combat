<!-- (Autoload) Permet le chargement automatique des classes et configure PHP 
pour avoir de meilleurs messages d’erreurs. -->
<?php
// Strict


// Autoload logic
function chargerClasse($classname)
{
    require __DIR__ . '/../class/' . $classname . '.php';
}
spl_autoload_register('chargerClasse');


?>