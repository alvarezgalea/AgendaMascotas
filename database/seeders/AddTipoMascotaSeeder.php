<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class AddTipoMascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->truncateTables([
               'tipo_mascotas'
           ]);

        if(Schema::hasTable('tipo_mascotas')){
           ///$now = new DateTime('now');
            //$now = $now->format('Y-m-d H:i:s');
            DB::table('tipo_mascotas')->insert([
                  ['nombre' => "perro"],
                  ['nombre' => "gato"],
                  ['nombre' => "conejo"],
                  ['nombre' => "caballo"],
              ]);
        }
    
    }

    public function truncateTables(array $tables)
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
      foreach ($tables as $table) {
        if (Schema::hasTable($table)) {
            DB::table($table)->truncate();
         }
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }


}
