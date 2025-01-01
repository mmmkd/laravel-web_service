<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'genre' => 'Fiction', 'published_year' => 1925],
            ['title' => '1984', 'author' => 'George Orwell', 'genre' => 'Dystopian', 'published_year' => 1949],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'genre' => 'Fiction', 'published_year' => 1960],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'genre' => 'Romance', 'published_year' => 1813],
            ['title' => 'Moby-Dick', 'author' => 'Herman Melville', 'genre' => 'Adventure', 'published_year' => 1851],
            ['title' => 'War and Peace', 'author' => 'Leo Tolstoy', 'genre' => 'Historical', 'published_year' => 1869],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'genre' => 'Fiction', 'published_year' => 1951],
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'genre' => 'Fantasy', 'published_year' => 1954],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'genre' => 'Fantasy', 'published_year' => 1937],
            ['title' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky', 'genre' => 'Psychological Fiction', 'published_year' => 1866],
            ['title' => 'The Brothers Karamazov', 'author' => 'Fyodor Dostoevsky', 'genre' => 'Philosophical Fiction', 'published_year' => 1880],
            ['title' => 'Don Quixote', 'author' => 'Miguel de Cervantes', 'genre' => 'Classic', 'published_year' => 1605],
            ['title' => 'Ulysses', 'author' => 'James Joyce', 'genre' => 'Modernist', 'published_year' => 1922],
            ['title' => 'One Hundred Years of Solitude', 'author' => 'Gabriel Garcia Marquez', 'genre' => 'Magical Realism', 'published_year' => 1967],
            ['title' => 'Brave New World', 'author' => 'Aldous Huxley', 'genre' => 'Dystopian', 'published_year' => 1932],
            ['title' => 'The Divine Comedy', 'author' => 'Dante Alighieri', 'genre' => 'Epic Poetry', 'published_year' => 1320],
            ['title' => 'Anna Karenina', 'author' => 'Leo Tolstoy', 'genre' => 'Romance', 'published_year' => 1877],
            ['title' => 'The Adventures of Huckleberry Finn', 'author' => 'Mark Twain', 'genre' => 'Adventure', 'published_year' => 1884],
            ['title' => 'The Odyssey', 'author' => 'Homer', 'genre' => 'Epic Poetry', 'published_year' => -800],
            ['title' => 'The Iliad', 'author' => 'Homer', 'genre' => 'Epic Poetry', 'published_year' => -750],
        ]);
    }
}
