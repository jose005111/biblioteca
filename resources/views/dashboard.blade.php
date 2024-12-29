@extends('layout')

@section('navlink')
<nav> 
    <ul>
        <li><a class="active" href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('livro.index')}}"><i class="fa fa-book"></i> Livro</a></li>
        <li><a href="{{route('leitor.index')}}"><i class="fa fa-book-reader"></i> Leitor</a></li>
        <li><a href="{{route('emprestimo.index')}}"><i class="fa fa-hand-holding"></i> Emprestimo</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-user"></i> Perfil</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-close"></i> Sair</a></li>
    </ul>
</nav>
@endsection
@section('content')   
<main>            
    <div class="card">
            <h2>Livros</h2>
            <span><i class="fas fa-book-open fa-5x"></i></span>
            <h3>70</h3>
        </div>
        <div class="card">
            <h2>Leitores</h2>
            <span><i class="fas fa-book-reader fa-5x"></i></span>
            <h3>30</h3>
        </div>
        <div class="card">
            <h2>Emprestimos</h2>
            <span><i class="fas fa-calendar-times fa-5x"></i></span>
            <h3>15</h3>
        </div>
        <div class="card">
            <h2>Livros</h2>
            <span><i class="fas fa-book-reader fa-5x"></i></span>
            <h3>70</h3>
        </div>
        <div class="card">
            <h2>Leitores</h2>
            <span><i class="fas fa-user fa-5x"></i></span>
            <h3>30</h3>
        </div>
        <div class="card">
            <h2>Emprestimos</h2>
            <span><i class="fas fa-calendar-check fa-5x"></i></span>
            <h3>15</h3>
        </div>
    </main> 
@endsection