<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnalysisElement Entity
 *
 * @property int $analysis_id
 * @property int $element_id
 * @property int $result_id
 * @property int $value
 *
 * @property \App\Model\Entity\Analysi $analysi
 * @property \App\Model\Entity\Element $element
 * @property \App\Model\Entity\Result $result
 */
class AnalysisElement extends Entity
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
        'analysis_id' => false,
        'element_id' => false
    ];
}
