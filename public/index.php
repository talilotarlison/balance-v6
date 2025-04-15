<?php
// router.php
/**
 * Script que cria o calendário do mês.
 * contato: 
 * site: http://github.com/talilo-tarlison
 * @author talilo 
 * @created 07/02/2025
 * @version 1.0, 07/02/2025
 */

// Se o arquivo requisitado existe, serve ele diretamente
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $path;

    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/router.php';
