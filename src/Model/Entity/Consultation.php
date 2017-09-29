<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultation Entity
 *
 * @property int $id
 * @property int $consultation_type_id
 * @property int $hospitalization_id
 * @property int $patient_id
 * @property string $pattern
 * @property \Cake\I18n\FrozenDate $date_consultation
 *
 * @property \App\Model\Entity\ConsultationType $consultation_type
 * @property \App\Model\Entity\Hospitalization $hospitalization
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\ConsultationExam[] $consultation_exams
 * @property \App\Model\Entity\ConsultationParameter[] $consultation_parameters
 * @property \App\Model\Entity\ConsultationProduct[] $consultation_products
 */
class Consultation extends Entity
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
