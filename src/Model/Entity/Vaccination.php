<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vaccination Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $patient_id
 * @property \Cake\I18n\FrozenDate $vaccination_date
 * @property string $dosage
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Certificate[] $certificates
 */
class Vaccination extends Entity
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
