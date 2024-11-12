<?php

require_once '../app/Controllers/HelloController';
require_once '../app/Models/HelloModel';

$controller = new HelloController;
$controller->index();