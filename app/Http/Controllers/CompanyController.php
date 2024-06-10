<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function update(Request $request)
    {
        $body = $request->all();
        $rules = array(
            'job_type_id' => 'required',
            'job_group_id' => 'required',
            'job_quota' => 'required',
            'job_salary_min' => 'required|integer',
            'job_salary_max' => 'required|integer',
            'job_detail' => 'required',
            'job_qualification' => 'required',
        );
        $messages = array(
            'job_type_id.required' => 'ไม่ได้เลือกข้อมูลงาน!',
            'job_group_id.required' => 'ไม่ได้เลือกข้อมูลกลุ่มงาน!',
            'job_quota.required' => 'กรุณาใส่จำนวนอัตราจ้างที่ต้องการ!',
            'job_salary_min.required' => 'กรุณาใส่จำนวนเงินเดือนต่ำสุด!',
            'job_salary_min.integer' => 'กรุณากรอกเฉาะตัวเลข!',
            'job_salary_max.required' => 'กรุณาใส่จำนวนเงินเดือนมากสุด!',
            'job_salary_max.integer' => 'กรุณากรอกเฉาะตัวเลข!',
            'job_detail.required' => 'กรุณากรอกรายละเอียดการปฏิบัติงาน!',
            'job_qualification.required' => 'กรุณากรอกรายละเอียดคุณสมบัติผู้สมัครงาน!'
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
        // $result = ThaiWorkCompanyService::updateWork($body);
        if (!$result['success']) {
            return JsonResult::errors(null, $result['message']);
        }
        return JsonResult::success(null, $result['message']);
    }
}
