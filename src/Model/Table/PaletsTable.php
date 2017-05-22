<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Palets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Producto
 *
 * @method \App\Model\Entity\Palet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Palet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Palet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Palet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Palet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Palet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Palet findOrCreate($search, callable $callback = null, $options = [])
 */
class PaletsTable extends Table
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

        $this->setTable('palets');
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
