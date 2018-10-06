<?php

main::start("import.csv");

class main
{

    static public function start($filename)
    {
       $records = csv::getRecords($filename);

       print_r($records);
    }
}

class csv {

    public static function getRecords($filename){

        $file = fopen($filename, "r");

        while(! feof($file)){

            $record = fgetcsv($file);
            $records[] = recordFactory::create();
        }

        fclose($file);
        return $records;
    }
}

class record{}

class recordFactory
{

    public static function create(Array $array = null)
    {


        $record = new record();

        return $record;

    }
}