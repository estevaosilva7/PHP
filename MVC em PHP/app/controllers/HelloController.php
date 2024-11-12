<?php

class HelloController {
    public function index() {
        $model = new HelloModel();

        $message = $model->getMessage();

        include '../app/views/HelloView.php';
    }
}