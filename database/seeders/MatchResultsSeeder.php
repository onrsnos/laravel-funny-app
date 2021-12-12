<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MatchResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('match_results')->insert(array(

            1=>[
                'id'=>1,
                "week"=>4,
                "homeowner"=>"Liverpool",
                "guest"=>"Chelsea",
                "homeowner_score"=>2,
                "guest_score"=>2,
            ],
            2=>[
                'id'=>2,
                "week"=>4,
                "homeowner"=>"Arsenal",
                "guest"=>"Manchester",
                "homeowner_score"=>1,
                "guest_score"=>1,
            ],
            3=>[
                'id'=>3,
                "week"=>5,
                "homeowner"=>"Manchester",
                "guest"=>"Chelsea",
                "homeowner_score"=>1,
                "guest_score"=>2,
            ],
            4=>[
                'id'=>4,
                "week"=>5,
                "homeowner"=>"Arsenal",
                "guest"=>"Liverpool",
                "homeowner_score"=>0,
                "guest_score"=>0,
            ],
            
        ));
    }
}
