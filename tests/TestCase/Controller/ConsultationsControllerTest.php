<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ConsultationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ConsultationsController Test Case
 */
class ConsultationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultations',
        'app.consultation_types',
        'app.hospitalizations',
        'app.bed_rooms',
        'app.cares',
        'app.care_products',
        'app.performing_cares',
        'app.patients',
        'app.users',
        'app.operations',
        'app.consultation_exams',
        'app.consultation_parameters',
        'app.consultation_products'
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
