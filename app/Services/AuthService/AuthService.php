<?php

namespace App\Services\AuthService;

use App\Helpers\JsonResult;
use App\Models\SysloginModel;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public static function login($body)
    {
        try {
            DB::beginTransaction();
            $username = trim($body['username']);
            $password = trim($body['password']);
            $user = User::where('username', $username)->first();
            if (!$user) {
                $result['message'] = 'ไม่พบชื่อผู้ใช้งานนี้ในระบบ';
                $result['message_ex'] = "";
                $result['success'] = false;
                return $result;
            }

            $passwordHash = $user->password;
            if (Hash::check($password, $passwordHash) == false) {
                $result['message'] = 'รหัสผ่านไม่ถูกต้อง';
                $result['message_ex'] = "";
                $result['success'] = false;
                return $result;
            }

            $credentials = [
                "username" => $username,
                "password" => $password
            ];

            $isAuth = Auth::attempt($credentials);
            $credential_user = Auth::user();
            if ($isAuth == false) {
                $result['message'] = 'ไม่สามารถเข้าสู่ระบบได้เนื่องจากการยืนยันตัวตนผิดพลาด';
                $result['message_ex'] = "";
                $result['success'] = false;
                return $result;
            }
            if (isset($body['remember_me']) && !empty($body['remember_me'])) {
                Cookie::queue('username', $body['username'], 8760);
                Cookie::queue('password', $body['password'], 8760);
            }
            $result['message'] = 'เข้าสู่ระบบสำเร็จ';
            $result['message_ex'] = "Successfully";
            $result['success'] = true;
            $result['data'] = [
                'sys_login' =>  $credential_user,
                // 'user_info' => $credential_user->getProfile(),
                // 'company' => $credential_user->fetchCompanyById(),
            ];

            return $result;
            // if (Auth::check()) {
            //     switch ($credential_user['user_level']) {
            //         case ($credential_user['user_level'] == 1):
            //             //!admin
            //             return redirect('/dashboard');
            //             break;
            //             //103
            //         case ($credential_user['user_level'] == 3):
            //             //!sales
            //             return redirect('https://www.bukkhon.com/');
            //             break;
            //         default:
            //             break;
            //     }
            // $data_sys_login = [
            //     'last_login' => DB::raw('getdate()'),
            // ];
            // $rsCreateUser = SysloginModel::update($credential_user->id, $data_sys_login);
            // DB::commit();

            // if ($rsCreateUser == false) {
            //     DB::rollBack();
            //     $result['message'] = 'ลงทะเบียนโปรไฟล์ผู้ใช้งานไม่สำเร็จ';
            //     $result['success'] = false;
            //     $result['result']  = $rsCreateUser;
            //     return $result;
            // }

            // return $result;
            // }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public static function changePassword($body)
    {
        try {
            $user = Auth::user();
            $currentpassword = trim($body['old_password']);
            $passwordHash = $user->password;
            if (Hash::check($currentpassword, $passwordHash) == false) {
                $result['message'] = 'รหัสผ่านไม่ถูกต้อง';
                $result['message_ex'] = "";
                $result['success'] = false;
                return $result;
            }
            $data['new_password'] = Hash::make(trim($body['new_password']));
            $rsCreate = SysloginModel::update($user->id, $data);
            if ($rsCreate == false) {;
                $rs['message'] = "เปลี่ยนรหัสผ่านไม่สำเร็จ";
                $rs['success'] = $rsCreate;
                return $rs;
            }
            $rs['message'] = "เปลี่ยนรหัสผ่านสำเร็จ";
            $rs['success'] = $rsCreate;
            return $rs;
            // $result['data'] = $user;
            // $result['message'] = 'เปลี่ยนรหัสผ่านสำเร็จ';
            // $result['message_ex'] = "Successfully";
            // $result['success'] = true;
            // return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
