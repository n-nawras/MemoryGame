<?php
spl_autoload_register(function ($class) {
    include "php/classes/" . $class . ".class.php";
  }
);

?>
