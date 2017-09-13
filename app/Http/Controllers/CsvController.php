<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Csv;
use App\Transformer\CsvTransformer;

class CsvController extends Controller
{
    protected $respose;
 
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
 
    public function index()
    {
        //Get all csv
        $csvs = Csv::paginate(15);
        // Return a collection of $csv with pagination
        return $this->response->withPaginator($csvs, new  CsvTransformer());
    }
 
    public function show($id)
    {
        //Get the csv
        $csv = Csv::find($id);
        if (!$csv) {
            return $this->response->errorNotFound('csv Not Found');
        }
        // Return a single csv
        return $this->response->withItem($csv, new  CsvTransformer());
    }
 
    public function destroy($id)
    {
        //Get the csv
        $csv = Csv::find($id);
        if (!$csv) {
            return $this->response->errorNotFound('csv Not Found');
        }
 
        if($csv->delete()) {
             return $this->response->withItem($csv, new  CsvTransformer());
        } else {
            return $this->response->errorInternalError('Could not delete a csv');
        }
 
    }
 
    public function store(Request $request)  {
        // if ($request->isMethod('put')) {
        //     //Get the csv
        //     $csv = Csv::find($request->csv_id);
        //     if (!$csv) {
        //         return $this->response->errorNotFound('csv Not Found');
        //     }
        // } else {
        //     $csv = new Csv;
        // }
 
        // $csv->id = $request->input('csv_id');
        // $csv->name = $request->input('name');
        // $csv->description = $request->input('description');
        // $csv->user_id =  1; //$request->user()->id;
 
        // if($csv->save()) {
        //     return $this->response->withItem($csv, new  CsvTransformer());
        // } else {
        //      return $this->response->errorInternalError('Could not updated/created a csv');
        // }
 
    }
}
