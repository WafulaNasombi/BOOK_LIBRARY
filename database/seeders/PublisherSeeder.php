<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()

    {
        Publisher::create([
            'name' => 'Penguin Random House',
            'address' => '123 Main St, New York, NY',
        ]);

        Publisher::create([
            'name' => 'HarperCollins',
            'address' => '456 Broadway, San Francisco, CA',
        ]);
    }
}
