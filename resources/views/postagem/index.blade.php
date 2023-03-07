<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    Postagens:<br><br>
    <a href="{{url('postagem/create')}}">CRIAR</a><br><br>
    <table>
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Visualizar</th>
        </tr>
        @foreach ($postagens as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->titulo }}</td>
            <td>Visualizar <a href="{{ 
                url('postagem/' . $value->id) 
            }}">Visualizar</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>