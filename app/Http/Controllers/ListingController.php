<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    public function index(){
        return view('index',
        [
            'listings' => Listing::all()
        ]);
    }
    public function create(){
        return view('create');
    }
    
    public function store(Request $request){
        $formFields = $request->validate(
            [
                'name'=>'required',
                'tags'=>'required',
                'description' =>'required'
                
            ]
            );

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $user_id = auth()->user()->id;
        $formFields['user_id'] = $user_id;
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
        
    }
    public function listings(){
        return view('listings',[
            'listings'=>auth()->user()->listings()->get()
        ]);
    }
    public function listing(Listing $listing){
        return view('listing',[
            'listing'=> $listing
        ]);
    }
    public function delete(Listing $listing){
        $listing->delete();
        return redirect('/listings');
    }
    public function edit(Listing $listing){
        return view('edit',[
            'listing'=>$listing
        ]);
    }
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate(
            [
                'name'=>'required',
                'tags'=>'required',
                'description' =>'required'
                
            ]
            );

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $user_id = auth()->user()->id;
        $formFields['user_id'] = $user_id;
        $listing->update($formFields);
        return redirect('listings')->with('message', 'Listing created successfully!');
    }

}