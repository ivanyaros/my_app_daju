<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosEmpresasProductoFixture
 *
 */
class PedidosEmpresasProductoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedidos_empresas_producto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pedidos_empresa_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_pedidos_empresa_has_producto_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_pedidos_empresa_has_producto_pedidos_empresa1_idx' => ['type' => 'index', 'columns' => ['pedidos_empresa_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pedidos_empresa_id', 'producto_id'], 'length' => []],
            'fk_pedidos_empresa_has_producto_pedidos_empresa1' => ['type' => 'foreign', 'columns' => ['pedidos_empresa_id'], 'references' => ['pedidos_empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedidos_empresa_has_producto_producto1' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['producto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'pedidos_empresa_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'fecha' => '2017-05-22 14:26:03'
        ],
    ];
}
