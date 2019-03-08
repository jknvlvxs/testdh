<?php

namespace App\Http\Controllers\Api;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API\ApiMessage;
use Exception;

class ClientController extends Controller
{   
    private $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function index(){
        $data = $this->client->all();
        if (! $data) return response()->json(['data' => ['msg' => 'This client does not exist']], 404);  
       return response()->json($this->client->paginate(5));
    }

    public function store(Request $request){
        try{
            $data = $this->getData($request);
            $this->client->create($data);
            return response()->json(['data' => ['msg' => 'Client '. $request->name .' was successfully added!']], 201);            
        } catch (Exception $exception){
            if (config('app.debug')){
                return response()->json(ApiMessage::returnMessage($exception->getMessage(), 1010, 500));
            }
            return response()->json(ApiMessage::returnMessage('An error occurred while adding client', 1010, 500));            
        }
    }

    public function show($id){
        $client = $this->client->find($id);
        if (! $client) return response()->json(['data' => ['msg' => 'This client does not exist']], 404);        
        $data = ['data' =>  $client]; 
        return response()->json($data);   
    }

    public function update($id, Request $request){
        try {
            $client = $this->client->find($id);
            if (! $client) return response()->json(['data' => ['msg' => 'This client does not exist']], 404);

            $data = $request->all();
            $client->update($data);
            return response()->json(['data' => ['msg' => 'Client '. $client->name .' was successfully updated!']], 201);    
        } catch (Exception $exception) {
            if (config('app.debug')){
                return response()->json(ApiMessage::returnMessage($exception->getMessage(), 1011, 500));
            }
            return response()->json(ApiMessage::returnMessage('An error occurred while updating client', 1011, 500));            
        }        

    }

    public function destroy($id){
        try {
            $client = $this->client->find($id);
            if (! $client) return response()->json(['data' => ['msg' => 'This client does not exist']], 404);

            $client->delete();
            return response()->json(['msg' => 'Client '. $client->name .' was successfully deleted!'], 201);    
        } catch (Exception $exception) {
            if (config('app.debug')){
                return response()->json(ApiMessage::returnMessage($exception->getMessage(), 1012, 500));
            }
            return response()->json(ApiMessage::returnMessage('An error occurred while deleting client', 1012, 500));    
        }
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'cpf' => 'required|string|min:14|max:14',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'email' => 'required|string',];

        $data = $request->validate($rules);
        return $data;
    }

}
