<?php

use Illuminate\Database\Seeder;
use App\NiceAction;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niceAction = new NiceAction();

        $niceAction->nombre = "Facebook";
        $niceAction->nivelGusto = 5;
        $niceAction->save();

        $niceAction->nombre = "Twitter";
        $niceAction->nivelGusto = 8;
        $niceAction->save();

        $niceAction->nombre = "Instagram";
        $niceAction->nivelGusto = 9;
        $niceAction->save();
    }
}
