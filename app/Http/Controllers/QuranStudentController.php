<?php

namespace App\Http\Controllers;

use App\Models\Quran;
use App\Models\QuranQuranStudent;
use App\Models\QuranStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuranStudentController extends Controller
{

    public function index()
    {
        $students = QuranStudent::all();
        $classes = Quran::all();

        return view('backend.quranstudents.index' , compact('students','classes'));
    }


    public function create()
    {
        $classes = Quran::all();
        return view('backend.quranstudents.create' , compact('classes'));
    }


    public function store(Request $request)
    {

        if ($request->class_id == null){

            $count = 0 ;
        }else{
            $count = count($request->class_id) ;
        }


        $data = json_encode($request->class_id, true);
        $now = Carbon::now()->format('Y');
        $birth = Carbon::parse($request->birthday)->format('Y');
        $age = $now - $birth;


        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('quranstudents'), $imageName);
        $student = new QuranStudent();
        $student->name = $request->name;
        $student->quran = $data;
        $student->count = $count;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->age =  $age ;
        $student->join_date = $request->join_date;
        $student->address = $request->address;
        $student->parent_phone = $request->parent_phone;
        $student->prev_hadana = $request->prev_hadana;
        $student->withdrawal = $request->withdrawal;
        $student->archive = $request->archive;
        $student->image = $imageName;




        $student->save();

        if ($request->class_id) {
            foreach ($request->input('class_id') as  $class) {

                $data = json_decode($class, true);

                $class = new QuranQuranStudent();
                $class->quran_id = $data;
                $class->quran_student_id = $student->id;
                $class->save();
            }
        }

        return redirect()->route('quranstudents.index')->with('message', "تم الاضافة بنجاح");
    }


    public function show($id)
    {
        $student = QuranStudent::find($id);
        $classes = Quran::all();
        return view('backend.quranstudents.show', compact('student', 'classes'));
    }


    public function edit($id)
    {
        $student = QuranStudent::find($id);
        $classes = Quran::all();
        $class = QuranQuranStudent::where('quran_student_id',$id)->get();
        return view('backend.quranstudents.edit', compact('student', 'classes','class'));

    }


    public function update(Request $request, $id)
    {

        if ($request->class_id == null){

            $count = 0 ;
        }else{
            $count = count($request->class_id) ;
        }

        $data = json_encode($request->class_id, true);
        $now = Carbon::now()->format('Y');
        $birth = Carbon::parse($request->birthday)->format('Y');
        $age = $now - $birth;

        $student = QuranStudent::find($id);
        if (!$request->image){
            $imageName = $student->image;
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('quranstudents'), $imageName);
        }
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->age =  $age ;
        $student->quran = $data;
        $student->count = $count;
        $student->join_date = $request->join_date;
        $student->address = $request->address;
        $student->parent_phone = $request->parent_phone;
        $student->prev_hadana = $request->prev_hadana;
        $student->withdrawal = $request->withdrawal;
        $student->archive = $request->archive;
        $student->image = $imageName;
        $student->save();

        if ($request->class_id) {
            QuranQuranStudent::where('quran_student_id',$student->id)->delete();
            foreach ($request->input('class_id') as  $class) {
                $data = json_decode($class, true);
                $class = new QuranQuranStudent();
                $class->quran_id = $data;
                $class->quran_student_id = $student->id;
                $class->save();
            }
        }

        return redirect()->route('quranstudents.index')->with('message', "تم التعديل بنجاح");
    }

    public function destroy($id)
    {
        $student = QuranStudent::find($id)->delete();
        return redirect()->route('quranstudents.index')->with('message', "تم الحذف بنجاح");

    }

    public function filter(Request $request)
    {

//        dd($request->class_id);


        if($request->class_id or $request->from or $request->to or $request->gender){
            $users = QuranStudent::Where(function ($query) use ($request) {
                if($request->from!="" and $request->to!="" ){
                    $query->where('age','>=', $request->from)
                        ->where('age','<=',$request->to);
                }
                if($request->class_id!="" ){
                    $query->whereHas('quranset',(function ($q) use ($request) {
                    $q->wherein('quran_id',$request->class_id);
                    }));
                }
                if($request->gender!="" ){
                    $query->where('gender',$request->gender);
                }
                if($request->count!="" ){
                    $query->where('count',$request->count);
                }

            })->paginate(2);
        }


        return view('backend.quranstudents.show2', compact('users'));





//        dd($users);

    }
}
