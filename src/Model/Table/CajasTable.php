<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cajas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Producto
 *
 * @method \App\Model\Entity\Caja get($primaryKey, $options = [])
 * @method \App\Model\Entity\Caja newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Caja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caja|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Caja[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caja findOrCreate($search, callable $callback = null, $options = [])
 */
class CajasTable extends Table
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

        $this->setTable('cajas');
        $this->setDisplayField('producto_id');
        $this->setPrimaryKey('producto_id');

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
            ->allowEmpty('descripcion');

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
        $rules->add($rules->existsIn(['producto_id'], 'Producto'));

        return $rules;
    }
}
