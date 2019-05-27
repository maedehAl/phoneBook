<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view("create");
    }

    public function store(Request $request){
        Contact::create($request->all());
        return redirect("/");
    }

    public function update(Request $request,$id){
        Contact::find($id)->update($request->all());
        return redirect("/");
    }

    public function index(){
        $contacts=Contact::all();
        return view("index",compact('contacts'));
    }

    public function edit($id){
        $contact=Contact::find($id);
        return view("edit",compact('contact'));
    }

    public function destroy($id){
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
