<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerformingCaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerformingCaresTable Test Case
 */
class PerformingCaresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerformingCaresTable
     */
    public $PerformingCares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.performing_cares',
        'app.cares',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.consultations',
        'app.consultation_types',
        'app.patients',
        'app.users',
        'app.operations',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.consultation_products',
        'app.care_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerformingCares') ? [] : ['className' => PerformingCaresTable::class];
        $this->PerformingCares = TableRegistry::get('PerformingCares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerformingCares);

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
