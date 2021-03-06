<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace ppx;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class RunResult extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return RunResult
     */
    public static function getRootAsRunResult(ByteBuffer $bb)
    {
        $obj = new RunResult();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function RunResultIdentifier()
    {
        return "PPXF";
    }

    public static function RunResultBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::RunResultIdentifier());
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return RunResult
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getResult()
    {
        $obj = new Tensor();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startRunResult(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return RunResult
     */
    public static function createRunResult(FlatBufferBuilder $builder, $result)
    {
        $builder->startObject(1);
        self::addResult($builder, $result);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addResult(FlatBufferBuilder $builder, $result)
    {
        $builder->addOffsetX(0, $result, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endRunResult(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
