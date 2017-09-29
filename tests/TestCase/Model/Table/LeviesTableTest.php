<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeviesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeviesTable Test Case
 */
class LeviesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LeviesTable
     */
    public $Levies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.levies',
        'app.patients',
        'app.users',
        'app.operations',
        'app.analysis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Levies') ? [] : ['className' => LeviesTable::class];
        $this->Levies = TableRegistry::get('Levies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Levies);

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
