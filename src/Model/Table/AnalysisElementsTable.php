<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnalysisElements Model
 *
 * @property \App\Model\Table\AnalysisTable|\Cake\ORM\Association\BelongsTo $Analysis
 * @property \App\Model\Table\ElementsTable|\Cake\ORM\Association\BelongsTo $Elements
 * @property \App\Model\Table\ResultsTable|\Cake\ORM\Association\BelongsTo $Results
 *
 * @method \App\Model\Entity\AnalysisElement get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnalysisElement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnalysisElement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnalysisElement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnalysisElement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnalysisElement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnalysisElement findOrCreate($search, callable $callback = null, $options = [])
 */
class AnalysisElementsTable extends Table
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

        $this->setTable('analysis_elements');
        $this->setDisplayField('analysis_id');
        $this->setPrimaryKey(['analysis_id', 'element_id']);

        $this->belongsTo('Analysis', [
            'foreignKey' => 'analysis_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Elements', [
            'foreignKey' => 'element_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Results', [
            'foreignKey' => 'result_id',
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
            ->integer('value')
            ->allowEmpty('value');

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
        $rules->add($rules->existsIn(['analysis_id'], 'Analysis'));
        $rules->add($rules->existsIn(['element_id'], 'Elements'));
        $rules->add($rules->existsIn(['result_id'], 'Results'));

        return $rules;
    }
}
