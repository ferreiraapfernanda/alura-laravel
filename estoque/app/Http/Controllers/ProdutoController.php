<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller{

    public function lista() {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra($id) {
        //$id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona(){

        //pegar informações do form
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');

        //salvar no bd
        DB::insert('insert into produtos (nome, valor, quantidade, descricao) values (?,?,?,?)', 
            array($nome, $valor, $quantidade, $descricao));

        return view('produto.adicionado')->with('nome', $nome);
    }
}