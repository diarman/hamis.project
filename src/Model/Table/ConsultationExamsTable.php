<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsultationExams Model
 *
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\BelongsTo $Consultations
 * @property \App\Model\Table\ExamsTable|\Cake\ORM\Association\BelongsTo $Exams
 *
 * @method \App\Model\Entity\ConsultationExam get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsultationExam newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsultationExam[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationExam|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsultationExam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationExam[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationExam findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsultationExamsTable extends Table
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

        $this->setTable('consultation_exams');
        $this->setDisplayField('consultation_id');
        $this->setPrimaryKey(['consultation_id', 'exam_id']);

        $this->belongsTo('Consultations', [
            'foreignKey' => 'consultation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Exams', [
            'foreignKey' => 'exam_id',
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
            ->date('prescription_date')
            ->allowEmpty('prescription_date');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

        $validator
            ->boolean('etat_payement')
            ->allowEmpty('etat_payement');

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
        $rules->add($rules->existsIn(['consultation_id'], 'Consultations'));
        $rules->add($rules->existsIn(['exam_id'], 'Exams'));

        return $rules;
    }
}
