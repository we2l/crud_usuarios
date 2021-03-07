<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $idusuario
 * @property string $nome
 * @property string $cpf
 * @property \Cake\I18n\FrozenDate $data_nascimento
 * @property string $email
 * @property string $telefone
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'idusuario' => true,
        'nome' => true,
        'cpf' => true,
        'data_nascimento' => true,
        'email' => true,
        'telefone' => true
    ];
}
