<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedoresClientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedoresClientesTable Test Case
 */
class ProveedoresClientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedoresClientesTable
     */
    public $ProveedoresClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.salidas_productos',
        'app.salidas_productos_producto',
        'app.productos',
        'app.pedidos_empresas_producto',
        'app.proceso_producto',
        'app.materiales',
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
        $config = TableRegistry::exists('ProveedoresClientes') ? [] : ['className' => 'App\Model\Table\ProveedoresClientesTable'];
        $this->ProveedoresClientes = TableRegistry::get('ProveedoresClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProveedoresClientes);

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
