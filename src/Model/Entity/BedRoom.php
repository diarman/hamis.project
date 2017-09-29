<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BedRoom Entity
 *
 * @property int $room_id
 * @property int $bed_id
 * @property int $hospitalization_id
 *
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Bed $bed
 * @property \App\Model\Entity\Hospitalization $hospitalization
 */
class BedRoom extends Entity
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
        'room_id' => false,
        'bed_id' => false,
        'hospitalization_id' => false
    ];
}
