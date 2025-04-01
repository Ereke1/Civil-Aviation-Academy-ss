<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Navigation;
use App\Models\LibraryNavigation;
use App\Models\NewBooks;
use App\Models\LibraryNews;
use App\Models\BookCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class BooksController extends Controller
{
    public function index()
    {
        $tree = Navigation::tree();
        $libtree = LibraryNavigation::tree();
        $newbooks = NewBooks::orderBy('id', 'desc')->take(10)->get();
        $bookcollection = BookCollection::where('active', 1)->get();
        $library_news = LibraryNews::orderBy('publish_at', 'desc')->take(6)->get();

        $locale = Config::get('app.locale');
        $whatsappLink = '';

        if ($locale === 'ru') {
            $whatsappLink = "https://wa.me/77474632480?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%3F%20%D0%AF%20%D1%81%D0%BE%D0%B1%D0%B8%D1%80%D0%B0%D0%BB%D1%81%D1%8F%20%D1%81%D0%BF%D1%80%D0%BE%D1%81%D0%B8%D1%82%D1%8C%20%D0%BE%20%D0%BA%D0%BD%D0%B8%D0%B3%D0%B5";
        } elseif ($locale === 'kk') {
            $whatsappLink = "https://wa.me/77474632480?text=%D0%A1%D3%99%D0%BB%D0%B5%D0%BC%D0%B5%D1%82%D1%81%D1%96%D0%B7%20%D0%B1%D0%B5%3F%20%D0%9A%D1%96%D1%82%D0%B0%D0%BF%20%D1%82%D1%83%D1%80%D0%B0%D0%BB%D1%8B%20%D1%81%D2%B1%D1%80%D0%B0%D0%B9%D1%8B%D0%BD%20%D0%B4%D0%B5%D0%BF%20%D0%B5%D0%B4%D1%96%D0%BC"; // Add your Kazakh WhatsApp link
        } else {
            $whatsappLink = "https://wa.me/77474632480?text=Hello%3F%20I%20was%20going%20to%20ask%20about%20the%20book"; // Add your default or English WhatsApp link
        }

        return view('front.library', compact('tree', 'libtree', 'newbooks', 'bookcollection', 'library_news', 'whatsappLink'));
    }
}
