<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

/**
 * Usuario Form.
 */
class UsuarioForm extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema)
    {
        $schema->addField('nome', 'string');
        $schema->addField('email', 'string');
        $schema->addField('cpf', 'string');
        $schema->addField('telefone', 'integer');
        $schema->addField('estado', 'string');
        $schema->addField('cidade', 'string');
        $schema->addField('bairro', 'string');
        $schema->addField('numero', 'integer');

        return $schema;
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        $validator->scalar('nome', 'Deve ser informado um nome')
            ->maxLength('nome', 100, 'Máximo de 100 caracteres')
            ->notEmpty('nome', 'Campo nome necessário');

        $validator->email('email', 'Deve ser informado um e-mail válido')
            ->maxLength('email', 100, 'Máximo de 100 caracteres')
            ->notEmpty('email', 'Campo email necessário');

        $validator->scalar('cpf', 'Deve ser informado um cpf')
            ->maxLength('cpf', 14, 'Máximo de 14 caracteres')
            ->notEmpty('cpf', 'Campo cpf necessário');

        $validator->scalar('telefone', 'Deve ser informado um telefone')
            ->notEmpty('telefone', 'Campo telefone necessário');

        $validator->scalar('estado', 'Deve ser informado um estado')
            ->minLength('estado', 2, 'Mínimo de 2 caracteres')
            ->notEmpty('cpf', 'Campo cpf necessário');

        $validator->scalar('cidade', 'Deve ser informado uma cidade')
            ->minLength('cidade', 2, 'Mínimo de 2 caracteres')
            ->notEmpty('cidade', 'Campo cidade necessário');

        $validator->scalar('bairro', 'Deve ser informado uma bairro')
            ->minLength('bairro', 4, 'Máximo de 3 caracteres')
            ->notEmpty('bairro', 'Campo bairro necessário');

        $validator->integer('numero', 'Deve ser informado um número')
            ->notEmpty('numero', 'Campo numero necessário');

        return $validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array $data Form data.
     * @return bool
     */
    protected function _execute(array $data)
    {   
        return true;
    }
}
