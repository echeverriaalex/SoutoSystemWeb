<?php
    namespace Config;

    define('ROOT', dirname(__DIR__)."/");
    define("FRONT_ROOT", "/SoutoSystem/");
    
    define("DB_HOST", "localhost");
    define("DB_NAME", "SoutoSystem");
    define("DB_USER", "root");
    define("DB_PASS", "");

    define("VIEWS_PATH", "Views/");
    define("CSS_PATH", FRONT_ROOT.VIEWS_PATH."css/");
?>