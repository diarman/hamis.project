<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Beds Model
 *
 * @property \App\Model\Table\BedRoomsTable|\Cake\ORM\Association\HasMany $BedRooms
 *
 * @method \App\Model\Entity\Bed get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bed newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bed[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bed|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bed patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bed[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bed findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BedsTable extends Table
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

        $this->setTable('beds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BedRooms', [
            'foreignKey' => 'bed_id'
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
            ->scalar('label')
            ->allowEmpty('label');

        return $validator;
    }
}
