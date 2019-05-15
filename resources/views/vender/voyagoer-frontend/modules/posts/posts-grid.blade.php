@if (count($posts) > 0)
    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="cell small-12">
            <div class="grid-x grid-padding-x">
                @foreach($posts as $post)
                    <div class="cell small-12 medium-4 large-3">
                        <div class="card">
                            <a href="{{ route('voyager-blog.blog.post', ['slug' => $post->slug]) }}">
                                <img src="{{ imageUrl($post->image, 260, 175) }}" style="width:100%">
                            </a>
                            <div class="card-section">
                                <span class="label secondary">
                                    {{ $post->created_at->format('M. jS Y') }}
                                </span>
                                <a href="{{ route('voyager-blog.blog.post', ['slug' => $post->slug]) }}">
                                    <h4>{{ $post->title }}</h4>
                                </a>
                                @if ($post->excerpt)
                                    <p>{{ str_limit($post->excerpt, 50, '&hellip;') }}</p>
                                @endif
                            </div> <!-- /.card-section -->
                        </div> <!-- /.card -->
                    </div> <!-- /.cell -->
                @endforeach
            </div> <!-- /.grid -->
        </div> <!-- /.cell -->
    </div> <!-- /.grid-container -->

    <div class="vspace-1"></div>
@else
    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="cell small-12">
            <div class="grid-x grid-padding-x">
                <p>There are currently no posts.</p>
            </div>
        </div>
    </div>

    <div class="vspace-1"></div>
@endif
