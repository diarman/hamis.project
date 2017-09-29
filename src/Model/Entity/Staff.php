<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $staff_id
 * @property int $job_function_id
 * @property int $service_id
 * @property \Cake\I18n\FrozenDate $hire_date
 * @property float $salary
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Staff[] $staffs
 * @property \App\Model\Entity\JobFunction $job_function
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Contract[] $contracts
 * @property \App\Model\Entity\Punishment[] $punishments
 * @property \App\Model\Entity\Vacation[] $vacations
 */
class Staff extends Entity
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
