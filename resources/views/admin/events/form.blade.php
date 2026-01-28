<div class="mb-4">
    <label class="block mb-1">Event Name</label>
    <input type="text" name="name" value="{{ old('name', $event->name ?? '') }}" class="w-full border rounded p-2"
        required>
</div>

<div class="mb-4">
    <label class="block mb-1">Description</label>

    <textarea id="summernote" name="description" class="w-full border rounded p-2">
        {{ old('description', $event->description ?? '') }}
    </textarea>
</div>

<div class="mb-4">
    <label class="block mb-1">Event Date</label>
    <input type="date" name="date" value="{{ old('date', $event->date ?? '') }}" min="{{ date('Y-m-d') }}"
        class="w-full border rounded p-2" required>
</div>

<div class="mb-4">
    <label class="block mb-1">Max Participants</label>
    <input type="number" name="max_participants" value="{{ old('max_participants', $event->max_participants ?? '') }}"
        class="w-full border rounded p-2" required>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Write event description...',
            height: 200,
            minHeight: 100,
            maxHeight: 400
        });
    });
</script>
