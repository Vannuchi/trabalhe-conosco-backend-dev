<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitorvannuchi
 * Date: 23/12/2018
 * Time: 08:13
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class SearchController extends Controller
{

    public function index(){


        if (Auth::check()) {
            $data = array(
                "api_token" => $api_token = Auth::User()->api_token,
            );

            return view('search', $data);
        }else{
            return redirect('/');
        }
    }
}
