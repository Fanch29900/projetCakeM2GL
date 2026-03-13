<?php
namespace App\Controller;

use App\Service\StatsService;

class StatsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('public');
        
        $statsService = new StatsService();
        $statsBureau = $statsService->getElecteursParBureau();
        $statsQuartier = $statsService->getElecteursParQuartier();

        $this->set(compact('statsBureau', 'statsQuartier'));
    }
}

