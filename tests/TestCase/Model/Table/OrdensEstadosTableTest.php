<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdensEstadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdensEstadosTable Test Case
 */
class OrdensEstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdensEstadosTable
     */
    public $OrdensEstados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordens_estados',
        'app.ordens',
        'app.estados',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.monedas',
        'app.ivas',
        'app.proceso_material',
        'app.proveedores_clientes_material',
        'app.localizaciones',
        'app.salidas_productos',
        'app.objetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdensEstados') ? [] : ['className' => 'App\Model\Table\OrdensEstadosTable'];
        $this->OrdensEstados = TableRegistry::get('OrdensEstados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdensEstados);

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
