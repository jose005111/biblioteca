<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('icon/css/all.css')}}">
    </head>
    <body>
       <div class="form login">
        <form action="">
            <div class="icon">
                <span class="fa fa-user-circle fa-4x"></span>
            </div>
            @csrf
            <label for="email">Seu Email:</label>
            <input type="email" name="email" placeholder="exemplo@gmail.com">
            <label for="senha">Sua Senha:</label>
            <input type="password" name="senha" placeholder="********">
            <div class="footer">
                <a href="{{route('register')}}">Não estou cadastrado</a>
                <input type="submit" value="Acessar">
                <input type="reset" value="Limpar">
            </div>
        </form>
       </div>
       <script src="{{asset('icon/js/all.js')}}"></script>
    </body>
</html>
