<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaletsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaletsTable Test Case
 */
class PaletsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaletsTable
     */
    public $Palets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.palets',
        'app.producto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Palets') ? [] : ['className' => 'App\Model\Table\PaletsTable'];
        $this->Palets = TableRegistry::get('Palets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Palets);

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
