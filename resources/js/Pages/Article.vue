<template>
    <Head :title="article.title"></Head>
    <Container class="mt-8" />
        <AuthorCentered :author="article.author" />

        <Heading class="mt-6">{{ article.title }}</Heading>
        <div class="mt-1 flex space-x-1 text-sm text-gray-500">
            <time :datetime="article.publish_date.iso">
                {{ article.publish_date.diff }}
            </time>
            <main aria-hidden="true">•</main>
            <span>
                {{ Math.ceil(article.read_time) }} minute read
            </span>
        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
