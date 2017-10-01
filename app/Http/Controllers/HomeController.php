<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\RoleRequest;
use App\Models\User; 
use Illuminate\Http\Request;
class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.index');
	}

	public function dataTable_view()
	{
		return view('front.dataTable_view');
	}

	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);

		return redirect()->back();
	}

	public function postGetData()
	{
		 // $results = DB::select('select * from test where id = ?', array(1));
		 // ChromePhp::log("arg");
		// echo json_encode(array(
  //                   'success' => true,
  //                   'error'   => false
  //               )); 
		return $user->username;
	}


}
