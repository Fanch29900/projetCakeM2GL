<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuartierTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuartierTable Test Case
 */
class QuartierTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuartierTable
     */
    protected $Quartier;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Quartier',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Quartier') ? [] : ['className' => QuartierTable::class];
        $this->Quartier = $this->getTableLocator()->get('Quartier', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Quartier);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\QuartierTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
