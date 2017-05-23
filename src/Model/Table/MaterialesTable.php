<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materiales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Material
 * @property \Cake\ORM\Association\BelongsTo $Localizaciones
 * @property \Cake\ORM\Association\BelongsTo $EntradasMaterial
 *
 * @method \App\Model\Entity\Materiale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materiale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materiale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materiale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materiale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materiale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materiale findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialesTable extends Table
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

        $this->setTable('materiales');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'material_id']);

        $this->belongsTo('Material', [
            'foreignKey' => 'material_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Localizaciones', [
            'foreignKey' => 'localizacione_id'
        ]);
        $this->belongsTo('EntradasMaterial', [
            'foreignKey' => 'entradas_material_id'
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
            ->dateTime('fecha_entega')
            ->allowEmpty('fecha_entega');

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
        $rules->add($rules->existsIn(['material_id'], 'Material'));
        $rules->add($rules->existsIn(['localizacione_id'], 'Localizaciones'));
        $rules->add($rules->existsIn(['entradas_material_id'], 'EntradasMaterial'));

        return $rules;
    }
}
