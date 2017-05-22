<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentrosTable Test Case
 */
class CentrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentrosTable
     */
    public $Centros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.centros',
        'app.entradas_material',
        'app.localizaciones',
        'app.ordens',
        'app.proceso',
        'app.salidas_productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Centros') ? [] : ['className' => 'App\Model\Table\CentrosTable'];
        $this->Centros = TableRegistry::get('Centros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centros);

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
