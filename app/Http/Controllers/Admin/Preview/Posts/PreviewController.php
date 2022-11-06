<?php

namespace App\Http\Controllers\Admin\Preview\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Wink\WinkPost;

class PreviewController extends Controller
{
    public function __invoke(WinkPost $post): View
    {
        return view('admin.preview', compact('post'));
    }
}
