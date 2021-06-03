<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\User;

class AboutController extends Controller
{
    private $about;
    private $category;
    private $user;

    public function __construct(About $about, Category $category, User $user)
    {
        $this->about = $about;
        $this->category = $category;
        $this->user = $user;
    }

    public function index()
    {
        $abouts = $this->about->newQuery()->where('status', 1)->limit(2)->get();
        $categories = $this->category->newQuery()->with(['categoryChild'])->where('parent_id', 0)->get();
        $users = $this->user->newQuery()->where('status',1)->where('is_check',1)->get();
        return view('about', compact('abouts', 'categories','users'));
    }
}