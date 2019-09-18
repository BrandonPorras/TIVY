<?php

namespace TIVY\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class TivyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $fecha_actual = date("d-m-Y");       
        $fecha= date("Y-m-d",strtotime($fecha_actual));
     
        return [
            'tittle' => 'required',
             'img' => 'image|nullable|max:1999',
             'description' => 'required',
             'date' => 'required','date',"after:$fecha",
             'startTime'=> 'required',
             'duration' => 'required',
             'place'=> 'required',
             'capacity'=>'required|min:0'
        ];
    }
}
