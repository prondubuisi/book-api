<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;
use Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::latest()->get();
        return response()->json($book,200);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        

        $validator = $this->validateInput($request);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $attributes = $request->all();

        $imageName = './images/'. time(). '.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $attributes['image'] = $imageName;
                
        $book = Book::create($attributes);

        return response()->json($book, 201);   
            
       
    }

    public function validateInput(Request $request) 
    {

        return  Validator::make($request->all(),
            [
            
               'user_id' => 'required|exists:users,id',
               'title' => 'required|min:1|max:80',
               'author' => 'required|min:1', 
               'description' =>'required|min:10',
               'price' => 'required|numeric',
               'image' => 'required',
               
            ]);

    }

   
}
