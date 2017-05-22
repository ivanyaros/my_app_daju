<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosEmpresasProducto Entity
 *
 * @property int $pedidos_empresa_id
 * @property int $producto_id
 * @property int $cantidad
 * @property \Cake\I18n\FrozenTime $fecha
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\PedidosEmpresa $pedidos_empresa
 */
class PedidosEmpresasProducto extends Entity
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
        'pedidos_empresa_id' => false,
        'producto_id' => false
    ];
}
