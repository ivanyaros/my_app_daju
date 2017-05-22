<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ObjetosFixture
 *
 */
class ObjetosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'productoscol' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_productos_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_objetos_ordens1_idx' => ['type' => 'index', 'columns' => ['orden_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_productos_producto1' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['producto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_objetos_ordens1' => ['type' => 'foreign', 'columns' => ['orden_id'], 'references' => ['ordens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'producto_id' => 1,
            'referencia' => 'Lorem ipsum dolor sit amet',
            'productoscol' => 'Lorem ipsum dolor sit amet',
            'orden_id' => 1
        ],
    ];
}
