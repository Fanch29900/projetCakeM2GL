<?php
namespace App\Controller;

class ElecteursController extends AppController
{
    public function index()
    {
        // On récupère les électeurs avec leurs bureaux de vote associés
        $electeurs = $this->paginate($this->fetchTable('Electeur')->find()->contain(['BureauVote']));
        
        $this->set(compact('electeurs'));
        
        // On force l'utilisation du layout public spécifique
        $this->viewBuilder()->setLayout('public');
    }

    public function apiList()
    {
        // On récupère les données sans pagination pour l'API
        $electeurs = $this->fetchTable('Electeur')
            ->find()
            ->contain(['BureauVote'])
            ->all();

        $this->set(compact('electeurs'));

        // Configuration de la vue JSON
        $this->viewBuilder()
            ->setClassName('Json')
            ->setOption('serialize', 'electeurs');
    }
}