<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VacationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VacationsTable Test Case
 */
class VacationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VacationsTable
     */
    public $Vacations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vacations',
        'app.staffs',
        'app.users',
        'app.operations',
        'app.job_functions',
        'app.services',
        'app.contracts',
        'app.punishments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vacations') ? [] : ['className' => VacationsTable::class];
        $this->Vacations = TableRegistry::get('Vacations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vacations);

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
