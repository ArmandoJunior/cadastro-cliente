<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name;

        $clients = Client::query()->where('name', 'like', "%$name%")->paginate(10);

        return view('clients.index', compact('clients', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create', ['client' => new Client()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request)
    {
        $data = $request->only(array_keys($request->rules()));
        Client::create($data);

        return redirect()->route('clients.index')->with('message','Cliente cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClientRequest $request, Client $client)
    {
        // Define o valor default para a variável que contém o nome da imagem
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->image->storeAs('public/clients', $nameFile);

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload da imagem')
                    ->withInput();

        }

        $data = $request->only(array_keys($request->rules()));
        $client->fill($data);
        $client->image = $nameFile;
        $client->save();

        return redirect()->route('clients.index')->with('message','Cliente alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('message','Cliente excluído com sucesso');
    }
}
