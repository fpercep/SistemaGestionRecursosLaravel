<html lang="en">
<head>
    <title>@yield("title")</title>
</head>
<body>
<nav>
    <ul>
        @if(isset($rol) && $rol == "admin")
            <li><a href="{{route("home.index")}}">Dashboard</a></li>
            <li><a href="{{route("usuarios.index")}}">Gestión de usuarios</a></li>
            <li><a href="{{route("producto.index")}}">Gestión de productos</a></li>
            <li><a href="#">Estadísticas</a></li>
        @elseif(isset($rol) && $rol == "user")
            <li><a href="#">Mi perfil</a></li>
            <li><a href="#">Mis productos</a></li>
        @endif
        <li><a href="#">Cerrar Sesión</a></li>
    </ul>
</nav>
<div class="container">
    @yield("content")
</div>
</body>
</html>
