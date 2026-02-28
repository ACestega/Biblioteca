@extend ('layouts.user')

@section ('content')
    <div class="container">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>This is your dashboard. Here you can manage your account and view your activities.</p>
    </div>
@endsection
