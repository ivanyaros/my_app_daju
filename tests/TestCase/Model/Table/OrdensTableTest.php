<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdensTable Test Case
 */
class OrdensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdensTable
     */
    public $Ordens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_productos',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.proceso_material',
        'app.proceso_producto',
        'app.materiales',
        'app.localizaciones',
        'app.proveedores_clientes_material',
        'app.cajas',
        'app.objetos',
        'app.palets',
        'app.pedidos_empresas_producto',
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
        $config = TableRegistry::exists('Ordens') ? [] : ['className' => 'App\Model\Table\OrdensTable'];
        $this->Ordens = TableRegistry::get('Ordens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ordens);

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
