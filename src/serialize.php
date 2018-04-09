<?php
namespace Serialize;

class Serialize
{

    public static function serialize(array $data)
    {
        return serialize($data);
    }

    public static function unserialize($data)
    {
        return unserialize($data);
    }
}
