<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultations Model
 *
 * @property \App\Model\Table\ConsultationTypesTable|\Cake\ORM\Association\BelongsTo $ConsultationTypes
 * @property \App\Model\Table\HospitalizationsTable|\Cake\ORM\Association\BelongsTo $Hospitalizations
 * @property \App\Model\Table\PatientsTable|\Cake\ORM\Association\BelongsTo $Patients
 * @property \App\Model\Table\ConsultationExamsTable|\Cake\ORM\Association\HasMany $ConsultationExams
 * @property \App\Model\Table\ConsultationParametersTable|\Cake\ORM\Association\HasMany $ConsultationParameters
 * @property \App\Model\Table\ConsultationProductsTable|\Cake\ORM\Association\HasMany $ConsultationProducts
 *
 * @method \App\Model\Entity\Consultation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultation findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsultationsTable extends Table
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

        $this->setTable('consultations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ConsultationTypes', [
            'foreignKey' => 'consultation_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hospitalizations', [
            'foreignKey' => 'hospitalization_id'
        ]);
        $this->belongsTo('Patients', [
            'foreignKey' => 'patient_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ConsultationExams', [
            'foreignKey' => 'consultation_id'
        ]);
        $this->hasMany('ConsultationParameters', [
            'foreignKey' => 'consultation_id'
        ]);
        $this->hasMany('ConsultationProducts', [
            'foreignKey' => 'consultation_id'
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
            ->scalar('pattern')
            ->allowEmpty('pattern');

        $validator
            ->date('date_consultation')
            ->allowEmpty('date_consultation');

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
        $rules->add($rules->existsIn(['consultation_type_id'], 'ConsultationTypes'));
        $rules->add($rules->existsIn(['hospitalization_id'], 'Hospitalizations'));
        $rules->add($rules->existsIn(['patient_id'], 'Patients'));

        return $rules;
    }
}
