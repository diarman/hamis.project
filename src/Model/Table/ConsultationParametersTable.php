<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsultationParameters Model
 *
 * @property \App\Model\Table\ParametersTable|\Cake\ORM\Association\BelongsTo $Parameters
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\BelongsTo $Consultations
 *
 * @method \App\Model\Entity\ConsultationParameter get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsultationParameter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsultationParameter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationParameter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsultationParameter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationParameter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationParameter findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsultationParametersTable extends Table
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

        $this->setTable('consultation_parameters');
        $this->setDisplayField('parameter_id');
        $this->setPrimaryKey(['parameter_id', 'consultation_id']);

        $this->belongsTo('Parameters', [
            'foreignKey' => 'parameter_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Consultations', [
            'foreignKey' => 'consultation_id',
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
            ->integer('value')
            ->allowEmpty('value');

        $validator
            ->date('take_date')
            ->allowEmpty('take_date');

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
        $rules->add($rules->existsIn(['parameter_id'], 'Parameters'));
        $rules->add($rules->existsIn(['consultation_id'], 'Consultations'));

        return $rules;
    }
}
