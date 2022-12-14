<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlayerRequest extends FormRequest
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
             'id' => 'nullable',
             'name' => 'required|string|min:2|max:191',
             'number'=> 'required|string|min:2|max:191',
             'location' => 'required|string|min:2|max:191',
             'habit' => 'required|string|min:2|max:191',
             'height' => 'required|string|min:2|max:191',
             'weight' => 'required|string|min:2|max:191', // lt = less than, lg = larger than
             'nation' => 'required|string|min:2|max:191',
             'rank' => 'required|string|min:2|max:191',
             'teamid' =>'required|string|min:2|max:191',
         ];
     }
     public function messages()
    {
        return [
            "name.required" => "球員名稱 為必填",
            "name.min" => "球員名稱 至少需2個字元",
            "tid.required" => "球隊編號 為必填",
            "location.required" => "球員位置 為必填",
            "height.required" => "球員身高 為必填",
            "height.min" => "球員身高 範圍必須介於160~250之間",
            "height.max" => "球員身高 範圍必須介於160~250之間",
            "weight.required" => "球員體重 為必填",
            "weight.min" => "球員體重 範圍必須介於250之間",
            "weight.max" => "球員體重 範圍必須介於250之間",
            "nation.required" => "球員國籍 為必填",
            "weight.lt" => "身高 必須大於 體重",
            
        ];
    }

   
}
