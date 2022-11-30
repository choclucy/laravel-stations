<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(Request $request): View
    {
        $keyword = $request->input('keyword');
        if (empty($keyword)) $movies = Movie::all();
        if (!empty($keyword))$movies = DB::table('movies')->whereRaw("title = ?", [$keyword])->get();

        return view('movies.index', ['movies' => $movies, 'keyword' => $keyword]);
    }
}
