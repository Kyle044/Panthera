<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
class ExpertiseController extends Controller
{
    


public function store(Request $request){

    $name = $request->file('file')->getClientOriginalName();
    $fileExt = explode('.', $name);
    $fileActualExt = strtolower(end($fileExt));
    $validExt = array("PNG","png","JPG","jpg","jpeg","JPEG");

    if (in_array($fileActualExt, $validExt))
    {
    $request->file('file')->storeAs("public/upload",$name.".".$fileActualExt);
        $file = new File();
        $file->name = $name;
        $file->size = $request->file('file')->getSize();
        $file->directory =  "\\storage\\upload\\".$name.".".$fileActualExt;
        $file->save();
        $expertise = Expertise::where('title',$request->title)->first();
        if(!$expertise){
            $newExpertise = new Expertise();
            $newExpertise->title = $request->title;
            $newExpertise->description = $request->description;
            $newExpertise->File_FK = $file->id;
            $newExpertise->save();
             $expertise = Expertise::All();
            return response()->json(['msg'=>'Data is successfully added','boolean'=>true ,'data'=>$expertise]);
        }
        else{
            return response()->json(['msg'=>'Data is not added','boolean'=>false]);
        }
    }
    else
    {
    return response()->json(['msg'=>'Data is not added','boolean'=>false]);
    }
}




public function view(){
    $expertise = Expertise::All();
   return response()->json(['msg'=>'Data is successfully viewed','boolean'=>true,'data'=>$expertise ]);
}


public function update(Request $request){    
   return response()->json(['msg'=>'Data is successfully updated','boolean'=>true]);
}





public function delete(Request $request){
        $deletingExpertise = Expertise::find($request->id);
        $deletingFile = File::find($deletingExpertise->File_FK);
        unlink(public_path().$deletingFile->directory);
        $deletingExpertise->delete();
        $deletingFile->delete();
        return Redirect::to('/home');
}















}
