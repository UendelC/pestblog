<?php

use App\Actions\Resources\ProvideArticleResource;
use App\Contracts\Actions\Resources\ProvidesArticleResource;

it('is the bound default in the container', function () {
    $this->assertInstanceOf(ProvideArticleResource::class, app(ProvidesArticleResource::class));
});

it(
    'formats an articles basic properties correctly',
    function (string $key, string $value) {
        $article = post()->create([$key => $value]);

        $result = app(ProvideArticleResource::class)
            ->handle($article, request());

        expect($result['data'][$key])->toBe($value);
    }
)->with([
    ['title', 'Hello World'],
    ['featured_image', '/storage/some-fake-file.png'],
    ['featured_image_caption', 'Pest in Practice'],
    ['body', 'Foo bar baz'],
    ['publish_date', now()->subDay()],
    ['author_id', fn () => author()->create()->id],
]);
