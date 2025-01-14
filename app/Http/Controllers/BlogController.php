<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index(){
        $search = request()->query('search');
        $title = "Blog Title";

        if ($search) {
            // Filter hasil berdasarkan pencarian
            $blogs = Blogs::select('id', 'tittle', 'penulis', DB::raw('LEFT(description, 200) as description'))
                ->where('tittle', 'LIKE', "%{$search}%")
                ->paginate(6);
        } else {
            // Jika tidak ada pencarian, tampilkan semua data
            $blogs = Blogs::select('id', 'tittle', 'penulis', DB::raw('LEFT(description, 200) as description'))
                ->paginate(6);
        }

        return view('blog', compact('title', 'blogs', 'search'));
    }


    public function show(string $id)
    {
        $blog = Blogs::findOrFail(id: $id);
        return view('blogdetail', ['blog' => $blog]);
    }
}
