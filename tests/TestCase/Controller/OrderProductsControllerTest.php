<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OrderProductsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OrderProductsController Test Case
 */
class OrderProductsControllerTest extends IntegrationTestCase
{

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
