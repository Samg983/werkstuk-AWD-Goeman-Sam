<?php

use \Flynsarmy\CsvSeeder\CsvSeeder;

class BlogPostCsvSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'blog_posts';
        $this->filename = base_path().'/database/seeds/csvs/csv_blogposts_seed.csv';
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

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();

        parent::run();
    }
}
