@extends('layout')
@section('navlink')
<nav> 
    <ul>
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('livro.index')}}"><i class="fa fa-book"></i> Livro</a></li>
        <li><a class="active" href="{{route('leitor.index')}}"><i class="fa fa-book-reader"></i> Leitor</a></li>
        <li><a href="{{route('emprestimo.index')}}"><i class="fa fa-hand-holding"></i> Emprestimo</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-user"></i> Perfil</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-close"></i> Sair</a></li>
    </ul>
</nav>
@endsection

@section('content')
<main class="clear">
    <div class="top">
        <button class="btn" onclick="showf()"><i class="fa fa-plus-circle"></i> Adicionar</button>
        <form  class="clear" action="">
            @csrf
            <input class="search" type="search" placeholder="pesquisar leitor">
            <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>*</th>
                <th>Nome</th>
                <th>Nº do BI</th>
                <th>Gênero</th>
                <th>Nº do Cartão</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>José Manuel</td>
            <td>008387902BA041</td>
            <td>Masculino</td>
            <td>00123</td>
            <td><a onclick="show()" href="#"><i class="fa fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fa fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>
</main>
    <div id="back"></div>
    <div id="modal" class="form-livro">
        <h2>Actualizar os Dados do Leitor 2 </h2>
        <form class="clear" action="" method="POST">
            @csrf
            @method('PUT')
            <input id="id_leitor" type="hidden" name="id_leitor" value="1">
            <label for="nome">Nome:</label>
            <input id="nome" type="text" name="nome" >
            <label for="bi">BI:</label>
            <input id="bi" type="text" name="bi" placeholder="123456789BA000">
            <label for="genero">Gênero</label>
            <input id=gen type="radio" value="M" name="gen">Masculino
            <input id=gen type="radio" value="F" name="gen">Feminino
            <label for="bi">Nº do Cartão:</label>
            <input id="cartao" type="text" name="cartao" placeholder="123456789BA000">
            <div class="footer">
                <input type="submit" value="Actualizar">
                <input type="reset" value="Limpar">
                <button type="button" onclick="fechar()">Fechar</button>
            </div>
        </form>
    </div>
    <section id="modal-logo" class="form-livro">
        <form class="clear" action="">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Cristiano Ronaldo">
            <label for="bi">BI:</label>
            <input type="text" name="bi" placeholder="123456789BA000">
            <label for="genero">Gênero</label>
            <input type="radio" value="M" name="gen">Masculino
            <input type="radio" value="F" name="gen">Feminino
            <label for="bi">Nº do Cartão:</label>
            <input type="text" name="cartao" placeholder="123456789BA000">
            <div class="footer">
                <input type="submit" value="Registrar">
                <input type="reset" value="Limpar">
                <button type="button" onclick="ffechar()">Fechar</button>
            </div>
        </form> 
    </section>
@endsection