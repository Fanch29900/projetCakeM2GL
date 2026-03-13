<?php
namespace App\Service;

use Cake\ORM\TableRegistry;

class StatsService
{
    /**
     * Calcule le nombre d'électeurs par Bureau de Vote
     */
    public function getElecteursParBureau(): array
    {
        $table = TableRegistry::getTableLocator()->get('Electeur');
        $query = $table->find();
        
        return $query->select([
                'label' => 'BureauVote.adr_bureau',
                'count' => $query->func()->count('Electeur.id')
            ])
            ->contain(['BureauVote'])
            ->group(['BureauVote.id'])
            ->toArray();
    }

    /**
     * Calcule le nombre d'électeurs par Quartier
     */
    public function getElecteursParQuartier(): array
    {
        $table = TableRegistry::getTableLocator()->get('Electeur');
        $query = $table->find();

        return $query->select([
                'label' => 'Quartier.nom_quartier',
                'count' => $query->func()->count('Electeur.id')
            ])
            ->contain(['BureauVote' => ['Quartier']])
            ->group(['Quartier.id'])
            ->toArray();
    }
}