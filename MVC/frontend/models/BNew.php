<?php
require_once 'models/Model.php';
class BlogNew extends Model {

    public function getAll() {
        $sql_select_all = "SELECT * FROM news WHERE `status` = 1";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        $categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
}