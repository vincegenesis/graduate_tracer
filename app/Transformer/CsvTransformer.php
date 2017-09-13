<?php namespace App\Transformer;
 
use League\Fractal\TransformerAbstract;
 
class CsvTransformer extends TransformerAbstract {
 
    public function transform($csv) {
        return [
            'id' => $csv->id,
            'studentId' => $csv->studentId, 
			'first_name' => $csv->first_name, 
			'last_name' => $csv->last_name, 
			'middle_name' => $csv->middle_name, 
			'extension_name' => $csv->extension_name, 
			'course' => $csv->course, 
			'address' => $csv->address, 
			'contact_number' => $csv->contact_number, 
			'email' => $csv->email, 
			'batchyear' => $csv->batchyear,
			'created_at' => (String) $csv->created_at,
			'updated_at' => (String) $csv->updated_at
        ];
    }
 }