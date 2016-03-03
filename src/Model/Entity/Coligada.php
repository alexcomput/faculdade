<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coligada Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj
 * @property string $razao_social
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 * @property string $telefone
 * @property string $obs
 */
class Coligada extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
