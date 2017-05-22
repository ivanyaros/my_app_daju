<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialesLote Entity
 *
 * @property int $materiale_id
 * @property string $lote
 * @property float $peso
 * @property float $metros
 * @property int $unidades
 *
 * @property \App\Model\Entity\Materiale $materiale
 */
class MaterialesLote extends Entity
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
