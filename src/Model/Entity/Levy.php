<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Levy Entity
 *
 * @property int $id
 * @property int $patient_id
 * @property \Cake\I18n\FrozenDate $levy_date
 * @property \Cake\I18n\FrozenDate $date_withdrawals
 *
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Analysi[] $analysis
 */
class Levy extends Entity
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
