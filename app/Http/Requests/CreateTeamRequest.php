<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
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
        return [
            'id'   => 'nullable',
            'team' => 'required|string|min:2|max:100',
            'history' => 'required|string|min:2|max:100',
            'leader' => 'required|string|min:2|max:100',
            'coach' => 'required|string|min:2|max:100',
            'home' => 'required|string|min:2|max:100'
       ];
   }

   public function messages()
    {
         return [
             "name.required" => "球隊名稱 為必填",
             "name.min" => "球隊名稱 至少需2個字元",
             "coach.required" => "教練 為必填",
             "coach.min" => "教練 至少需2個字元",
             "leader.required" => "領隊 為必填",
             "leader.min" => "領隊 至少需2個字元",
             "home.required" => "主場 為必填",
             "home.min" => "主場 至少需2個字元",
        ];
    }
 }