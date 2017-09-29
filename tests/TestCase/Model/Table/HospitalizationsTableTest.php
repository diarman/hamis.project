<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HospitalizationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HospitalizationsTable Test Case
 */
class HospitalizationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HospitalizationsTable
     */
    public $Hospitalizations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hospitalizations',
        'app.bed_rooms',
        'app.cares',
        'app.consultations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hospitalizations') ? [] : ['className' => HospitalizationsTable::class];
        $this->Hospitalizations = TableRegistry::get('Hospitalizations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hospitalizations);

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
}
