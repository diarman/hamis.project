<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\ProductCategoriesTable|\Cake\ORM\Association\BelongsTo $ProductCategories
 * @property \App\Model\Table\CareProductsTable|\Cake\ORM\Association\HasMany $CareProducts
 * @property \App\Model\Table\ConsultationProductsTable|\Cake\ORM\Association\HasMany $ConsultationProducts
 * @property \App\Model\Table\DeliveryProductsTable|\Cake\ORM\Association\HasMany $DeliveryProducts
 * @property \App\Model\Table\KitProductsTable|\Cake\ORM\Association\HasMany $KitProducts
 * @property \App\Model\Table\OrderProductsTable|\Cake\ORM\Association\HasMany $OrderProducts
 * @property \App\Model\Table\ProductReceiptsTable|\Cake\ORM\Association\HasMany $ProductReceipts
 * @property \App\Model\Table\VaccinationsTable|\Cake\ORM\Association\HasMany $Vaccinations
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProductCategories', [
            'foreignKey' => 'product_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CareProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('ConsultationProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('DeliveryProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('KitProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('OrderProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('ProductReceipts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Vaccinations', [
            'foreignKey' => 'product_id'
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
            ->allowEmpty('code')
            ->add('code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('caution')
            ->allowEmpty('caution');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

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
        $rules->add($rules->isUnique(['code']));
        $rules->add($rules->existsIn(['product_category_id'], 'ProductCategories'));

        return $rules;
    }
}
