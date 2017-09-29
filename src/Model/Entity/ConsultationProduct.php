<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConsultationProduct Entity
 *
 * @property int $product_id
 * @property int $consultation_id
 * @property \Cake\I18n\FrozenDate $prescription_date
 * @property string $posolgy
 * @property string $note
 * @property int $quantity
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Consultation $consultation
 */
class ConsultationProduct extends Entity
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
        'product_id' => false,
        'consultation_id' => false
    ];
}
