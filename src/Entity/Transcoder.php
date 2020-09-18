<?php


namespace App\Entity;


class Transcoder
{
    public function encode($uuid): ?string
    {
        $uuid = str_replace("-", "", $uuid);
        $uuid = pack('H*', $uuid);
        return $uuid;
    }

    public function decode($uuid): ?string
    {
        $uuid = implode(unpack('H*', $uuid));
        $uuid = strtolower($uuid);
        $uuid = preg_replace('/(\w{8})(\w{4})(\w{4})(\w{4})(\w{12})/', '$1-$2-$3-$4-$5', $uuid);
        return $uuid;
    }
}