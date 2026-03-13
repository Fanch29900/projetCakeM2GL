<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BureauVoteFixture
 */
class BureauVoteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'bureau_vote';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'adr_bureau' => 'Lorem ipsum dolor sit amet',
                'nb_accesseur' => 1,
                'id_quartier' => 1,
            ],
        ];
        parent::init();
    }
}
