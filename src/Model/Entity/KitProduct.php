<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KitProduct Entity
 *
 * @property int $kit_id
 * @property int $product_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Kit $kit
 * @property \App\Model\Entity\Product $product
 */
class KitProduct extends Entity
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
        'kit_id' => false,
        'product_id' => false
    ];
}
