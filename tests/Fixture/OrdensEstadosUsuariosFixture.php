<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdensEstadosUsuariosFixture
 *
 */
class OrdensEstadosUsuariosFixture extends TestFixture
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
        'usuario_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'parte' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_ordens_estados_has_usuarios_usuarios1_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'fk_ordens_estados_has_usuarios_ordens_estados1_idx' => ['type' => 'index', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id', 'usuario_id'], 'length' => []],
            'fk_ordens_estados_has_usuarios_ordens_estados1' => ['type' => 'foreign', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'references' => ['ordens_estados', '1' => ['orden_id', 'estado_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_estados_has_usuarios_usuarios1' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'usuario_id' => 1,
            'parte' => 1
        ],
    ];
}
