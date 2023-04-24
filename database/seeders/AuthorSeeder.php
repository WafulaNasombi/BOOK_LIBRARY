<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Author::create([
            'fname' => 'J.K. ',
            'lname'=>'Rowling',
            
        ]);    

        Author::create([
            'fname' => 'Stephen ',
            'lname'=>'King',
            
            
        ]);
        Author::create([
            'fname' => 'Michelle ',
            'lname'=>'Green',
            
        ]);    
        Author::create([
            'fname' => 'Sammy',
            'lname'=>'White',
            
        ]);    
        Author::create([
            'fname' => 'Auidrey ',
            'lname'=>'Atieno',
            
        ]);    
        Author::create([
            'fname' => 'Sandra ',
            'lname'=>'Amani',
            
        ]);    
        Author::create([
            'fname' => 'Juma ',
            'lname'=>'Jake',
            
        ]);    
        Author::create([
            'fname' => 'Samuel ',
            'lname'=>'Blu',
            
        ]);    
        Author::create([
            'fname' => 'Faith  ',
            'lname'=>'Wafula',
           
        ]);    
        Author::create([
            'fname' => 'Stacey ',
            'lname'=>'Monanka',
            
        ]);    
       
    }
}
