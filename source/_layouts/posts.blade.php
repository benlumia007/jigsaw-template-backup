@extends( '_layouts.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            <article class="post">
                <header class="entry-header">
                    <div class="entry-metadata">
                        {{ date('F d, Y', $page->date) }}
                    </div>
                    <h1 class="entry-title">{{ $page->title }}</h1>
                </header>
                <figure class="post-thumbnail alignwide">
                    <img src="{{ $page->thumbnail }}" />
                </figure> 
                <div class="entry-content">
                    @yield( 'content' )
                </div>
            </article>
        </div>
    </section>
@endsection