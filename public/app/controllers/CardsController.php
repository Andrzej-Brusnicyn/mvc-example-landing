<?php
require_once __DIR__ . '/../../functions/connection.php';
require_once __DIR__ . '/../models/CardsModel.php';

class CardsController {
    public function index() {
        $model = new CardsModel();
        $data['cards'] = $model->getCardsData();
        $data['cardsSection'] = $model->getCardsSectionData();
        require_once __DIR__ . '/../views/cards.view.php';
    }
}