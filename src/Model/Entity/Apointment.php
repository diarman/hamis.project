<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Apointment Entity
 *
 * @property int $patient_id
 * @property int $user_id
 * @property string $code
 * @property string $contexte
 * @property \Cake\I18n\FrozenDate $date_rdv
 * @property \Cake\I18n\FrozenTime $heure_rdv
 * @property string $etat
 *
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\User $user
 */
class Apointment extends Entity
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
        'patient_id' => false,
        'user_id' => false
    ];
}
