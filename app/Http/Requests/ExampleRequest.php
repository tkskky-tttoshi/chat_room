<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExampleRequest extends FormRequest
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
    protected $_inputs=[];

    public function all($key=null){
        if(!empty($this->_inputs)){
            return $this->_inputs;
        }
        $this->_inputs=parent::all();
        return $this->_inputs;

    }
    
        # code...
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'max:10',
            //
        ];
    }

    public function messages()
    {
        return [
            'user_name.max'=>'文字数エラー',
        ];
    }
}
