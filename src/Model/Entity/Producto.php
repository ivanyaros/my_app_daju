<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $referencia
 * @property int $familia_id
 * @property float $precio
 * @property int $moneda_id
 * @property int $iva_id
 * @property string $observaciones
 * @property bool $visible
 *
 * @property \App\Model\Entity\ProcesoProducto[] $proceso_producto
 * @property \App\Model\Entity\Proceso[] $proceso
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\Moneda $moneda
 * @property \App\Model\Entity\Iva $iva
 * @property \App\Model\Entity\Caja[] $cajas
 * @property \App\Model\Entity\Objeto[] $objetos
 * @property \App\Model\Entity\Palet[] $palets
 * @property \App\Model\Entity\PedidosEmpresa[] $pedidos_empresas
 */
class Producto extends Entity
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
        'id' => false
    ];
}
