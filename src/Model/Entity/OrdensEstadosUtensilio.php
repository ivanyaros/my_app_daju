<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdensEstadosUtensilio Entity
 *
 * @property int $id
 * @property int $ordens_estado_id
 * @property int $utensilio_id
 * @property string $observaciones
 *
 * @property \App\Model\Entity\OrdensEstado $ordens_estado
 * @property \App\Model\Entity\Utensilio $utensilio
 */
class OrdensEstadosUtensilio extends Entity
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
        'ordens_estados_orden_id' => false,
        'ordens_estados_estado_id' => false,
        'utensilios_id' => false
    ];
}
