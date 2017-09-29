<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rendez-vous Model
 *
 * @property \App\Model\Table\PatientsTable|\Cake\ORM\Association\BelongsTo $Patients
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Rendez-vous get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rendez-vous newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rendez-vous[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rendez-vous|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rendez-vous patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rendez-vous[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rendez-vous findOrCreate($search, callable $callback = null, $options = [])
 */
class Rendez-vousTable extends Table
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

        $this->setTable('rendez_vous');
        $this->setDisplayField('patient_id');
        $this->setPrimaryKey(['patient_id', 'user_id']);

        $this->belongsTo('Patients', [
            'foreignKey' => 'patient_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('code')
            ->allowEmpty('code');

        $validator
            ->scalar('contexte')
            ->allowEmpty('contexte');

        $validator
            ->date('date_rdv')
            ->allowEmpty('date_rdv');

        $validator
            ->time('heure_rdv')
            ->allowEmpty('heure_rdv');

        $validator
            ->scalar('etat')
            ->allowEmpty('etat');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
