<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $array=range(1,4);
            foreach($array as $resp){
            DB::table('tblrespuestas')->insert([            
                'cvePregunta' => '8',
                'desRespuesta' => Str::random(10),
                'correcta' => '0',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '8',
            'desRespuesta' => '2022',
            'correcta' => '1',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $array=range(1,4);
            foreach($array as $resp){
            DB::table('tblrespuestas')->insert([            
                'cvePregunta' => '9',
                'desRespuesta' => Str::random(10),
                'correcta' => '0',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '9',
            'desRespuesta' => 'Azul',
            'correcta' => '1',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $array=range(1,4);
            foreach($array as $resp){
            DB::table('tblrespuestas')->insert([            
                'cvePregunta' => '10',
                'desRespuesta' => Str::random(10),
                'correcta' => '0',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '10',
            'desRespuesta' => 'Verde',
            'correcta' => '1',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $array=range(1,4);
            foreach($array as $resp){
            DB::table('tblrespuestas')->insert([            
                'cvePregunta' => '11',
                'desRespuesta' => Str::random(10),
                'correcta' => '0',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '11',
            'desRespuesta' => 'Amarillo',
            'correcta' => '1',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);$array=range(1,4);
        foreach($array as $resp){
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '12',
            'desRespuesta' => Str::random(10),
            'correcta' => '0',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    DB::table('tblrespuestas')->insert([            
        'cvePregunta' => '12',
        'desRespuesta' => 'Azul',
        'correcta' => '1',
        'activo' => '1',
        'created_at' => now(),
        'updated_at' => now(),
    ]);$array=range(1,4);
    foreach($array as $resp){
    DB::table('tblrespuestas')->insert([            
        'cvePregunta' => '13',
        'desRespuesta' => Str::random(10),
        'correcta' => '0',
        'activo' => '1',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
DB::table('tblrespuestas')->insert([            
    'cvePregunta' => '13',
    'desRespuesta' => 'Amarillo',
    'correcta' => '1',
    'activo' => '1',
    'created_at' => now(),
    'updated_at' => now(),
]);
$array=range(1,4);
            foreach($array as $resp){
            DB::table('tblrespuestas')->insert([            
                'cvePregunta' => '14',
                'desRespuesta' => Str::random(10),
                'correcta' => '0',
                'activo' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::table('tblrespuestas')->insert([            
            'cvePregunta' => '14',
            'desRespuesta' => 'Blanca',
            'correcta' => '1',
            'activo' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    
}
