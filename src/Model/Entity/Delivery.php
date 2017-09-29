<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Delivery Entity
 *
 * @property int $id
 * @property int $provider_id
 * @property \Cake\I18n\FrozenDate $delivery_date
 *
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\DeliveryProduct[] $delivery_products
 */
class Delivery extends Entity
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
