<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Amenity;
use App\Covid;
use App\PropertyType;
use App\Location;
class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Covid::create([
            'title' => 'Covid Primjer 1',
            'subtitle' => 'Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid ',
            'description' => 'Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. ',
            'user_id' => '1',

            ]);
          
       Amenity::create(['title' => 'gym' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'garage' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'indoor jacuzzi' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'sauna' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'playground for children' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'caffe bar' , 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'swimming pool', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'hot tub', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'paid parking', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'free parking on premisses', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'free parking on street', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'freezer', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'microwave', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'esspreso machine', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'dish washer', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'bathtub', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'bbq grill ', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'balcony ', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'fire extinguisher  ', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'smoke alarm', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'first aid kit', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'beach front ', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'lake access', 'photoUrl' => 'amenity.jpg']);
       Amenity::create(['title' => 'waterfront', 'photoUrl' => 'amenity.jpg']);


        PropertyType::create(['title' => 'Hotel ', 'photoUrl' => 'amenity.jpg']);
        PropertyType::create(['title' => 'Entire Apartment ', 'photoUrl' => 'amenity.jpg']);
        PropertyType::create(['title' => 'Room ', 'photoUrl' => 'amenity.jpg']);
        PropertyType::create(['title' => 'Villa ', 'photoUrl' => 'amenity.jpg']);
        PropertyType::create(['title' => 'Commercial Property ', 'photoUrl' => 'amenity.jpg']);
        PropertyType::create(['title' => 'Townhouse ', 'photoUrl' => 'amenity.jpg']);

        Location::create([
            'city' => 'Kotor',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Budva',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Tivat',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Herceg Novi',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Cetinje',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Podgorica',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Risan',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Ulcinj',
            'zip' => '85330'
           ]);
           Location::create([
            'city' => 'Bar',
            'zip' => '85330'
           ]);
           
        factory(App\Faq::class ,10)->create();
        factory(App\Blog::class ,10)->create();
    }
}
