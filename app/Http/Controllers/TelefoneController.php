<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TelefoneController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index() {

	}

	public function adicionar($id)
	{

		$cliente = \App\Cliente::find($id);

		return view('telefone.adicionar',compact('cliente'));

	}

	public function salvar(\App\Http\Requests\TelefoneRequest $request, $id) 
	{
		$telefone = new \App\Telefone;
		$telefone->titulo = $request->input('titulo');
		$telefone->telefone = $request->input('telefone');

		\App\Cliente::find($id)->addTelefone($telefone);

        \Session::flash('flash_message',[
                'msg'=>'Telefone adicionado com sucesso',
                'class'=>'alert-success',
           ]);
        return redirect()->route('cliente.detalhe',$id);
	}

    public function editar($id) 
    {
        $telefone = \App\Telefone::find($id);
        if (!$telefone){
            \Session::flash('flash_message',[
                    'msg'=>'Telefone não localizado.',
                    'class'=>'alert-danger',
                ]);
            return redirect()->route('cliente.detalhe',$telefone->cliente->id);
        }

        return view('telefone.editar', compact('telefone'));
    }

    public function atualizar(\App\Http\Requests\TelefoneRequest $request, $id) 
    {
    	$telefone = \App\Telefone::find($id);
        $telefone->update($request->all());
        \Session::flash('flash_message',[
                'msg'=>'Telefone Atualizado com Sucesso',
                'class'=>'alert-success',
            ]);
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);
    }

    public function deletar($id)
    {
        $telefone = \App\Telefone::find($id);

        // apagando o registro
        $telefone->delete();
        \Session::flash('flash_message',[
                'msg'=>'Telefone deletado com Sucesso',
                'class'=>'alert-success',
            ]);
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);
    }


}
