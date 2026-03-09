@extends("layouts.master")

@section("title", "Crear Usuario")

@section("content")
    <form action="" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="">
        <input type="email" name="email" id="">
        <label for="email">Email</label>
    </form>
@endsection
