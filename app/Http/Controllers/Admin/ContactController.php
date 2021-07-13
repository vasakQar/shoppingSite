<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsCreateRequest;
use App\Models\Admin\ContactInfo\ContacUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contacts = ContacUs::all();
        return view('admin/contact/contact_us',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param ContactUsCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactUsCreateRequest $request)
    {
        ContacUs::create($request->all());
        return back()->with('message', 'Contacts has been added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $contactUs = ContacUs::findOrFail($id);
        $contactUs->delete();
        return redirect()->back()->with('delete','Contact deleted successfully');
    }
}
