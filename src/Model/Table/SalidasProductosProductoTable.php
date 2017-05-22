<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalidasProductosProducto Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalidasProductos
 * @property \Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\SalidasProductosProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalidasProductosProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class SalidasProductosProductoTable extends Table
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

        $this->setTable('salidas_productos_producto');
        $this->setDisplayField('salidas_productos_id');
        $this->setPrimaryKey(['salidas_productos_id', 'producto_id']);

        $this->belongsTo('SalidasProductos', [
            'foreignKey' => 'salidas_productos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER'
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
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['salidas_productos_id'], 'SalidasProductos'));
        $rules->add($rules->existsIn(['producto_id'], 'Productos'));

        return $rules;
    }
}
