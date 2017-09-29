<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultationParametersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultationParametersTable Test Case
 */
class ConsultationParametersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultationParametersTable
     */
    public $ConsultationParameters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultation_parameters',
        'app.parameters',
        'app.consultations',
        'app.consultation_types',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.cares',
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
        'app.orders',
        'app.product_receipts',
        'app.receipts',
        'app.rooms',
        'app.pavillons',
        'app.specialities',
        'app.vaccinations',
        'app.certificates',
        'app.performing_cares',
        'app.consultation_exams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ConsultationParameters') ? [] : ['className' => ConsultationParametersTable::class];
        $this->ConsultationParameters = TableRegistry::get('ConsultationParameters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsultationParameters);

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
