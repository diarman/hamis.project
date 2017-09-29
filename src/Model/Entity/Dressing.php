<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dressing Entity
 *
 * @property int $id
 * @property int $patient_id
 * @property int $kit_id
 * @property int $dressing_date
 * @property string $evolution
 * @property string $procedure
 * @property string $technique
 * @property \Cake\I18n\FrozenDate $apointment
 *
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Kit $kit
 */
class Dressing extends Entity
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
