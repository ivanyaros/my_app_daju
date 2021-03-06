<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DireccionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DireccionesTable Test Case
 */
class DireccionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DireccionesTable
     */
    public $Direcciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.direcciones',
        'app.proveedores_clientes',
        'app.entradas_material',
        'app.centros',
        'app.localizaciones',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.objetos_materiales',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proceso_producto',
        'app.proceso_material',
        'app.proveedores_clientes_material'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Direcciones') ? [] : ['className' => 'App\Model\Table\DireccionesTable'];
        $this->Direcciones = TableRegistry::get('Direcciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Direcciones);

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
