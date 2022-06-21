<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;


class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'En que año Estamos?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color es el cielo?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color es el pasto?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color es el sol?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color es el agua?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color son los girasoles ?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('tblpreguntas')->insert([            
                'desPregunta' => 'De que color es la luna?',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);    
    }
}
