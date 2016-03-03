<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColigadaFixture
 *
 */
class ColigadaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'coligada';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cnpj' => ['type' => 'string', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'razao_social' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'uf' => ['type' => 'string', 'length' => 2, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 11, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'telefone' => ['type' => 'string', 'length' => 14, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'obs' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'cnpj' => 'Lorem ipsum dolor ',
            'razao_social' => 'Lorem ipsum dolor sit amet',
            'cidade' => 'Lorem ipsum dolor sit amet',
            'uf' => '',
            'cep' => 'Lorem ips',
            'telefone' => 'Lorem ipsum ',
            'obs' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
