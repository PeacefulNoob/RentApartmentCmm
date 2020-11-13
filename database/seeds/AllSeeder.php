<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Amenity;
use App\Covid;
use App\PropertyType;
use App\Location;


class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       
        factory(App\Property::class ,100)->create();
       factory(App\PropertyImage::class ,600)->create();


       $property = Property::find(1);	
       $roleIds = [1, 2, 3, 4,5 ,6,7];
       $property->amenities()->attach($roleIds);

       $property1 = Property::find(2);	
       $roleIds1 = [8, 9, 3, 4,1 ,6,7];
       $property1->amenities()->attach($roleIds1);
    }
}
