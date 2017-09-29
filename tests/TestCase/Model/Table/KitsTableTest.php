<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KitsTable Test Case
 */
class KitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KitsTable
     */
    public $Kits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kits',
        'app.dressings',
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
        $config = TableRegistry::exists('Kits') ? [] : ['className' => KitsTable::class];
        $this->Kits = TableRegistry::get('Kits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kits);

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
