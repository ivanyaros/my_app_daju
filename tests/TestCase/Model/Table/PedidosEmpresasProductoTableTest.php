<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosEmpresasProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosEmpresasProductoTable Test Case
 */
class PedidosEmpresasProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosEmpresasProductoTable
     */
    public $PedidosEmpresasProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_empresas_producto',
        'app.pedidos_empresas',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.entradas_material',
        'app.centros',
        'app.localizaciones',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.proceso',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.cajas',
        'app.objetos',
        'app.palets',
        'app.proceso_producto',
        'app.materiales',
        'app.proceso_material',
        'app.proveedores_clientes_material',
        'app.salidas_productos',
        'app.salidas_productos_producto',
        'app.productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PedidosEmpresasProducto') ? [] : ['className' => 'App\Model\Table\PedidosEmpresasProductoTable'];
        $this->PedidosEmpresasProducto = TableRegistry::get('PedidosEmpresasProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosEmpresasProducto);

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
