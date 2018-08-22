<?php

namespace App\Http\Requests;


class CarColorRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'car_color_name_add'       => 'required|min:2',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'car_color_name_add.min' => '名称必须至少两个字符',
        ];
    }
}
