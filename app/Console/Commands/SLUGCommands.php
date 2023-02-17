<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Project;
use App\Models\Type;
use App\Models\User;
use App\Notifications\Delegate\Remainders\PickupTwoDaysRemainderNotification;
use Illuminate\Console\Command;

class SLUGCommands extends Command
{
    protected $signature = 'slug:quee';

    protected $description = 'Create Slug ';

    public function handle()
    {
      $cities = City::get();
      $types = Type::get();
      $projects = Project::get();
      foreach($cities as $city){
         $city->slug = Slug($city->title);
         $city->save();
      }

      foreach($types as $type){
         $city->type = Slug($type->title);
         $type->save();
      }

      foreach($projects as $project){
         $project->slug = Slug($project->title);
         $project->save();
      }
      dd('done taha');
   }
}
