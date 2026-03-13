<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BureauVoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BureauVoteTable Test Case
 */
class BureauVoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BureauVoteTable
     */
    protected $BureauVote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
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
        $config = $this->getTableLocator()->exists('BureauVote') ? [] : ['className' => BureauVoteTable::class];
        $this->BureauVote = $this->getTableLocator()->get('BureauVote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BureauVote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\BureauVoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
