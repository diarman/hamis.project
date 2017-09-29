<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PunishmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PunishmentsTable Test Case
 */
class PunishmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PunishmentsTable
     */
    public $Punishments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.punishments',
        'app.staffs',
        'app.users',
        'app.operations',
        'app.job_functions',
        'app.services',
        'app.contracts',
        'app.vacations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Punishments') ? [] : ['className' => PunishmentsTable::class];
        $this->Punishments = TableRegistry::get('Punishments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Punishments);

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
