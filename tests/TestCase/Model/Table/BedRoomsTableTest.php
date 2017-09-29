<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BedRoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BedRoomsTable Test Case
 */
class BedRoomsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BedRoomsTable
     */
    public $BedRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bed_rooms',
        'app.rooms',
        'app.pavillons',
        'app.receipts',
        'app.specialities',
        'app.product_receipts',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.cares',
        'app.hospitalizations',
        'app.consultations',
        'app.consultation_types',
        'app.patients',
        'app.users',
        'app.operations',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.parameters',
        'app.consultation_products',
        'app.performing_cares',
        'app.delivery_products',
        'app.deliveries',
        'app.providers',
        'app.kit_products',
        'app.kits',
        'app.dressings',
        'app.order_products',
        'app.orders',
        'app.vaccinations',
        'app.certificates',
        'app.beds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BedRooms') ? [] : ['className' => BedRoomsTable::class];
        $this->BedRooms = TableRegistry::get('BedRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BedRooms);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
