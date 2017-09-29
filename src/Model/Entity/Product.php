<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $product_category_id
 * @property string $code
 * @property string $name
 * @property string $caution
 * @property float $price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductCategory $product_category
 * @property \App\Model\Entity\CareProduct[] $care_products
 * @property \App\Model\Entity\ConsultationProduct[] $consultation_products
 * @property \App\Model\Entity\DeliveryProduct[] $delivery_products
 * @property \App\Model\Entity\KitProduct[] $kit_products
 * @property \App\Model\Entity\OrderProduct[] $order_products
 * @property \App\Model\Entity\ProductReceipt[] $product_receipts
 * @property \App\Model\Entity\Vaccination[] $vaccinations
 */
class Product extends Entity
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
