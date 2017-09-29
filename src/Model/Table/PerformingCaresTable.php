<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerformingCares Model
 *
 * @property \App\Model\Table\CaresTable|\Cake\ORM\Association\BelongsTo $Cares
 *
 * @method \App\Model\Entity\PerformingCare get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerformingCare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerformingCare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerformingCare|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerformingCare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerformingCare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerformingCare findOrCreate($search, callable $callback = null, $options = [])
 */
class PerformingCaresTable extends Table
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

        $this->setTable('performing_cares');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cares', [
            'foreignKey' => 'care_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('performing_date')
            ->allowEmpty('performing_date');

        $validator
            ->scalar('evolution')
            ->allowEmpty('evolution');

        $validator
            ->scalar('complaint')
            ->allowEmpty('complaint');

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
        $rules->add($rules->existsIn(['care_id'], 'Cares'));

        return $rules;
    }
}
