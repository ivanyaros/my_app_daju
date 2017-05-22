<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialesBobina Entity
 *
 * @property int $materiale_id
 * @property string $lote
 * @property int $numero
 * @property int $taras
 * @property float $metros_brutos
 * @property float $metros_netos
 * @property float $metros_actuales
 * @property string $en_uso
 * @property string $terminado
 *
 * @property \App\Model\Entity\Materiale $materiale
 */
class MaterialesBobina extends Entity
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
        'materiale_id' => false
    ];
}
