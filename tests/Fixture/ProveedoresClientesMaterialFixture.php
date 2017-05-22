<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedoresClientesMaterialFixture
 *
 */
class ProveedoresClientesMaterialFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedores_clientes_material';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'proveedores_cliente_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'material_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_proveedores_clientes_has_material_material1_idx' => ['type' => 'index', 'columns' => ['material_id'], 'length' => []],
            'fk_proveedores_clientes_has_material_proveedores_clientes1_idx' => ['type' => 'index', 'columns' => ['proveedores_cliente_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['proveedores_cliente_id', 'material_id'], 'length' => []],
            'fk_proveedores_clientes_has_material_proveedores_clientes1' => ['type' => 'foreign', 'columns' => ['proveedores_cliente_id'], 'references' => ['proveedores_clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proveedores_clientes_has_material_material1' => ['type' => 'foreign', 'columns' => ['material_id'], 'references' => ['material', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'proveedores_cliente_id' => 1,
            'material_id' => 1
        ],
    ];
}
