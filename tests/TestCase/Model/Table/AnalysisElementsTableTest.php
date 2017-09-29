<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnalysisElementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnalysisElementsTable Test Case
 */
class AnalysisElementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnalysisElementsTable
     */
    public $AnalysisElements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.analysis_elements',
        'app.analysis',
        'app.levies',
        'app.patients',
        'app.users',
        'app.operations',
        'app.elements',
        'app.exams',
        'app.exam_types',
        'app.consultation_exams',
        'app.results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AnalysisElements') ? [] : ['className' => AnalysisElementsTable::class];
        $this->AnalysisElements = TableRegistry::get('AnalysisElements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AnalysisElements);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
