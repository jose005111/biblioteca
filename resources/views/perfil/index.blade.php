@extends('layout')
@section('navlink')
<nav> 
    <ul>
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route('livro.index')}}"><i class="fa fa-book"></i> Livro</a></li>
        <li><a href="{{route('leitor.index')}}"><i class="fa fa-book-reader"></i> Leitor</a></li>
        <li><a href="{{route('emprestimo.index')}}"><i class="fa fa-hand-holding"></i> Emprestimo</a></li>
        <li><a class="active" href="{{route('perfil.index')}}"><i class="fa fa-user"></i> Perfil</a></li>
        <li><a href="{{route('perfil.index')}}"><i class="fa fa-close"></i> Sair</a></li>
    </ul>
</nav>
@endsection

@section('content')
        <main class="clear">
            <section class="content">
                <section class="form-livro">
                    <form  class="clear" action="">
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
                        <label for="senha">Sua Senha:</label>
                        <input type="password" name="senha" placeholder="********">
                        <label for="senha">Confirmar Senha:</label>
                        <input type="password" name="senha" placeholder="********">
                        <div class="footer">
                            <input type="submit" value="Actualizar">
                            <input type="reset" value="Limpar">
                        </div>
                    </form>
                </section>
                <section class="table">
                    
                <section class="form-contact">
                    <form  class="clear" action="">
                        @csrf
                       <label for="nome">Tipo de Contacto:</label>
                       <select name="tipo" id="tipo">
                           <option value="Unitel" selected>Unitel</option>
                           <option value="Africell">Africell</option>
                           <option value="Facebook">Facebook</option>
                           <option value="Whatsapp">Whatsapp</option>
                           <option value="Linkedin">Linkedin</option>
                       </select>
                       <label for="bi">Descrição:</label>
                       <input type="text" name="desc" placeholder="927372806">
                       <div class="footer">
                           <input type="submit" value="Adicionar">
                           <input type="reset" value="Limpar">
                       </div>
                   </form>
                </section>
                    <table>
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>Tipo de Contacto</th>
                                <th>Descrição</th>
                                <th>Editar</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td>1</td>
                            <td>Unitel</td>
                            <td>927372806</td>
                            <td><a onclick="show()" href="#"><i class="fa fa-pencil-alt"></i></a></td>
                            <td><a href="#"><i class="fa fa-trash"></i></a></td>
                           </tr>
                        </tbody>
                    </table>
        </main>
    <div id="back"></div>
    <div id="modal" class="form-livro">
        <h2>Actualizar os Dados de Contacto</h2>
        <form  class="clear" action="">
            @csrf
            <label for="nome">Tipo de Contacto:</label>
            <select name="tipo" id="tipo">
                <option value="Unitel" selected>Unitel</option>
                <option value="Africell">Africell</option>
                <option value="Facebook">Facebook</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="Linkedin">Linkedin</option>
            </select>
            <label for="bi">Descrição:</label>
            <input type="text" name="desc" placeholder="927372806">
            <div class="footer">
                <input type="submit" value="Adicionar">
                <input type="reset" value="Limpar">
                <button type="button" onclick="fechar()">Fechar</button>
            </div>
        </form>
    </div>
@endsection