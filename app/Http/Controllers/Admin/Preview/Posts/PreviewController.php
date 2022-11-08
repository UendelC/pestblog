<?php

namespace App\Http\Controllers\Admin\Preview\Posts;

use App\Contracts\Actions\Resources\ProvidesArticleResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Wink\WinkPost;

class PreviewController extends Controller
{
    public function __invoke(
        Request $request,
        WinkPost $article,
        ProvidesArticleResource $articleResourceProvider
    ): Response {
        return inertia('Article', [
            'article' => $articleResourceProvider->handle($article, $request),
        ]);
    }
}
