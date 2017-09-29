<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultationProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultationProductsTable Test Case
 */
class ConsultationProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultationProductsTable
     */
    public $ConsultationProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultation_products',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.cares',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.consultations',
        'app.consultation_types',
        'app.patients',
        'app.users',
        'app.operations',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.performing_cares',
        'app.delivery_products',
        'app.deliveries',
        'app.providers',
        'app.kit_products',
        'app.kits',
        'app.dressings',
        'app.order_products',
        'app.orders',
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
        $config = TableRegistry::exists('ConsultationProducts') ? [] : ['className' => ConsultationProductsTable::class];
        $this->ConsultationProducts = TableRegistry::get('ConsultationProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsultationProducts);

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
