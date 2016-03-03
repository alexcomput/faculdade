<?php
namespace App\Model\Table;

use App\Model\Entity\Coligada;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coligada Model
 *
 */
class ColigadaTable extends Table
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

        $this->table('coligada');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('cnpj');

        $validator
            ->allowEmpty('razao_social');

        $validator
            ->allowEmpty('cidade');

        $validator
            ->allowEmpty('uf');

        $validator
            ->allowEmpty('cep');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('obs');

        return $validator;
    }
}
