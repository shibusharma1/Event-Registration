<div class="mb-4">
    <label class="block mb-1">Event Name</label>
    <input type="text" name="name" value="{{ old('name', $event->name ?? '') }}" class="w-full border rounded p-2"
        required>
</div>

<div class="mb-4">
    <label class="block mb-1">Description</label>

    <textarea id="summernote" name="description" class="w-full border rounded p-2">
    {!! old('description', $event->description ?? '') !!}
</textarea>

</div>

<div class="mb-4">
    <label class="block mb-1">Event Date</label>
    <input type="date" name="date" value="{{ old('date', $event->date ?? '') }}" min="{{ date('Y-m-d') }}"
        class="w-full border rounded p-2" required>
</div>

<div class="mb-4">
    <label class="block mb-1">Max Participants</label>
    <input type="number" name="max_participants" value="{{ old('max_participants', $event->max_participants ?? '') }}" min="1"
        class="w-full border rounded p-2" required>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write event description...',
                height: 220,
                minHeight: 120,
                maxHeight: 400,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        });
    </script>
@endpush
