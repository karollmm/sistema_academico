<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisciplinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisciplinasTable Test Case
 */
class DisciplinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DisciplinasTable
     */
    public $Disciplinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disciplinas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Disciplinas') ? [] : ['className' => DisciplinasTable::class];
        $this->Disciplinas = TableRegistry::get('Disciplinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disciplinas);

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
