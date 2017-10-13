<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurmasFixture
 *
 */
class TurmasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'semestre' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_professor' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_disciplina' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_turma_professor' => ['type' => 'index', 'columns' => ['id_professor'], 'length' => []],
            'fk_turma_disciplinas' => ['type' => 'index', 'columns' => ['id_disciplina'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_turma_disciplinas' => ['type' => 'foreign', 'columns' => ['id_disciplina'], 'references' => ['disciplinas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_turma_professor' => ['type' => 'foreign', 'columns' => ['id_professor'], 'references' => ['professor', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'semestre' => 'Lorem ipsum dolor sit amet',
            'id_professor' => 1,
            'id_disciplina' => 1
        ],
    ];
}
