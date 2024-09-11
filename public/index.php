<?php
require_once __DIR__ . '/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    $aboutController = new AboutController();
    $cardsController = new CardsController();
    $footerController = new FooterController();
    $headerController = new HeaderController();
    $heroController = new HeroController();

    $headerController->index();
    $heroController->index();
    $cardsController->index();
    $aboutController->index();
    $footerController->index();
    
} else {
    switch ($uri) {
        case '/login':
            $authController = new AuthController();
            $authController->login();
            break;
        case '/admin/logout':
            $authController = new AuthController();
            $authController->logout();
            break;
        case '/admin/dashboard':
            $authController = new AuthController();
            $authController->dashboard();
            break;
        case '/admin/about':
            $adminAboutController = new AdminAboutController();
            $adminAboutController->index();
            break;
        case '/admin/header':
            $adminHeaderController = new AdminHeaderController();
            $adminHeaderController->index();
            break;
        case '/admin/hero':
            $adminHeroController = new AdminHeroController();
            $adminHeroController->index();
            break;
        case '/admin/cards':
            $adminCardsController = new AdminCardsController();
            $adminCardsController->index();
            break;
        case '/admin/cardsSection':
            $adminCardsSectionController = new AdminCardsSectionController();
            $adminCardsSectionController->index();
            break;
        case '/admin/footer':
            $adminFooterController = new AdminFooterController();
            $adminFooterController->index();
            break;
        default: echo '404';
        }
}