<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdensEstadosMaquinasFixture
 *
 */
class OrdensEstadosMaquinasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ordens_estados_orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ordens_estados_estado_id' => ['type' => 'integer', 'length' => 8, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'maquinas_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'operaciones' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uso' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_ordens_estados_has_maquinas_maquinas1_idx' => ['type' => 'index', 'columns' => ['maquinas_id'], 'length' => []],
            'fk_ordens_estados_has_maquinas_ordens_estados1_idx' => ['type' => 'index', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id', 'maquinas_id'], 'length' => []],
            'fk_ordens_estados_has_maquinas_ordens_estados1' => ['type' => 'foreign', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'references' => ['ordens_estados', '1' => ['orden_id', 'estado_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_estados_has_maquinas_maquinas1' => ['type' => 'foreign', 'columns' => ['maquinas_id'], 'references' => ['maquinas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'ordens_estados_orden_id' => 1,
            'ordens_estados_estado_id' => 1,
            'maquinas_id' => 1,
            'operaciones' => 1,
            'uso' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
