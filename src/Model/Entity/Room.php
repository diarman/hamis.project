<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $pavillon_id
 * @property string $label
 * @property int $bed_number
 * @property float $price
 *
 * @property \App\Model\Entity\Pavillon $pavillon
 * @property \App\Model\Entity\BedRoom[] $bed_rooms
 * @property \App\Model\Entity\Receipt[] $receipts
 */
class Room extends Entity
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
