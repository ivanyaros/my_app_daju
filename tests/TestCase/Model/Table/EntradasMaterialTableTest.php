<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntradasMaterialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntradasMaterialTable Test Case
 */
class EntradasMaterialTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntradasMaterialTable
     */
    public $EntradasMaterial;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
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
        $config = TableRegistry::exists('EntradasMaterial') ? [] : ['className' => 'App\Model\Table\EntradasMaterialTable'];
        $this->EntradasMaterial = TableRegistry::get('EntradasMaterial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntradasMaterial);

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
