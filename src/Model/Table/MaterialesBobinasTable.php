<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialesBobinas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Materiales
 *
 * @method \App\Model\Entity\MaterialesBobina get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialesBobina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaterialesBobina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesBobina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialesBobina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesBobina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesBobina findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialesBobinasTable extends Table
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

       /* $this->setTable('materiales_bobinas');
        /*$this->setDisplayField('materiale_id');
        $this->setPrimaryKey('materiale_id');*/

        $this->belongsTo('Materiales');
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
            ->allowEmpty('lote');

        $validator
            ->integer('numero')
            ->allowEmpty('numero');

        $validator
            ->integer('taras')
            ->allowEmpty('taras');

        $validator
            ->numeric('metros_brutos')
            ->allowEmpty('metros_brutos');

        $validator
            ->numeric('metros_netos')
            ->allowEmpty('metros_netos');

        $validator
            ->numeric('metros_actuales')
            ->allowEmpty('metros_actuales');

        $validator
            ->allowEmpty('en_uso');

        $validator
            ->allowEmpty('terminado');

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
        $rules->add($rules->existsIn(['materiale_id'], 'Materiales'));

        return $rules;
    }
}
