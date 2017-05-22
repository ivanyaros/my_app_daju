<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalidasProductosProducto Entity
 *
 * @property int $salidas_productos_id
 * @property int $producto_id
 * @property int $cantidad
 * @property string $observaciones
 *
 * @property \App\Model\Entity\SalidasProducto $salidas_producto
 * @property \App\Model\Entity\Producto $producto
 */
class SalidasProductosProducto extends Entity
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
        'salidas_productos_id' => false,
        'producto_id' => false
    ];
}
