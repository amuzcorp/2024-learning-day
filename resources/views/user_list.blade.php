@foreach($users as $user)

    <a href="{{ route('posts.list',[
            'userId' => $user->getKey()
        ]) }}">
        {{ $user->getAttribute('name') }}
    </a>
    <br />

@endforeach
