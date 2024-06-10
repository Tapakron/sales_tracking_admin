<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResult;
use App\Services\CompanyServices\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function update(Request $request)
    {
        $body = $request->all();
        $rules = array(
            'company_name' => 'required',
            'Email' => 'required',
        );
        $messages = array(
            'company_name.required' => 'กรุณากรอกข้อมูล!',
            'Email.required' => 'กรุณากรอกข้อมูล!',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            $message = array();
            $str = "";
            foreach ($errors as $key => $items) {
                foreach ($items as $key => $item) {
                    $str = $key + 1;
                    $str .= ".";
                    $str .= $item;
                    array_push($message, $str);
                }
            }
            $str = "";
            foreach ($message as $key => $item) {
                if ($key == 0) {
                    $str =   ($key + 1) . "." . explode(".", $item)[1];
                    $str .=   "\n ";
                } else {
                    $str .=   ($key + 1) . "." . explode(".", $item)[1];
                    $str .=   "\n";
                }
            }
            $result['data'] = null;
            $result['success'] = false;
            $result['message'] = $str;
            return JsonResult::errors($result['data'], $result['message']);
        }
        $body = $request->all();
        $result = CompanyService::update($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
}
