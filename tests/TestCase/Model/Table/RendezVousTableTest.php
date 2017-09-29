<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RendezVousTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RendezVousTable Test Case
 */
class RendezVousTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RendezVousTable
     */
    public $RendezVous;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rendez_vous',
        'app.patients',
        'app.users',
        'app.operations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RendezVous') ? [] : ['className' => RendezVousTable::class];
        $this->RendezVous = TableRegistry::get('RendezVous', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RendezVous);

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
