@extends('layout')
@section('navlink')
<nav> 
    <ul>
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('livro.index')}}"><i class="fa fa-book"></i> Livro</a></li>
        <li><a href="{{route('leitor.index')}}"><i class="fa fa-book-reader"></i> Leitor</a></li>
        <li><a class="active" href="{{route('emprestimo.index')}}"><i class="fa fa-hand-holding"></i> Emprestimo</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-user"></i> Perfil</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-close"></i> Sair</a></li>
    </ul>
</nav>
@endsection 

@section('content')
<main class="clear"><div class="top">
    <button class="btn" onclick="showf()"><i class="fa fa-plus-circle"></i> Adicionar</button>
    <form  class="clear" action="">
        @csrf
        <input class="search" type="search" placeholder="pesquisar Emprestimo">
        <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>*</th>
                <th>Leitor</th>
                <th>Livro</th>
                <th>Dt do Emprest</th>
                <th>Dt de Entrega</th>
                <th>Func</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Filipé</td>
            <td>A Guerra</td>
            <td>17/12/2024</td>
            <td>22/12/2024</td>
            <td>José Manuel</td>
            <td><a onclick="show()" href="#"><i class="fa fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fa fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>
</main>
<div id="back"></div>
<div id="modal" class="form-livro">
    <h2>Actualizar os Dados do Emprestimo</h2>
    <form class="clear" action="" method="POST">
        @csrf
        @method('PUT')
        <input id="id" type="hidden" name="id" value="1">
        <label for="nome">Leitor:</label>
        <input type="text" name="leitor" placeholder="Nome / BI / Nº Cartão">
        <label for="bi">Livro:</label>
        <input type="text" name="livro" placeholder="Código / Titulo">
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
        <label for="nome">Leitor:</label>
        <input type="text" name="leitor" placeholder="Nome / BI / Nº Cartão">
        <label for="bi">Livro:</label>
        <input type="text" name="livro" placeholder="Código / Titulo">
        <div class="footer">
            <input type="submit" value="Registrar">
            <input type="reset" value="Limpar">
            <button type="button" onclick="ffechar()">Fechar</button>
        </div>
    </form>
</section>
@endsection