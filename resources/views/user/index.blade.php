@extends("layouts.master")

@section("title", "Lista de usuarios")

@section("content")
    <table border="1px black solid">
            @foreach($users as $user)
                <tr>
                    <td>{{$user["name"]}}</td>
                    <td>{{$user["email"]}}</td>
                    <td><button>Ver</button></td>
                    <td><button>Editar</button></td>
                    <td><button>Eliminar</button></td>
                </tr>
            @endforeach
    </table>
@endsection
