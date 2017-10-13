<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disciplinas Model
 *
 * @method \App\Model\Entity\Disciplina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disciplina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Disciplina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disciplina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina findOrCreate($search, callable $callback = null, $options = [])
 */
class DisciplinasTable extends Table
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

        $this->setTable('disciplinas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
    }
}
