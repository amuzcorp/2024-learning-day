<div class="container">
    <h1 class="my-4">Post List</h1>

    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
