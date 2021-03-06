<?php

namespace App\Http\Controllers\Frontend;

use App\Components\Functions;
use App\Model\Account;
use App\Model\Content;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class HomeController extends Controller
{
    public function index(Request $request) {
        return view('frontend.index');
    }

    public function question(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $content = $request->input('content');

        if (empty($name) or empty($phone) or empty($content)) {
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

    public function kienthuc() {
        $posts = Post::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('frontend.kienthuc', compact('posts'));
    }

    public function detail($slug, $id) {
        $post = Post::find($id);

        if (empty($post)) {
            abort('404');
        }

        return view('frontend.detail', compact('post'));
    }
}
