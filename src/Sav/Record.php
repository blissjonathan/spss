<?php

namespace SPSS\Sav;

use SPSS\Buffer;

abstract class Record implements RecordInterface
{
    /**
     * Record constructor.
     *
     * @param array $data
     */
    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * @param Buffer $buffer
     * @param array $data
     * @return static
     */
    public static function fill(Buffer $buffer, $data = [])
    {
        $record = new static($data);
        $record->read($buffer);

        return $record;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [];
    }
}
