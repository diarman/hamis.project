<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnalysisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnalysisTable Test Case
 */
class AnalysisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnalysisTable
     */
    public $Analysis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.analysis',
        'app.levies',
        'app.patients',
        'app.users',
        'app.operations',
        'app.elements',
        'app.exams',
        'app.exam_types',
        'app.consultation_exams',
        'app.analysis_elements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Analysis') ? [] : ['className' => AnalysisTable::class];
        $this->Analysis = TableRegistry::get('Analysis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Analysis);

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
