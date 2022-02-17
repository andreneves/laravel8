<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    /*

	https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller


    Dicas sobre resouces
    index - listar todos os itens
    create - exibe formulario para criacao
    store - armazena conteudo do formulário para criacao
    show - exibe um item
    edit - formulario de edicao de um item
    update - salva e edicao de um item
    destroy - exclui um item



        //index / listar
        // $produtos = Produto::orderBy('nome', 'ASC')
        //             ->get();
        // dd($produtos);


        //store / salvar
        // $produto = new Produto;
        // $produto->nome  = 'Monitor Ultrawide 36';
        // $produto->valor = 3000;
        // $produto->save();

        // dd('Salvou!');

        //show / exibir
        // $produto = Produto::findOrFail(4);
        // dd($produto);

        //update / atualizar
        // $produto = Produto::findOrFail(4);
        // $produto->nome  = 'Super Monitor Ultrawide 36 plus';
        // $produto->valor = 5000;
        // $produto->save();

        // dd('Atualizou!');

        //destroy / excluir
        $produto = Produto::findOrFail(4);
        $produto->delete();

        dd('Excluiu!');

    */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::orderBy('nome', 'ASC')->get();
        return view('produto.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
