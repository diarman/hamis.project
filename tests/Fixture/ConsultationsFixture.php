<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConsultationsFixture
 *
 */
class ConsultationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'consultation_type_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'hospitalization_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'patient_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'pattern' => ['type' => 'string', 'length' => 254, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'date_consultation' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'consultations_consultation_type_id_fkey' => ['type' => 'foreign', 'columns' => ['consultation_type_id'], 'references' => ['consultation_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'consultations_hospitalization_id_fkey' => ['type' => 'foreign', 'columns' => ['hospitalization_id'], 'references' => ['hospitalizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'consultations_patient_id_fkey' => ['type' => 'foreign', 'columns' => ['patient_id'], 'references' => ['patients', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'consultation_type_id' => 1,
            'hospitalization_id' => 1,
            'patient_id' => 1,
            'pattern' => 'Lorem ipsum dolor sit amet',
            'date_consultation' => '2017-09-29'
        ],
    ];
}
