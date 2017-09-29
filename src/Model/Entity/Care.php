<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Care Entity
 *
 * @property int $id
 * @property int $hospitalization_id
 * @property \Cake\I18n\FrozenDate $planning_date
 * @property string $description
 * @property string $frequency
 * @property bool $plan
 * @property string $way
 *
 * @property \App\Model\Entity\Hospitalization $hospitalization
 * @property \App\Model\Entity\CareProduct[] $care_products
 * @property \App\Model\Entity\PerformingCare[] $performing_cares
 */
class Care extends Entity
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
