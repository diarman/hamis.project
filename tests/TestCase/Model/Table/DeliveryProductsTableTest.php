<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryProductsTable Test Case
 */
class DeliveryProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryProductsTable
     */
    public $DeliveryProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delivery_products',
        'app.deliveries',
        'app.providers',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.consultation_products',
        'app.kit_products',
        'app.kits',
        'app.dressings',
        'app.patients',
        'app.users',
        'app.operations',
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
        $config = TableRegistry::exists('DeliveryProducts') ? [] : ['className' => DeliveryProductsTable::class];
        $this->DeliveryProducts = TableRegistry::get('DeliveryProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeliveryProducts);

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
