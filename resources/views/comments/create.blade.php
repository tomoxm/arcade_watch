<form action="/comments" method="POST" class="add-comment-form">
    @csrf
    <div class="field">
        <label class="label">
            be niceee youuuu dckhd
        </label>
        <div class="control">
            <textarea name="text" rows="3" class="textarea" placeholder="Textarea"></textarea>
        </div>
    </div>

    <div class="control">
        <button class="button is-warning">
            add comment
        </button>
    </div>

    <input type="hidden" name="post_id" value="{{ $post->id }}" />
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
</form>
