<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnalysisElementsFixture
 *
 */
class AnalysisElementsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'analysis_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'element_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'result_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'value' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['analysis_id', 'element_id'], 'length' => []],
            'analysis_elements_analysis_id_fkey' => ['type' => 'foreign', 'columns' => ['analysis_id'], 'references' => ['analysis', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'analysis_elements_element_id_fkey' => ['type' => 'foreign', 'columns' => ['element_id'], 'references' => ['elements', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'analysis_elements_result_id_fkey' => ['type' => 'foreign', 'columns' => ['result_id'], 'references' => ['results', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'analysis_id' => 1,
            'element_id' => 1,
            'result_id' => 1,
            'value' => 1
        ],
    ];
}
