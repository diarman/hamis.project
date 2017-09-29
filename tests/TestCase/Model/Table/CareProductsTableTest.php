<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CareProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CareProductsTable Test Case
 */
class CareProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CareProductsTable
     */
    public $CareProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.care_products',
        'app.products',
        'app.product_categories',
        'app.consultation_products',
        'app.delivery_products',
        'app.deliveries',
        'app.providers',
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
        'app.certificates',
        'app.cares',
        'app.hospitalizations',
        'app.consultations',
        'app.consultation_types',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.performing_cares'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CareProducts') ? [] : ['className' => CareProductsTable::class];
        $this->CareProducts = TableRegistry::get('CareProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CareProducts);

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
