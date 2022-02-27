@extends( '_layouts.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            @foreach ( $posts as $post )
                <article class="post">
                    <header class="entry-header">
                        <div class="entry-metadata">
                            {{ date('F d, Y', $post->date) }}
                        </div>
                        <h1 class="entry-title"><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h1>
                    </header>
                    <div class="entry-content">
                        <p>
                            {!! $post->getExcerpt() !!}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection