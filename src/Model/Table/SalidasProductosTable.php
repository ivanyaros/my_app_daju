<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalidasProductos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProveedoresClientes
 * @property \Cake\ORM\Association\BelongsTo $PedidosEmpresas
 * @property \Cake\ORM\Association\BelongsTo $Centros
 * @property \Cake\ORM\Association\BelongsToMany $Producto
 *
 * @method \App\Model\Entity\SalidasProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalidasProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalidasProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalidasProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class SalidasProductosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('salidas_productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProveedoresClientes', [
            'foreignKey' => 'proveedores_cliente_id'
        ]);
        $this->belongsTo('PedidosEmpresas', [
            'foreignKey' => 'pedidos_empresa_id'
        ]);
        $this->belongsTo('Centros', [
            'foreignKey' => 'centro_id'
        ]);
        $this->belongsToMany('Producto', [
            'foreignKey' => 'salidas_producto_id',
            'targetForeignKey' => 'producto_id',
            'joinTable' => 'salidas_productos_producto'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('fecha_pedido')
            ->allowEmpty('fecha_pedido');

        $validator
            ->dateTime('fecha_entrega')
            ->allowEmpty('fecha_entrega');

        $validator
            ->allowEmpty('albaran');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['proveedores_cliente_id'], 'ProveedoresClientes'));
        $rules->add($rules->existsIn(['pedidos_empresa_id'], 'PedidosEmpresas'));
        $rules->add($rules->existsIn(['centro_id'], 'Centros'));

        return $rules;
    }
}
