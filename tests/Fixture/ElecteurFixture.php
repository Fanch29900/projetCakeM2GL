<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ElecteurFixture extends TestFixture
{
    public string $table = 'electeur';

    // Définir les champs manuellement pour que Cake puisse créer la table
    public array $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'autoIncrement' => true],
        'nom' => ['type' => 'string', 'length' => 255, 'null' => false],
        'prenom' => ['type' => 'string', 'length' => 255, 'null' => false],
        'bureau_vote_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
    ];

    public array $records = [
        [
            'id' => 1,
            'nom' => 'Gaillard',
            'prenom' => 'Jean',
            'bureau_vote_id' => 1,
        ],
    ];
}