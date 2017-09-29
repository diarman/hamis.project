<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultationExamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultationExamsTable Test Case
 */
class ConsultationExamsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultationExamsTable
     */
    public $ConsultationExams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultation_exams',
        'app.consultations',
        'app.consultation_types',
        'app.hospitalizations',
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
        'app.performing_cares',
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
        'app.vaccinations',
        'app.certificates',
        'app.beds',
        'app.consultation_parameters',
        'app.parameters',
        'app.exams',
        'app.exam_types',
        'app.elements',
        'app.analysis',
        'app.levies',
        'app.analysis_elements',
        'app.results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ConsultationExams') ? [] : ['className' => ConsultationExamsTable::class];
        $this->ConsultationExams = TableRegistry::get('ConsultationExams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsultationExams);

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
