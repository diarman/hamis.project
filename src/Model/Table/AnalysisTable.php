<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Analysis Model
 *
 * @property \App\Model\Table\LeviesTable|\Cake\ORM\Association\BelongsTo $Levies
 * @property \App\Model\Table\ElementsTable|\Cake\ORM\Association\BelongsToMany $Elements
 *
 * @method \App\Model\Entity\Analysi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Analysi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Analysi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Analysi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Analysi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Analysi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Analysi findOrCreate($search, callable $callback = null, $options = [])
 */
class AnalysisTable extends Table
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

        $this->setTable('analysis');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Levies', [
            'foreignKey' => 'levy_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Elements', [
            'foreignKey' => 'analysi_id',
            'targetForeignKey' => 'element_id',
            'joinTable' => 'analysis_elements'
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
            ->date('analysis_date')
            ->allowEmpty('analysis_date');

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
        $rules->add($rules->existsIn(['levy_id'], 'Levies'));

        return $rules;
    }
}
