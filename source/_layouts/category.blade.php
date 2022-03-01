@extends( '_layouts.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            <h1>{{ $page->name() }}</h1>
            {!! $page->getContent() !!}
            <ul>
        @forelse ($posts->filter->hasCategory($page->name()) as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
        </div>
    </section>
@endsection