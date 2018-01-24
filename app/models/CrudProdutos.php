<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "Conexao.php";
require_once "Usuario.php";

class CrudProdutos
{

    private $conexao;
    private $produto;

    public function __construct()
    {
        //Ao criar um objeto CrudProdutos, realize a conexão
        $this->conexao = Conexao::getConexao();
    }

    //Função para salvar o produto, como parâmetro me passe um Produto
    public function salvar(Usuario $produto)
    {
        //Após receber o Produto produto, realize a conexão e insira no banco estes dados
        $this->conexao->exec("INSERT INTO tb_produtos (nome, categoria, preco, quantidade_estoque) VALUES ('$produto->nome', '$produto->usuario', '$produto->sobrenome', '$produto->tipo_usuario')");
    }

    //Função para realizar a busca de um produto
    public function buscarProduto($nome)
    {
        //Consulte no banco de dados nome do Produto que o usuário passou através do formulário
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE nome = '$nome' ");
        //Transforme esses dados num array
        $listaArray = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //Colocar os dados num array
        $listaObjetos = [];
        //Para cada produto que eu encontrei, nomeio como produtoLista e
        foreach ($listaArray as $produtoLista) {
            // O array criado recebe os dados encontrados.
            $listaObjetos[] = new Usuario($produtoLista['id'], $produtoLista['nome'], $produtoLista['preco'], $produtoLista['categoria'], $produtoLista['quantidade_estoque']);
        }
        //Retorne os produtos encontrados
        return $listaObjetos;

    }

    //Função para pegar todos os produtos
    public function getProdutos()
    {
        //Realizo a consulta para pegar todos os dados existentes da tabela tb_produtos
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
        //Transformo esses dados num array associativo
        $listaArray = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //Crio um array para guardar estes dados
        $listaObjetos = [];
        //Para cada produto encontrado no banco e transformado em array associativo
        foreach ($listaArray as $produtoLista) {
            //Crio um novo produto com estes dados
            $listaObjetos[] = new Usuario($produtoLista['id'], $produtoLista['nome'], $produtoLista['preco'], $produtoLista['categoria'], $produtoLista['quantidade_estoque']);
        }
        //Retorne todos os produtos
        return $listaObjetos;

    }

    //Função para deletar os produtos
    public function deletarProduto($id)
    {
        //Pego o ID do produto selecionado e realizo a seguinte consulta no banco de dados que exclui o Produto.
        $consulta = $this->conexao->exec("DELETE FROM tb_produtos WHERE id = $id");

    }

    //Função para editar um Produto
    public function editarProduto($id, $nome, $categoria, $preco, $quantidade_estoque)
    {
        //Recebo os dados dos produtos a editar como parâmetros enviados por umformulário e atualizo-os no banco de dados.

        $consulta = $this->conexao->exec("UPDATE tb_produtos SET 
                                                  nome                = '$nome', 
                                                    preco               = '$preco',
                                                    categoria           = '$categoria',  
                                                    quantidade_estoque  = '$quantidade_estoque' 
                                                                            WHERE id = $id ");
    }

    //Função para comprar Produto
    public function comprarProduto($id, $quantidade_estoque)
    {
        //Através de um link recebo o ID do Produto e sua quantidade em estoque e se minha quantidade em estoque é maior que 0
        if ($quantidade_estoque >= 0) {
            //Realizo uma atualização no banco de dados na quantidade_estoque para diminuir a quantidade em estoque
            $consulta = $this->conexao->exec("UPDATE tb_produtos SET quantidade_estoque = '$quantidade_estoque' where id = '$id' ");
        }
    }

//Função para Pegar as informações de um só produto
    public function getProduto(int $id)
    {
        //Através da URL recebo o parâmetro ID para realizar a consulta no banco de dados que retorna os dados do produto requerido
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE id = '$id' ");
        //Transformo essas informações num array associativo;
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);
        //Retorno um novo produto
        return new Usuario(null, $produto['nome'], $produto['preco'], $produto['categoria'], $produto['quantidade_estoque']);

    }
}