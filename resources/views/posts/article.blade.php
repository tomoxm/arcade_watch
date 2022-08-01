<article class="post {{ $type }}">
    <header>
        <h2 class="title">
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h2>
    </header>

    <div class="content">
        <p>{!! nl2br($post->text) !!}</p>
    </div>

    <footer class="meta">
        <a href="/users/{{ $post->user->id }}" class="author">
            @<strong>{{ $post->user->name }}</strong>
        </a>
        <a href="/posts/{{ $post->id }}#comments" class="commments">
            {{ $post->comments->count() }}
            <strong>{{ str_plural('comment', $post->comments->count() ) }}</strong>
        </a>
    </footer>

</article>
