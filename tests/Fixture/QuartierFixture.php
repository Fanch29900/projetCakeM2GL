<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuartierFixture
 */
class QuartierFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'quartier';
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
                'nom_quartier' => 'Lorem ipsum dolor sit amet',
                'nb_habitant' => 1,
            ],
        ];
        parent::init();
    }
}
