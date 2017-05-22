<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialesBobinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialesBobinasTable Test Case
 */
class MaterialesBobinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialesBobinasTable
     */
    public $MaterialesBobinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiales_bobinas',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.monedas',
        'app.ivas',
        'app.proceso_material',
        'app.proveedores_clientes',
        'app.proveedores_clientes_material',
        'app.localizaciones',
        'app.centros',
        'app.entradas_material',
        'app.ordens',
        'app.salidas_productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialesBobinas') ? [] : ['className' => 'App\Model\Table\MaterialesBobinasTable'];
        $this->MaterialesBobinas = TableRegistry::get('MaterialesBobinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialesBobinas);

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
