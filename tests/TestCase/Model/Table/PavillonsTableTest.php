<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PavillonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PavillonsTable Test Case
 */
class PavillonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PavillonsTable
     */
    public $Pavillons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pavillons',
        'app.rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pavillons') ? [] : ['className' => PavillonsTable::class];
        $this->Pavillons = TableRegistry::get('Pavillons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pavillons);

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
}
