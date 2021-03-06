<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null, $options = [])
 */
class EnderecosTable extends Table
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

        $this->setTable('enderecos');
        $this->setDisplayField('idendereco');
        $this->setPrimaryKey('idendereco');
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
            ->integer('idendereco')
            ->allowEmpty('idendereco', 'create');

        $validator
            ->scalar('rua')
            ->maxLength('rua', 50)
            ->requirePresence('rua', 'create')
            ->notEmpty('rua');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 30)
            ->allowEmpty('complemento');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 50)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 50)
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->integer('id_usuario')
            ->allowEmpty('id_usuario');

        return $validator;
    }
}
