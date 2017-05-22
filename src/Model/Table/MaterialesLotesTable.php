<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialesLotes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Materiales
 *
 * @method \App\Model\Entity\MaterialesLote get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialesLote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaterialesLote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesLote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialesLote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesLote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialesLote findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialesLotesTable extends Table
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

        $this->setTable('materiales_lotes');
        $this->setDisplayField('materiale_id');
        $this->setPrimaryKey('materiale_id');

        $this->belongsTo('Materiales', [
            'foreignKey' => 'materiale_id',
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
            ->allowEmpty('lote');

        $validator
            ->numeric('peso')
            ->allowEmpty('peso');

        $validator
            ->numeric('metros')
            ->allowEmpty('metros');

        $validator
            ->integer('unidades')
            ->allowEmpty('unidades');

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
