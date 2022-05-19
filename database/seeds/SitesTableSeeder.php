<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Site;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 40; $i++) { 
            $newSite = new Site();
            $newSite->title = ucfirst($faker->words(3, true));
            $newSite->author = $faker->name();
            $newSite->description = $faker->paragraphs(2, true);
            $newSite->image_url = "https://picsum.photos/id/$i/450/600";
            $newSite->save();
        }
    }
}
