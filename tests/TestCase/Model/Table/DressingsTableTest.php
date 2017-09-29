<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DressingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DressingsTable Test Case
 */
class DressingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DressingsTable
     */
    public $Dressings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dressings',
        'app.patients',
        'app.users',
        'app.operations',
        'app.kits',
        'app.kit_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dressings') ? [] : ['className' => DressingsTable::class];
        $this->Dressings = TableRegistry::get('Dressings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dressings);

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
