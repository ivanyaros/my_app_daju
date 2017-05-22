<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoTable Test Case
 */
class ProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoTable
     */
    public $Producto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_productos',
        'app.salidas_productos_producto',
        'app.productos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.materiales',
        'app.localizaciones',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.objetos',
        'app.proceso_material',
        'app.proceso_producto',
        'app.cajas',
        'app.palets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Producto') ? [] : ['className' => 'App\Model\Table\ProductoTable'];
        $this->Producto = TableRegistry::get('Producto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Producto);

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
