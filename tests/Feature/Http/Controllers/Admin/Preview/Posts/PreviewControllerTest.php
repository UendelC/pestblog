<?php

use App\Contracts\Actions\Resources\ProvidesArticleResource;
use Inertia\Testing\AssertableInertia;

it(
    'allows an author to view a preview post',
    function () {
        $author = author()->create();
        $post = post()->forAuthor($author)->create();

        $this->actingAs($author)
            ->get(route('admin.preview', $post))
            ->assertOk();
    }
);

it('cannot be accessed by a guest', function () {
    $this->get(route('admin.preview', post()->create()))
        ->assertRedirect('/wink');
});

it('return the Article vue component', function () {
    $author = author()->create();
    $post = post()->forAuthor($author)->create();

    $this->actingAs($author)
        ->get(route('admin.preview', $post))
        ->assertInertia(fn (AssertableInertia $page) => $page
            ->component('Article')
            ->has('article'));
});

it('uses the ProvidesArticleResource action', function () {
    $spy = $this->spy(ProvidesArticleResource::class);

    $author = author()->create();
    $post = post()->forAuthor($author)->create();

    $this->actingAs($author)->get(route('admin.preview', $post));

    $spy->shouldHaveReceived('handle')->once();
});
