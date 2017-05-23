<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdensEstadosUtensilios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrdensEstados
 * @property \Cake\ORM\Association\BelongsTo $OrdensEstados
 * @property \Cake\ORM\Association\BelongsTo $Utensilios
 *
 * @method \App\Model\Entity\OrdensEstadosUtensilio get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdensEstadosUtensilio findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdensEstadosUtensiliosTable extends Table
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

        $this->setTable('ordens_estados_utensilios');
        $this->setDisplayField('ordens_estados_orden_id');
        $this->setPrimaryKey(['ordens_estados_orden_id', 'ordens_estados_estado_id', 'utensilios_id']);

        $this->belongsTo('OrdensEstados', [
            'foreignKey' => 'ordens_estados_orden_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrdensEstados', [
            'foreignKey' => 'ordens_estados_estado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Utensilios', [
            'foreignKey' => 'utensilios_id',
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
        $rules->add($rules->existsIn(['ordens_estados_orden_id'], 'OrdensEstados'));
        $rules->add($rules->existsIn(['ordens_estados_estado_id'], 'OrdensEstados'));
        $rules->add($rules->existsIn(['utensilios_id'], 'Utensilios'));

        return $rules;
    }
}
