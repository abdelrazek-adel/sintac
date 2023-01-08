<!-- <?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
  public function switchLang($lang) {
    if (array_key_exists($lang, Config::get('languages'))) {
        Session::get('applocale' , $lang);
    }
    return Redirect::back();
  }
} -->
