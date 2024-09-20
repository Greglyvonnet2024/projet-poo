<?php 

namespace Controller;

class HomeController extends BaseController{
    public function index():void
    {
        $this->render(fichier: 'acceuil.php',parametres: [
            'h1' =>'Bienvenue sur ma page d\'acceuil'
        ]);
    }
    public function list():void {
$this->render(fichier:'produits.html.php');
    }
}