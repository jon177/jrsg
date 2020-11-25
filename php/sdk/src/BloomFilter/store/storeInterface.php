<?php

namespace jrsp\BloomFilter\store;


interface storeInterface
{
    /**
     * 添加比特位
     * @param array hashArray
     */
    public function add($hashArray);

    /**
     * Check to see if the string exists
     * @param string hashArray
     * @return boolean
     */
    public function get($hashArray);
}