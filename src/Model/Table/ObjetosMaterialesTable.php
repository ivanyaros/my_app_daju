<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ObjetosMateriales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Objetos
 * @property \Cake\ORM\Association\BelongsTo $Materiales
 * @property \Cake\ORM\Association\BelongsTo $Materiales
 *
 * @method \App\Model\Entity\ObjetosMateriale get($primaryKey, $options = [])
 * @method \App\Model\Entity\ObjetosMateriale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ObjetosMateriale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosMateriale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ObjetosMateriale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosMateriale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ObjetosMateriale findOrCreate($search, callable $callback = null, $options = [])
 */
class ObjetosMaterialesTable extends Table
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

        $this->setTable('objetos_materiales');
        $this->setDisplayField('objeto_id');
        $this->setPrimaryKey(['objeto_id', 'materiale_id', 'materiales_material_id']);

        $this->belongsTo('Objetos', [
            'foreignKey' => 'objeto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Materiales', [
            'foreignKey' => 'materiale_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Materiales', [
            'foreignKey' => 'materiales_material_id',
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
            ->integer('cantidad_producida')
            ->allowEmpty('cantidad_producida');

        $validator
            ->numeric('uso')
            ->allowEmpty('uso');

        $validator
            ->numeric('scrap')
            ->allowEmpty('scrap');

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
        $rules->add($rules->existsIn(['objeto_id'], 'Objetos'));
        $rules->add($rules->existsIn(['materiale_id'], 'Materiales'));
        $rules->add($rules->existsIn(['materiales_material_id'], 'Materiales'));

        return $rules;
    }
}
