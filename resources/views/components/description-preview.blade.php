@props(['text', 'limit' => 100])

<div class="description-preview-wrapper">
    <div class="description-preview" data-full-text='@json($text)' data-limit="{{ $limit }}"></div>

    <button class="description-toggle text-blue-600 mt-2 cursor-pointer">
        Show More
    </button>
</div>
