@foreach ($users as $user)
    <h2> {{ $user['name'] }} </h2>
    <p> {{ $user['age'] }} </p>
    @if ($user['age'] < 18)
        <p>User can't drive</p>
    @endif
    <hr>
@endforeach

@copyright {{ date('Y') }}
