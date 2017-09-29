<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BedRooms Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\BedsTable|\Cake\ORM\Association\BelongsTo $Beds
 * @property \App\Model\Table\HospitalizationsTable|\Cake\ORM\Association\BelongsTo $Hospitalizations
 *
 * @method \App\Model\Entity\BedRoom get($primaryKey, $options = [])
 * @method \App\Model\Entity\BedRoom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BedRoom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BedRoom|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BedRoom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BedRoom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BedRoom findOrCreate($search, callable $callback = null, $options = [])
 */
class BedRoomsTable extends Table
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

        $this->setTable('bed_rooms');
        $this->setDisplayField('room_id');
        $this->setPrimaryKey(['room_id', 'bed_id', 'hospitalization_id']);

        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Beds', [
            'foreignKey' => 'bed_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hospitalizations', [
            'foreignKey' => 'hospitalization_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        $rules->add($rules->existsIn(['bed_id'], 'Beds'));
        $rules->add($rules->existsIn(['hospitalization_id'], 'Hospitalizations'));

        return $rules;
    }
}
