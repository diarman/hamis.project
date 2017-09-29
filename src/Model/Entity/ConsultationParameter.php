<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConsultationParameter Entity
 *
 * @property int $parameter_id
 * @property int $consultation_id
 * @property int $value
 * @property \Cake\I18n\FrozenDate $take_date
 *
 * @property \App\Model\Entity\Parameter $parameter
 * @property \App\Model\Entity\Consultation $consultation
 */
class ConsultationParameter extends Entity
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
        'parameter_id' => false,
        'consultation_id' => false
    ];
}
