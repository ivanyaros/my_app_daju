<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materiale Entity
 *
 * @property int $id
 * @property int $material_id
 * @property string $nombre
 * @property string $referencia
 * @property \Cake\I18n\FrozenTime $fecha_entega
 * @property int $localizacion_id
 * @property int $entradas_material_id
 *
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\Localizacione $localizacione
 * @property \App\Model\Entity\EntradasMaterial $entradas_material
 */
class Materiale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'material_id' => false
    ];
}
