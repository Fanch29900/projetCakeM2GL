<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElecteurTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElecteurTable Test Case
 */
class ElecteurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ElecteurTable
     */
    protected $Electeur;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Electeur',
        'app.BureauVote',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Electeur') ? [] : ['className' => ElecteurTable::class];
        $this->Electeur = $this->getTableLocator()->get('Electeur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Electeur);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ElecteurTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testValidationNomVide()
    {
        $data = [
            'prenom' => 'Jean',
            'nom' => '', // On teste un nom vide
            'bureau_vote_id' => 1
        ];
        $electeur = $this->Electeur->newEntity($data);
        
        // On vérifie que l'entité contient des erreurs sur le champ 'nom'
        $this->assertNotEmpty($electeur->getErrors()['nom']);
        
        // On vérifie le message d'erreur spécifique si nécessaire
        $this->assertEquals('This field cannot be left empty', current($electeur->getErrors()['nom']));
    }
}
