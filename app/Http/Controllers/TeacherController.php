<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Log;

class TeacherController extends Controller
{
    public function getIndex(){
    	$t = Teacher::orderBy('created_at', 'desc')->get();
    	return view('others.index', ['teachers' => $t, 'teachersFound' => count($t), 'results' => false]);
    }

    public function getTeacher($id){
    	
        $t = Teacher::find($id);
    
        $c = $t->posts()->orderBy('created_at', 'desc')->get();

    	return view('others.teacher', ['teacher' => $t, 'comments' => $c]);
    }

    public function addTeacher(){
        if(!Auth::check()){
            return redirect()->back()->with('not-logged-in', 'Debes ser administrador para acceder a esta página.');
        }
        return view('others.createTeacher');
    }

    public function saveTeacher(Request $request){
        if(!Auth::check()){
            return redirect()->back()->with('not-logged-in', 'Debes ser administrador para acceder a esta página.');
        }
        $teacher = new Teacher([
            'name' => $request->input('name'),
            'career' => $request->input('career'),
            'master' => $request->input('master'),
            'work' => $request->input('university'),
            'description' => $request->input('description')
        ]);
        $teacher->save();
        return redirect()->route('homeapp')->with('info', 'Profesor con nombre : ' . $request->input('name'). ' agregado exitosamente.');
    }

    public function deleteTeacher($id){
        if(!Auth::check()){
            return redirect()->back()->with('not-logged-in', 'Debes ser administrador para acceder a esta página.');
        }
        $t = Teacher::find($id);
        $name = $t->name;
        $t->delete();
        return redirect()->route('homeapp')->with('info', 'Profesor con nombre: ' . $name . ' eliminado exitosamente.');
    }

    public function searchTeacher(Request $request){
        $op = $request->input('option');

        if($op == 'byWork'){ //Search by work

            $teachers = Teacher::where('work', '=', $request->input('byText'))->get();

        }else if($op == 'byName'){ //Search by name

            $teachers = Teacher::where('name', '=', $request->input('byText'))->get();

        }else{

            $teachers = Teacher::where('work', '=', $request->input('byText'))->get();

        }

        return view('others.index', ['teachers' => $teachers, 'teachersFound' => count($teachers), 'results' => true]);
    }

    public function setComment(Request $request){
     
        $t = Teacher::find($request->input('id'));
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $t->posts()->save($post);
        return redirect()->back()->with('comment', 'Comentario añadido exitosamente.');
    }

    public function editTeacherStep1($id){

        if(!Auth::check()){
            return redirect()->back()->with('not-logged-in', 'Debes ser administrador para acceder a esta página.');
        }
        $t = Teacher::find($id);
        
        return view('others.teacher-edit', ['id' => $t->id, 'teacher' => $t]);
    }

    public function editTeacher(Request $request, $id){
        if(!Auth::check()){
            return redirect()->back()->with('not-logged-in', 'Debes ser administrador para acceder a esta página.');
        }
        $t = Teacher::find($id);
        $t->name = $request->input('name');
        $t->career = $request->input('career');
        $t->master = $request->input('master');
        $t->work = $request->input('work');
        $t->description = $request->input('description');
        $t->save();
        return redirect()->back()->with('edited', 'El profesor: "' . $request->input('name') . '" ha sido editado exitosamente.');
    }
    

}
