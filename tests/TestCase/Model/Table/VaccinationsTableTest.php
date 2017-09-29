<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VaccinationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VaccinationsTable Test Case
 */
class VaccinationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VaccinationsTable
     */
    public $Vaccinations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vaccinations',
        'app.products',
        'app.product_categories',
        'app.care_products',
        'app.consultation_products',
        'app.delivery_products',
        'app.kit_products',
        'app.order_products',
        'app.product_receipts',
        'app.patients',
        'app.users',
        'app.operations',
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
        $config = TableRegistry::exists('Vaccinations') ? [] : ['className' => VaccinationsTable::class];
        $this->Vaccinations = TableRegistry::get('Vaccinations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vaccinations);

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
