<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kits Model
 *
 * @property \App\Model\Table\DressingsTable|\Cake\ORM\Association\HasMany $Dressings
 * @property \App\Model\Table\KitProductsTable|\Cake\ORM\Association\HasMany $KitProducts
 *
 * @method \App\Model\Entity\Kit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KitsTable extends Table
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

        $this->setTable('kits');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Dressings', [
            'foreignKey' => 'kit_id'
        ]);
        $this->hasMany('KitProducts', [
            'foreignKey' => 'kit_id'
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

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
