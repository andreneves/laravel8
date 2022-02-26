<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Foundation\Console\ViewCacheCommand;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        // $categorias = Categoria::orderBy('nome', 'ASC')
        //             ->get();
        // dd($categorias);


        //store / salvar
        // $categoria = new Categoria;
        // $categoria->nome  = 'Monitor Ultrawide 36';
        // $categoria->valor = 3000;
        // $categoria->save();

        // dd('Salvou!');

        //show / exibir
        // $categoria = Categoria::findOrFail(4);
        // dd($categoria);

        //update / atualizar
        // $categoria = Categoria::findOrFail(4);
        // $categoria->nome  = 'Super Monitor Ultrawide 36 plus';
        // $categoria->valor = 5000;
        // $categoria->save();

        // dd('Atualizou!');

        //destroy / excluir
        $categoria = Categoria::findOrFail(4);
        $categoria->delete();

        dd('Excluiu!');

    */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('categoria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'nome.required'  => 'O campo :attribute é obrigatorio!',
            'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = new Categoria;
        $categoria->nome  = $request->nome;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Categoria criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $messages = [
            'nome.required'  => 'O campo :attribute é obrigatorio!',
            'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = Categoria::findOrFail($id);
        $categoria->nome  = $request->nome;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Categoria atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect('/categoria')->with('status', 'Categoria excluido com sucesso!');

    }
}
