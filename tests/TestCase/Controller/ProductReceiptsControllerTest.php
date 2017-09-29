<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProductReceiptsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProductReceiptsController Test Case
 */
class ProductReceiptsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
