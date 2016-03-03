<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColigadaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColigadaTable Test Case
 */
class ColigadaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ColigadaTable
     */
    public $Coligada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coligada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Coligada') ? [] : ['className' => 'App\Model\Table\ColigadaTable'];
        $this->Coligada = TableRegistry::get('Coligada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coligada);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
