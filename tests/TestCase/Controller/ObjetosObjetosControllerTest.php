<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ObjetosObjetosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ObjetosObjetosController Test Case
 */
class ObjetosObjetosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos_objetos',
        'app.objetos',
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
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.materiales',
        'app.localizaciones',
        'app.objetos_materiales',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.ordens_estados_utensilios',
        'app.utensilios',
        'app.ordens_estados_maquinas',
        'app.maquinas',
        'app.proceso_material',
        'app.proceso_producto'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
