<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdensEstadosUtensiliosFixture
 *
 */
class OrdensEstadosUtensiliosFixture extends TestFixture
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
        'utensilios_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_ordens_estados_has_utensilios_utensilios1_idx' => ['type' => 'index', 'columns' => ['utensilios_id'], 'length' => []],
            'fk_ordens_estados_has_utensilios_ordens_estados1_idx' => ['type' => 'index', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id', 'utensilios_id'], 'length' => []],
            'fk_ordens_estados_has_utensilios_ordens_estados1' => ['type' => 'foreign', 'columns' => ['ordens_estados_orden_id', 'ordens_estados_estado_id'], 'references' => ['ordens_estados', '1' => ['orden_id', 'estado_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_estados_has_utensilios_utensilios1' => ['type' => 'foreign', 'columns' => ['utensilios_id'], 'references' => ['utensilios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'utensilios_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
