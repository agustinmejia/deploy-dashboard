<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('application_types')->delete();
        
        \DB::table('application_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laravel',
                'description' => NULL,
                'created_at' => '2023-12-14 02:05:12',
                'updated_at' => '2023-12-14 02:05:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}