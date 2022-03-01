@extends( '_layouts.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            <article class="post">
                <header class="entry-header">
                    <div class="entry-metadata">
                        <span class="entry-date">{{ $page->getDate()->format( 'F d, Y' ) }}</span>
                    </div>
                    <h1 class="entry-title">{{ $page->title }}</h1>
                </header>
                @if ( $page->thumbnail )
                    <figure class="post-thumbnail alignwide">
                        <img src="{{ $page->thumbnail }}" />
                    </figure> 
                @endif
                <div class="entry-content">
                    @yield( 'content' )
                </div>
                <div class="entry-footer">
                    @foreach ($page->categories as $category )
                        <a href="/category/{{ $category }}">{{ $category }}</a>
                    @endforeach
                </div>
            </article>
        </div>
    </section>
@endsection