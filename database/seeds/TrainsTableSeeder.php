<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');
        foreach ($trains as $train) {
            $newtrain = new Train();
            $newtrain->fill($train);
            $newtrain->save();
        }
    }
}
