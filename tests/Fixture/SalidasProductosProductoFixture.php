<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalidasProductosProductoFixture
 *
 */
class SalidasProductosProductoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'salidas_productos_producto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'salidas_productos_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_salidas_productos_has_producto_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_salidas_productos_has_producto_salidas_productos1_idx' => ['type' => 'index', 'columns' => ['salidas_productos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['salidas_productos_id', 'producto_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MEMORY',
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
            'salidas_productos_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
