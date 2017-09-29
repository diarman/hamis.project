<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CareProducts Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\CaresTable|\Cake\ORM\Association\BelongsTo $Cares
 *
 * @method \App\Model\Entity\CareProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\CareProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CareProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CareProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CareProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CareProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CareProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class CareProductsTable extends Table
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

        $this->setTable('care_products');
        $this->setDisplayField('product_id');
        $this->setPrimaryKey(['product_id', 'care_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cares', [
            'foreignKey' => 'care_id',
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
            ->integer('quantity')
            ->allowEmpty('quantity');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['care_id'], 'Cares'));

        return $rules;
    }
}
