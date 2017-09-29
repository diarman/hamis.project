<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerformingCare Entity
 *
 * @property int $id
 * @property int $care_id
 * @property int $performing_date
 * @property string $evolution
 * @property string $complaint
 *
 * @property \App\Model\Entity\Care $care
 */
class PerformingCare extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
