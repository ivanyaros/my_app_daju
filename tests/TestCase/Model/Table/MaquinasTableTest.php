<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaquinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaquinasTable Test Case
 */
class MaquinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaquinasTable
     */
    public $Maquinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maquinas',
        'app.ordens_estados',
        'app.ordens',
        'app.estados',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
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
        'app.objetos',
        'app.objetos_materiales',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto',
        'app.ordens_estados_maquinas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Maquinas') ? [] : ['className' => 'App\Model\Table\MaquinasTable'];
        $this->Maquinas = TableRegistry::get('Maquinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Maquinas);

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
