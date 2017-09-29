<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BedRoomsFixture
 *
 */
class BedRoomsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'room_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'bed_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'hospitalization_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['room_id', 'bed_id', 'hospitalization_id'], 'length' => []],
            'bed_rooms_bed_id_fkey' => ['type' => 'foreign', 'columns' => ['bed_id'], 'references' => ['beds', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'bed_rooms_hospitalization_id_fkey' => ['type' => 'foreign', 'columns' => ['hospitalization_id'], 'references' => ['hospitalizations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'bed_rooms_room_id_fkey' => ['type' => 'foreign', 'columns' => ['room_id'], 'references' => ['rooms', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'room_id' => 1,
            'bed_id' => 1,
            'hospitalization_id' => 1
        ],
    ];
}
