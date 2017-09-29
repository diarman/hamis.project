<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConsultationExam Entity
 *
 * @property int $consultation_id
 * @property int $exam_id
 * @property \Cake\I18n\FrozenDate $prescription_date
 * @property string $note
 * @property bool $etat_payement
 *
 * @property \App\Model\Entity\Consultation $consultation
 * @property \App\Model\Entity\Exam $exam
 */
class ConsultationExam extends Entity
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
        'consultation_id' => false,
        'exam_id' => false
    ];
}
