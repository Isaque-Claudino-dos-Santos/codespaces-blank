<?php

require_once "./bootstrep.php";

exec("php -S localhost:" . APP_PORT . " -t " . APP_PUBLIC_DIR);