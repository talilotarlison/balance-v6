<?php
    /**
     * Script que cria o calendário do mês.
     * contato: 
     * site: http://github.com/talilo-tarlison
     * @author talilo 
     * @created 07/02/2025
     * @version 1.0, 07/02/2025
     */

    // Captura a URL solicitada
    $requestUri = $_SERVER['REQUEST_URI'];

    // Remove a query string (tudo após ?)
    $requestUri = explode('?', $requestUri)[0];

    // Remove barras iniciais e finais
    $requestUri = trim($requestUri, '/');

    // Pega apenas a primeira parte da URL
    $route = explode('/', $requestUri)[0];


    // Se estiver vazio, define como 'home'
    if ($route === '') {
        $route = 'login';
    }

    // Array de rotas válidas
    $validRoutes = ['login', 'cadastro','home', 'dashboard', 'buscar','logout'];

    // Verifica se a rota é válida
    if (in_array($route, $validRoutes)) {
        switch ($route) {
            case 'login':
                include 'loginPage.php';
                break;
            case 'cadastro':
                include 'cadastroPage.php';
                break;
            case 'home':
                    include 'home.php';
                    break;
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'buscar':
                    include 'buscar.php';
                    break;
            case 'logout':
                include 'login/logout.php';
                break;
        }
    } else {
        // Página padrão para rotas inválidas
        include 'errorPage.php';
    }
?>
