<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 5/26/17
 * Time: 5:03 PM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller {
    public function __invoke() {
        Auth::logout();
        return redirect('/');
    }
}