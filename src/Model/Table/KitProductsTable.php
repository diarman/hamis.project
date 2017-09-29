<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KitProducts Model
 *
 * @property \App\Model\Table\KitsTable|\Cake\ORM\Association\BelongsTo $Kits
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\KitProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\KitProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\KitProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KitProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KitProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KitProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\KitProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class KitProductsTable extends Table
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

        $this->setTable('kit_products');
        $this->setDisplayField('kit_id');
        $this->setPrimaryKey(['kit_id', 'product_id']);

        $this->belongsTo('Kits', [
            'foreignKey' => 'kit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
        $rules->add($rules->existsIn(['kit_id'], 'Kits'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
