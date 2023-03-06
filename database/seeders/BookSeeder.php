<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = config('comics');

        foreach( $books as $book){
            $new_book = new Book();
            $new_book -> title = $book['title'];
            $new_book -> description = $book['description'];
            $new_book -> thumb = $book['thumb'];
            $new_book -> price = $book['price'];
            $new_book -> series = $book['series'];
            $new_book -> sale_date = $book['sale_date'];
            $new_book -> type = $book['type'];
            $all_artist='';

            foreach($book['artists'] as $artist){
                $all_artist = $all_artist .','. $artist;
            }
            $new_book -> artists = $all_artist;
            
            $all_writers='';
            foreach($book['writers'] as $writer){
                $all_writers = $all_writers .','. $writer;
            }
            $new_book -> writers = $all_writers;

            $new_book -> save();
            

        }
        
    }
}
