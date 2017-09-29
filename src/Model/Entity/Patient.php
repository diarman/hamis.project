<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property int $phone_number2
 * @property string $religion
 * @property string $desired_service
 * @property string $medical_background
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Patient extends Entity
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
