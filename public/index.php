<?php

main::start();

class main
{

    static public function start()
    {
        $file =  fopen( "import.csv",  "r");

        while(! feof($file)){

            $record = fgetcsv($file);
            print_r($record);
        }


        fclose($file);
    }
}