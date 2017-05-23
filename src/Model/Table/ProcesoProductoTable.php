<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProcesoProducto Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Proceso
 * @property \Cake\ORM\Association\BelongsTo $Producto
 *
 * @method \App\Model\Entity\ProcesoProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProcesoProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProcesoProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProcesoProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProcesoProducto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProcesoProductoTable extends Table
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

        $this->setTable('proceso_producto');
        $this->setDisplayField('proceso_id');
        $this->setPrimaryKey(['proceso_id', 'producto_id']);

        $this->belongsTo('Proceso', [
            'foreignKey' => 'proceso_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Producto', [
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
            ->boolean('entrada_salida')
            ->allowEmpty('entrada_salida');

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
        $rules->add($rules->existsIn(['proceso_id'], 'Proceso'));
        $rules->add($rules->existsIn(['producto_id'], 'Producto'));

        return $rules;
    }
}
