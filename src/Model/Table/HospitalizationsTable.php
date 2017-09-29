<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hospitalizations Model
 *
 * @property \App\Model\Table\BedRoomsTable|\Cake\ORM\Association\HasMany $BedRooms
 * @property \App\Model\Table\CaresTable|\Cake\ORM\Association\HasMany $Cares
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 *
 * @method \App\Model\Entity\Hospitalization get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hospitalization newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hospitalization[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hospitalization|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hospitalization patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hospitalization[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hospitalization findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HospitalizationsTable extends Table
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

        $this->setTable('hospitalizations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BedRooms', [
            'foreignKey' => 'hospitalization_id'
        ]);
        $this->hasMany('Cares', [
            'foreignKey' => 'hospitalization_id'
        ]);
        $this->hasMany('Consultations', [
            'foreignKey' => 'hospitalization_id'
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
            ->date('entered_date')
            ->allowEmpty('entered_date');

        $validator
            ->scalar('entered_pattern')
            ->allowEmpty('entered_pattern');

        $validator
            ->date('out_date')
            ->allowEmpty('out_date');

        $validator
            ->scalar('out_pattern')
            ->allowEmpty('out_pattern');

        $validator
            ->scalar('out_state')
            ->allowEmpty('out_state');

        $validator
            ->boolean('out_statue')
            ->allowEmpty('out_statue');

        return $validator;
    }
}
