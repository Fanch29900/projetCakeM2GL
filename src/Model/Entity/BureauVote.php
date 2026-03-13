<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BureauVote Entity
 *
 * @property int $id
 * @property string $adr_bureau
 * @property int $nb_accesseur
 * @property int $id_quartier
 */
class BureauVote extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'adr_bureau' => true,
        'nb_accesseur' => true,
        'id_quartier' => true,
    ];
}
