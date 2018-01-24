<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

require_once "../models/Usuario.php";
require_once "../models/CrudProdutos.php";


//Pego a ação de um formulário
$acao = $_GET['acao'];


//quando um valor da URL for igual a cadastrar faça isso
if ($acao == 'cadastrar') {
    //Recebe os valores do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $tipo_usuario = $_POST['tipo de usuario'];

    //Crie um novo produto com essas informações
    $new_usuario = new Usuario(null, "$nome", "$sobrenome", "$usuario", "$tipo_usuario");
//    Crio um CRUD para usar os métodos para o meu produto
    $crud = new CrudProdutos();
    //Salvo o Produto
    $crud->salvar($new_usuario);
    //redirecionar para a página de produtos
    header("Location: ../../adm.php");
}


//quando um valor da URL for igual a editar faça isso
if ($acao == 'editar') {
    //Recebe os valores do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $usuario = $_POST['categoria'];
    $sobrenome = $_POST['preco'];
    $tipo_usuario = $_POST['quantidade_estoque'];

    /*   algoritmo para editar */
    //Criar um CRUD para para usar os métodos para o meu Produto
    $crud = new CrudProdutos();
    //Edite o Produto.
    $crud->editarProduto($id, $nome, $usuario, $sobrenome, $tipo_usuario);

    /*redirecione para a página de produtos*/

}


//quando um valor da URL for igual a excluir faça isso
//    algoritmo para excluir

if ($acao == 'excluir') {
    //Pegue o ID do Produto que quero excluir
    $id = $_GET['id'];
    //Crio um CRUD para poder realizar os métodos
    $crud = new CrudProdutos();
    //Deleto o produto de acordo com o ID
    $crud->deletarProduto($id);
    //redirecione para a página de produtos
    header("Location: ../../adm.php");
}

//quando um valor da URL for igual a comprar faça isso

//algoritmo para diminuir o estoque
if ($acao = 'comprar') {
    //Pego o ID do Produto
    $id = $_GET['id'];
    //Pego a sua quantidade em estoque e diminuo um do estoque
    $tipo_usuario = $_GET['quantidade_estoque'] - 1;
    //Crio um CRUD do produto para realizar os métodos
    $crud = new CrudProdutos();
    //Atualizo o Estoque do Produto
    $crud->comprarProduto($id, $tipo_usuario);
    //Redireciona para o Index
    header("Location: ../../index.php");
}