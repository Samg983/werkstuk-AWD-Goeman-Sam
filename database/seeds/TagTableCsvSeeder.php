<?php

use \Flynsarmy\CsvSeeder\CsvSeeder;

class TagTableCsvSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'tags';
        $this->filename = base_path().'/database/seeds/csvs/csv_tags_seed.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
//trololo
        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();

        parent::run();
    }
}

