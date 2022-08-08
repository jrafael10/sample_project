<?php

namespace popp\ch_4\batch02;

class DbGenerate
{
    public function getPDO(): \PDO
    {
       
     $create_products =<<<EOF
            CREATE TABLE products (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT,
            firstname TEXT,
            mainname TEXT,
            title TEXT,
            price float,
            numpages int,
            playlength int,
            discount int )
        EOF;
    }

}