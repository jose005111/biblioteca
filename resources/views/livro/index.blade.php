@extends('layout')

@section('navlink')
<nav> 
    <ul>
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a class="active" href="{{route('livro.index')}}"><i class="fa fa-book"></i> Livro</a></li>
        <li><a href="{{route('leitor.index')}}"><i class="fa fa-book-reader"></i> Leitor</a></li>
        <li><a href="{{route('emprestimo.index')}}"><i class="fa fa-hand-holding"></i> Emprestimo</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-user"></i> Perfil</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-close"></i> Sair</a></li>
    </ul>
</nav>
@endsection
@section('content')
<main class="clear">
    <div>
        <div class="top">
            <button class="btn" onclick="showf()"><i class="fa fa-plus-circle"></i> Adicionar</button>
            <form  class="clear" action="">
                @csrf
                <input class="search" type="search" placeholder="pesquisar livro">
                <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>*</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Nº Pag</th>
                        <th>Status</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>HTML</td>
                        <td>Jonas Brunt</td>
                        <td>Casa do Código</td>
                        <td>225</td>
                        <td>Disponivel</td>
                        <td><a onclick="show()" href="#"><i class="fa fa-pencil-alt"></i></a></td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <div id="back"></div>
        <div id="modal" class="form-livro">
            <h2>Actualizar os Dados do Livro 2</h2>
            <form class="clear" action="" method="POST">
                @csrf
                @method('PUT')
                <label for="Titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="A vida em 1 Ano" required>
                <label for="Autor">Autor:</label>
                <input type="text" name="autor" placeholder="Jordan Jeremy" required>
                <label for="editora">Editora:</label>
                <input type="text" name="editora" placeholder="exemplo@gmail.com" required> 
                <label for="numero">Nº de Páginas</label>
                <input type="number" name="pag" placeholder="255" required min="10">
                <div class="footer">
                    <input type="submit" value="Actualizar">
                    <input type="reset" value="Limpar">
                    <button type="button" onclick="fechar()">Fechar</button>
                </div>
            </form>
        </div>
        <section id="modal-logo" class="form-livro">           
            <form  class="clear" action="">
                @csrf
                <label for="Titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="A vida em 1 Ano" required>
                <label for="Autor">Autor:</label>
                <input type="text" name="autor" placeholder="Jordan Jeremy" required>
                <label for="editora">Editora:</label>
                <input type="text" name="editora" placeholder="exemplo@gmail.com" required> 
                <label for="numero">Nº de Páginas</label>
                <input type="number" name="pag" placeholder="255" required min="10">
                <div class="footer">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                    <button type="button" onclick="ffechar()">Fechar</button>
                </div>
            </form>
        </section>
@endsection