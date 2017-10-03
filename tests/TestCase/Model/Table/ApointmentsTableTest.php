<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApointmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApointmentsTable Test Case
 */
class ApointmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApointmentsTable
     */
    public $Apointments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.apointments',
        'app.patients',
        'app.users',
        'app.operations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Apointments') ? [] : ['className' => ApointmentsTable::class];
        $this->Apointments = TableRegistry::get('Apointments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Apointments);

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
