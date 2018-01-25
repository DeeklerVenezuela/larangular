<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class PermitsController extends Controller
{

    /**
     * Display a listing of the permits.
     *
     * @return Illuminate\View\View
     */

    public function index()
    {
        return view('permits.index');
    }

    public function getAll()
    {
        $permits = Permit::paginate(50);
        return $permits;
    }

    /**
     * Show the form for creating a new permit.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('permits.create');
    }

    /**
     * Store a new permit in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Permit::create($data);

            return redirect()->route('permits.permit.index')
                             ->with('success_message', 'Se han registrado las vacaciones!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Ha ocurrido un error al intentar guardar!']);
        }
    }

    /**
     * Display the specified permit.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $permit = Permit::findOrFail($id);

        return view('permits.show', compact('permit'));
    }

    /**
     * Show the form for editing the specified permit.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $permit = Permit::findOrFail($id);
        

        return view('permits.edit', compact('permit'));
    }

    /**
     * Update the specified permit in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $permit = Permit::findOrFail($id);
            $permit->update($data);

            return redirect()->route('permits.permit.index')
                             ->with('success_message', 'Permit was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified permit from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $permit = Permit::findOrFail($id);
            $permit->delete();

            return redirect()->route('permits.permit.index')
                             ->with('success_message', 'Permit was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'cnt' => 'required|numeric|min:-2147483648|max:2147483647',
            'fch' => 'required|string|min:1',
            'ini' => 'required|string|min:1',
            'fin' => 'required|string|min:1',
            'obs' => 'required|numeric|min:-2147483648|max:2147483647',
            'sta' => 'required|numeric|min:-2147483648|max:2147483647',
            'tpo' => 'required|numeric|min:-2147483648|max:2147483647',
            'fecadi1' => 'required|string|min:1',
            'textadi1' => 'required|string|min:1|max:191',
            'textadi2' => 'required|string|min:1|max:191',
            'textadi3' => 'required|string|min:1|max:191',
            'textadi4' => 'required|string|min:1|max:191',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
