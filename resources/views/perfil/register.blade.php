<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>register</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('icon/css/all.css')}}">
    </head>
    <body>
       <div class="form register">
        <form action="">
            <div class="icon">
                <span class="fa fa-user-circle fa-4x"></span>
            </div>
            @csrf
            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" placeholder="Cristiano Ronaldo">
            <label for="bi">Nº do seu BI:</label>
            <input type="text" name="bi" placeholder="123456789BA000">
            <label for="genero">Gênero</label>
            <input type="radio" value="M" name="gen">Masculino
            <input type="radio" value="F" name="gen">Feminino
            <label for="email">Seu Email:</label>
            <input type="email" name="email" placeholder="exemplo@gmail.com">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" placeholder="11 de Novembro, Zona A, Benguela">
            <label for="senha">Sua Senha:</label>
            <input type="password" name="senha" placeholder="********">
            <label for="senha">Confirmar Senha:</label>
            <input type="password" name="senha" placeholder="********">
            <div class="footer">
                <a href="{{route('login')}}">Já estou cadastrado</a>
                <input type="submit" value="Acessar">
                <input type="reset" value="Limpar">
            </div>
        </form>
       </div>
       <script src="{{asset('icon/js/all.js')}}"></script>
    </body>
</html>
