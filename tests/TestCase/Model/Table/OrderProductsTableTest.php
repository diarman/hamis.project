<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderProductsTable Test Case
 */
class OrderProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderProductsTable
     */
    public $OrderProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.order_products',
        'app.orders',
        'app.patients',
        'app.users',
        'app.operations',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.cares',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.consultations',
        'app.consultation_types',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.consultation_products',
        'app.performing_cares',
        'app.delivery_products',
        'app.deliveries',
        'app.providers',
        'app.kit_products',
        'app.kits',
        'app.dressings',
        'app.product_receipts',
        'app.receipts',
        'app.rooms',
        'app.pavillons',
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
        $config = TableRegistry::exists('OrderProducts') ? [] : ['className' => OrderProductsTable::class];
        $this->OrderProducts = TableRegistry::get('OrderProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderProducts);

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
