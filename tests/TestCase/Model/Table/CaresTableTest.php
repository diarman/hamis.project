<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CaresTable Test Case
 */
class CaresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CaresTable
     */
    public $Cares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cares',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.consultations',
        'app.care_products',
        'app.performing_cares'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cares') ? [] : ['className' => CaresTable::class];
        $this->Cares = TableRegistry::get('Cares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cares);

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
