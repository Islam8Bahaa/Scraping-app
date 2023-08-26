<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ScrapingController extends Controller
{
    //
    public function scrape(Request $request)
    {
        ini_set('max_execution_time' , '1000');
        $client = new Client();
        $url = 'https://www.kotobati.com/section/%D8%B1%D9%88%D8%A7%D9%8A%D8%A7%D8%AA';
        $crawler = $client->request('GET', $url);
        $books = [];
        dd($crawler);
        $crawler->filter('.book-teaser')->each(function ($node) use (&$books) {

            // dd($node);
            $title = $node->filter('.title')->text();
            $author = $node->filter('.author-label')->text();
            // $pagesCount = $node->filter('.numero')->text();
            // $image = $node->filter('.lazyloaded')->attr('data-src');
            // $size = $node->filter('.numero')->text();
            // $pdfUrl = $node->filter('.read')->attr('href');
            $books[]=[
                'title' => $title,
                'author' => $author,
                // 'pages_count' => $pagesCount,
                // 'image' => $image,
                // 'size' => $size,
                // 'pdf_url' => $pdfUrl,
            ];
        });
        dd($books);
        // print_r($books);
        foreach ($books as $bookData) {
            Book::create($bookData);
        }
        return response()->json([
            'message' => 'Scraping operation completed.',
            'data' => $books, // Include the scraped books data
        ]);
    }

    public function index()  {
        return view('index');
    }

}
