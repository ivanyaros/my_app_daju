<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonedasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonedasTable Test Case
 */
class MonedasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonedasTable
     */
    public $Monedas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monedas',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.ivas',
        'app.materiales',
        'app.localizaciones',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.ordens',
        'app.salidas_productos',
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
        $config = TableRegistry::exists('Monedas') ? [] : ['className' => 'App\Model\Table\MonedasTable'];
        $this->Monedas = TableRegistry::get('Monedas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Monedas);

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
