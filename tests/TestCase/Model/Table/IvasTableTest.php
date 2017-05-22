<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IvasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IvasTable Test Case
 */
class IvasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IvasTable
     */
    public $Ivas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ivas',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.producto',
        'app.cajas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
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
        'app.palets',
        'app.proceso_producto',
        'app.proceso_material'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ivas') ? [] : ['className' => 'App\Model\Table\IvasTable'];
        $this->Ivas = TableRegistry::get('Ivas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ivas);

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
