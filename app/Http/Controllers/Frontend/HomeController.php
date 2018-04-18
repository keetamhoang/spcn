<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Functions;
use App\Model\Account;
use App\Model\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function question(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $content = $request->input('content');

        if (empty($name) or empty($phone) or empty($email) or empty($content)) {
            return response([
                'status' => 0,
                'message' => 'Bạn hãy điền đủ thông tin câu hỏi yêu cầu nhé!'
            ]);
        }

        $phone = Functions::detectPhoneNumber($phone);

        if (empty($phone)) {
            return response([
                'status' => 0,
                'message' => 'Số điện thoại của bạn không đúng định dạng!'
            ]);
        }

        try {
            $account = Account::where('phone', $phone)->first();

            if (empty($account)) {
                $account = Account::create([
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email
                ]);
            }

            Content::create([
                'account_id' => $account->id,
                'content' => $content
            ]);
        } catch (\Exception $ex) {
            return response([
                'status' => 0,
                'message' => 'Có chút lỗi xảy ra, bạn vui lòng thử lại sau!'.$ex->getMessage()
            ]);
        }

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }
}
