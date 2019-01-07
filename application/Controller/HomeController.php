<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;
use Mini\Core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->view->addData(['titulo' => 'Home - [MINI3]']);
        echo $this->view->render("/home/index");

    }

    public function ejemplo1()
    {
        $this->view->addData(['titulo' => 'Ejemplo 1 - [MINI3]']);
        echo $this->view->render("/home/ejemplo1");

    }


    public function ejemplo2()
    {
        $this->view->addData(['titulo' => 'Ejemplo 2 - [MINI3]']);
        echo $this->view->render("/home/ejemplo2");
    }
}
