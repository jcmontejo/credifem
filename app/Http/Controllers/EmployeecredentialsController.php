<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEmployeecredentialsRequest;
use App\Models\Employeecredentials;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\User;
use Toastr;

class EmployeecredentialsController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index(Request $request)
	{
		$query = Employeecredentials::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $employeecredentials = $query->get();

        return view('employeecredentials.index')
            ->with('employeecredentials', $employeecredentials)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Employeecredentials.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employeecredentials.create');
	}

	/**
	 * Store a newly created Employeecredentials in storage.
	 *
	 * @param CreateEmployeecredentialsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEmployeecredentialsRequest $request)
	{
        $input = $request->all();

		$employeecredentials = Employeecredentials::create($input);

		Flash::message('Employeecredentials saved successfully.');

		return redirect(route('employeecredentials.index'));
	}

	/**
	 * Display the specified Employeecredentials.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$employeecredentials = Employeecredentials::find($id);

		if(empty($employeecredentials))
		{
			Flash::error('Employeecredentials not found');
			return redirect(route('employeecredentials.index'));
		}

		return view('employeecredentials.show')->with('employeecredentials', $employeecredentials);
	}

	/**
	 * Show the form for editing the specified Employeecredentials.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employeecredentials = Employeecredentials::find($id);

		if(empty($employeecredentials))
		{
			Flash::error('Employeecredentials not found');
			return redirect(route('employeecredentials.index'));
		}

		return view('employeecredentials.edit')->with('employeecredentials', $employeecredentials);
	}

	/**
	 * Update the specified Employeecredentials in storage.
	 *
	 * @param  int    $id
	 * @param CreateEmployeecredentialsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEmployeecredentialsRequest $request)
	{
		/** @var Employeecredentials $employeecredentials */
		$employeecredentials = Employeecredentials::find($id);

		if(empty($employeecredentials))
		{
			Flash::error('Employeecredentials not found');
			return redirect(route('employeecredentials.index'));
		}

		$employeecredentials->fill($request->all());
		$employeecredentials->save();

		Toastr::info('Personal editado exitosamente.', 'PERSONAL', ["positionClass" => "toast-bottom-right", "progressBar" => "true"]);

		return redirect(route('employees.index'));
	}

	/**
	 * Remove the specified Employeecredentials from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Employeecredentials $employeecredentials */
		$employeecredentials = Employeecredentials::find($id);

		if(empty($employeecredentials))
		{
			Flash::error('Employeecredentials not found');
			return redirect(route('employeecredentials.index'));
		}

		$employeecredentials->delete();

		Flash::message('Employeecredentials deleted successfully.');

		return redirect(route('employeecredentials.index'));
	}
}
