<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsultationProducts Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\BelongsTo $Consultations
 *
 * @method \App\Model\Entity\ConsultationProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsultationProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsultationProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsultationProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsultationProduct findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultationProductsTable extends Table
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

        $this->setTable('consultation_products');
        $this->setDisplayField('product_id');
        $this->setPrimaryKey(['product_id', 'consultation_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Consultations', [
            'foreignKey' => 'consultation_id',
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
            ->date('prescription_date')
            ->allowEmpty('prescription_date');

        $validator
            ->scalar('posolgy')
            ->allowEmpty('posolgy');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

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
        $rules->add($rules->existsIn(['consultation_id'], 'Consultations'));

        return $rules;
    }
}
