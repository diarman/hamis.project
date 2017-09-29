<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dressings Model
 *
 * @property \App\Model\Table\PatientsTable|\Cake\ORM\Association\BelongsTo $Patients
 * @property \App\Model\Table\KitsTable|\Cake\ORM\Association\BelongsTo $Kits
 *
 * @method \App\Model\Entity\Dressing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dressing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dressing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dressing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dressing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dressing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dressing findOrCreate($search, callable $callback = null, $options = [])
 */
class DressingsTable extends Table
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

        $this->setTable('dressings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Patients', [
            'foreignKey' => 'patient_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Kits', [
            'foreignKey' => 'kit_id',
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
            ->integer('dressing_date')
            ->allowEmpty('dressing_date');

        $validator
            ->scalar('evolution')
            ->allowEmpty('evolution');

        $validator
            ->scalar('procedure')
            ->allowEmpty('procedure');

        $validator
            ->scalar('technique')
            ->allowEmpty('technique');

        $validator
            ->date('apointment')
            ->allowEmpty('apointment');

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
        $rules->add($rules->existsIn(['patient_id'], 'Patients'));
        $rules->add($rules->existsIn(['kit_id'], 'Kits'));

        return $rules;
    }
}
