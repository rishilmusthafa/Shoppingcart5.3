<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SocialAccountService;

use Socialite;
use Session;

class SocailAuthController extends Controller
{
    //
    public function redirect()
    {
      return Socialite::driver('facebook')->redirect();
    }
    public function callback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);
        if (Session::has('oldUrl')) {
          $oldUrl = Session::get('oldUrl');
          Session::forget('oldUrl');
          return redirect()->to($oldUrl);
        }
        return redirect()->route('product.index');
    }
}
