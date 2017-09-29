<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExamTypes Model
 *
 * @property \App\Model\Table\ExamsTable|\Cake\ORM\Association\HasMany $Exams
 *
 * @method \App\Model\Entity\ExamType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExamType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExamType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExamType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExamType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExamType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExamType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExamTypesTable extends Table
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

        $this->setTable('exam_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Exams', [
            'foreignKey' => 'exam_type_id'
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
            ->scalar('code')
            ->allowEmpty('code');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        return $validator;
    }
}
