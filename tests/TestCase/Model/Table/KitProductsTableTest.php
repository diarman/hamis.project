<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KitProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KitProductsTable Test Case
 */
class KitProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KitProductsTable
     */
    public $KitProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kit_products',
        'app.kits',
        'app.dressings',
        'app.patients',
        'app.users',
        'app.operations',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.consultation_products',
        'app.delivery_products',
        'app.order_products',
        'app.product_receipts',
        'app.receipts',
        'app.rooms',
        'app.pavillons',
        'app.bed_rooms',
        'app.specialities',
        'app.vaccinations',
        'app.certificates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KitProducts') ? [] : ['className' => KitProductsTable::class];
        $this->KitProducts = TableRegistry::get('KitProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KitProducts);

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
