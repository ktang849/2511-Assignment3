<?php 
include_once("Home.html", "style/main.css", "style/reset.css");
"post-install-cmd": [
    "php artisan clear-compiled",
    "chmod -R 777 public/"
]
?>