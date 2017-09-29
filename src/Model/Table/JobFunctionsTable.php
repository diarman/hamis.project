<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobFunctions Model
 *
 * @property \App\Model\Table\StaffsTable|\Cake\ORM\Association\HasMany $Staffs
 *
 * @method \App\Model\Entity\JobFunction get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobFunction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobFunction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobFunction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobFunction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobFunction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobFunction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JobFunctionsTable extends Table
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

        $this->setTable('job_functions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Staffs', [
            'foreignKey' => 'job_function_id'
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
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->decimal('maximum_salary')
            ->allowEmpty('maximum_salary');

        $validator
            ->decimal('minimum_salary')
            ->allowEmpty('minimum_salary');

        return $validator;
    }
}
