<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductReceiptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductReceiptsTable Test Case
 */
class ProductReceiptsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductReceiptsTable
     */
    public $ProductReceipts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_receipts',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.consultation_products',
        'app.delivery_products',
        'app.kit_products',
        'app.order_products',
        'app.vaccinations',
        'app.patients',
        'app.users',
        'app.operations',
        'app.certificates',
        'app.receipts',
        'app.rooms',
        'app.pavillons',
        'app.bed_rooms',
        'app.specialities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductReceipts') ? [] : ['className' => ProductReceiptsTable::class];
        $this->ProductReceipts = TableRegistry::get('ProductReceipts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductReceipts);

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
