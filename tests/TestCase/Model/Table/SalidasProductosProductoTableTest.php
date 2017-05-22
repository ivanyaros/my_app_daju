<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalidasProductosProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalidasProductosProductoTable Test Case
 */
class SalidasProductosProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalidasProductosProductoTable
     */
    public $SalidasProductosProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salidas_productos_producto',
        'app.salidas_productos',
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
        'app.pedidos_empresas',
        'app.pedidos_empresas_producto',
        'app.proceso_producto',
        'app.materiales',
        'app.proceso_material',
        'app.proveedores_clientes_material',
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
        $config = TableRegistry::exists('SalidasProductosProducto') ? [] : ['className' => 'App\Model\Table\SalidasProductosProductoTable'];
        $this->SalidasProductosProducto = TableRegistry::get('SalidasProductosProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalidasProductosProducto);

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
