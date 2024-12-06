<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function index()
    {
        $planos = Plano::all();
        return view('admin.planos.index', compact('planos'));
    }

    public function cadastrar()
    {
        return view('admin.planos.cadastrar');
    }

    public function salvarCadastro(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric'
        ]);

        $plano = new Plano();
        $plano->titulo = $request->titulo;
        $plano->descricao = $request->descricao;
        $plano->valor = $request->valor;
        /* Sobre as 3 linhas à ciam o lado esquerdo é referente ao Banco de Dados, já o lado direito está relacionado com o formulário(cadastrar.blade.php | O que está escrito no "name" do form)*/
        $plano->save();

        return redirect()->route('planos.index')->with('mensagem', 'Cadastro realizado com sucesso!');
    }

    public function visualizar($id)
    {
        $plano = Plano::findOrFail($id);
        return view('admin.planos.visualizar', compact('plano'));
    }

    public function editar($id)
    {
        $plano = Plano::findOrFail($id);
        return view('admin.planos.editar', compact('plano'));
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric'
        ]);

        $plano = Plano::findOrFail($id);
        $plano->titulo = $request->titulo;
        $plano->descricao = $request->descricao;
        $plano->valor = $request->valor;   
        /* Sobre as 3 linhas à cima o lado esquerdo é referente ao Banco de Dados, já o lado direito está relacionado com o formulário(cadastrar.blade.php | O que está escrito no "name" do form)*/        
        $plano->save();

        return redirect()->route('planos.index')->with('mensagem', 'Cadastro atualizado com sucesso!');
    }

    public function excluir()
    {
        return view('admin.planos.');
    }
}
