<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class AdminController extends AppController
    {
        public function initialize(): void
        {
            parent::initialize();
            // On force l'utilisation du layout "admin.php" créé précédemment
            $this->viewBuilder()->setLayout('admin');
        }
        
        public function index()
        {
            // Cette action peut être utilisée pour afficher un tableau de bord ou des statistiques
        }
    }