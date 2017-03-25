<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->seed();
    }

    private function seed()
    {
        $this->programming();
    	$this->webdev();
        $this->embeddedSystems();
        $this->security();
        $this->ai();
    }


     private function programming()
    {
        $cat = new App\Category();
        $cat->name = 'Programming';
        $cat->save();
        return $cat;
    }

    private function webdev()
    {
    	$cat = new App\Category();
    	$cat->name = 'Web Development';
    	$cat->save();
    	return $cat;
    }

    private function embeddedSystems()
    {
    	$cat = new App\Category();
    	$cat->name = 'Embedded Systems';
    	$cat->save();
    	return $cat;
    }

    private function security()
    {
    	$cat = new App\Category();
    	$cat->name = 'Secuirty';
    	$cat->save();
    	return $cat;
    }

    private function ai()
    {
    	$cat = new App\Category();
    	$cat->name = 'AI';
    	$cat->save();
    	return $cat;
    }
}
