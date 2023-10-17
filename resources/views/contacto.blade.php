<title>El Tapino</title>
    <link href="{{ asset('css/ubicacion.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <table>
    @foreach($bars as $bars)
    <tr>
        <td>{{ $bar->direction }}</td>
        <td>{{ $bar->telefon }}</td>
        <td>{{ $bar->email }}</td>
    </tr>
@endforeach

        
    </table>
    @endsection

