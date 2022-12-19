@extends('layout.mainlayout')
@section('title','Register|Login')
@section('content')

<body>
    <div class="container">
        <h1>@yield('title', $title)</h1>
        @yield('content')
    </div>
</body>

@endsection
