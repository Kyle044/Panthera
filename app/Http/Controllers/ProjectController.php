<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //


public function store(Request $request){



    error_log($request->title);
    error_log($request->description);
    error_log($request->file);


   return response()->json(['msg'=>'Data is successfully added','boolean'=>true]);
}

public function view(Request $request){

   return response()->json(['msg'=>'Data is successfully viewed','boolean'=>true]);
    

}
public function update(Request $request){


    
   return response()->json(['msg'=>'Data is successfully updated','boolean'=>true]);
}



public function delete(Request $request){


       return response()->json(['msg'=>'Data is successfully deleted','boolean'=>true]);

}




    
}
