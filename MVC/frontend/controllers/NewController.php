<?php
require_once 'controllers/Controller.php';
require_once 'models/BNew.php';

class  NewController extends Controller{
    public  function index() {
        $bnew_model = new BNew();
        $bnews = $bnew_model->getAll();

        $this->content = $this->render('views/news/index.php', [
            'bnews' => $bnews
        ]);
        require_once 'views/layouts/main.php';
    }
}
?>