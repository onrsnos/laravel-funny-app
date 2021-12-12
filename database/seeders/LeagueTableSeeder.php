<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('league')->insert(array(

            1=>[
                'id'=>1,
                "teams"=>"Chelsea",
                "PTS"=>8,
                "P"=>4,
                "W"=>2,
                "D"=>2,
                "L"=>0,
                "GD"=>9,
            ],
            2=>[
                'id'=>2,
                "teams"=>"Liverpool",
                "PTS"=>5,
                "P"=>4,
                "W"=>1,
                "D"=>2,
                "L"=>1,
                "GD"=>5,
            ],
            3=>[
                'id'=>3,
                "teams"=>"Arsenal",
                "PTS"=>4,
                "P"=>4,
                "W"=>1,
                "D"=>1,
                "L"=>2,
                "GD"=>3,
            ],
            4=>[
                'id'=>4,
                "teams"=>"Manchester",
                "PTS"=>3,
                "P"=>4,
                "W"=>0,
                "D"=>3,
                "L"=>1,
                "GD"=>4,
            ],
            
        ));

    }
}
