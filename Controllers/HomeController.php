<?php
namespace Controllers;
use \Core\Controller;
use Models\Teste;


class HomeController extends Controller
{
    public function index()
    {
        $this->loadTemplate('home', array());
    }

}