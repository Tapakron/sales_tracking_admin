<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResult;
use App\Services\AuthService\AuthService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        try {
            $body = $request->all();
            $regex = 'required|regex:/^[a-zA-Z_0-9.]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/';
            if (is_numeric($body['username'])) {
                $regex = 'required|regex:/^[0-9][0-9]{9}$/|digits:10';
            }

            $rules = array(
                'username' => $regex,
            );
            $messages = array(
                'username.required' => 'กรุณากรอกข้อมูลให้ครบถ้วน!',
                'username.regex' => 'รูปแบบไม่ถูกต้อง!',
                'username.digits' => 'กรุณาใส่เฉพาะตัวเลข!'
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
            $result = AuthService::login($body);
            if ($result['success'] == false) {
                return JsonResult::errors(null, $result['message']);
            }
            switch ($result['data']['sys_login']->user_level) {
                case ($result['data']['sys_login']->user_level == 1):
                    //!admin
                    return redirect('/dashboard');
                    break;
                    //103
                case ($result['data']['sys_login']->user_level == 3):
                    //!sales
                    return redirect('https://www.bukkhon.com/');
                    break;
                default:
                    break;
            }
            // return JsonResult::success($result['data'], $result['message']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    function checkLogin()
    {
        $cookie_username = Cookie::get('username');
        if (isset($cookie_username) && !empty($cookie_username)) {
            // return view('index');
            return redirect()->route('dashboard');
            // dd('hhh');
        } else {
            return redirect('/login');
            // return view('auth.sign-in');
            // dd('123');
        }
    }
}
