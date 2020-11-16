<?php
require_once 'controllers/Controller.php';
require_once 'models/BNew.php';

class  NewController extends Controller{
    public  function index() {
        $BNew_model = new BNew();
        $BNew = $BNew_model->getBNewInHomePage();

        $this->content = $this->render('views/news/index.php', [
            'BNews' => $BNews
        ]);
        require_once 'views/layouts/main.php';
    }
}
?>