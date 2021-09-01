<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Addition;
use App\Models\Offense;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDetailController extends Controller
{
    public $data;
    public $data1;
    public $temp;

    public function index()
    {
        return view('pages.student-detail.index', [
            'studDetail' => StudentDetail::class
        ]);
    }

    public function edit($id)
    {
//        dd($id);
//        $point = Student::whereId($id)->pluck('point');
//        dd($point[0]);

        $offense_option = Offense::all();
        $addition_option = Addition::all();
        $details = StudentDetail::whereStudentId($id)->get();

        return view('pages.student-detail.edit', compact('id','details', 'offense_option', 'addition_option'));
    }

//    public function show($id)
//    {
//        //
//    }

    public function update(Request $request, $id) {
        $this->data["offense_id"] = $request->logo;
        $this->data["addition_id"] = $request->logi;
        $this->data["student_id"] = $id;
        $this->data["editor"] = Auth::id();
//        dd($this->data["addition_id"]);

        $point = Student::whereId($id)->pluck('point');

        if (isset($this->data["offense_id"])) {
            $o_id = $this->data["offense_id"];
            $o_point = Offense::whereId($o_id)->pluck('minus_point');
//            $p_point = NULL;
        }

        if (isset($this->data["addition_id"])) {
            $p_id = $this->data["addition_id"];
            $p_point = Addition::whereId($p_id)->pluck('plus_point');
//            $o_point = NULL;
        }

//        dd($o_point);


//        dd($p_point);
//        dd($p_point[0]);
//        if ($o_point==NULL) {
//            $result1 = $point[0] + $p_point[0];
////            dd($this->temp);
//        } else if ($p_point==NULL) {
//            $result2 = $point[0] - $o_point[0];
////            $this->temp = $o_point * -1;
//        }
        if (isset($o_point)) {
            $result = $point[0] - $o_point[0];
        }
        if (isset($p_point)) {
            if (isset($result)) {
                $result = $result + $p_point[0];
            } else {
                $result = $point[0] + $p_point[0];
            }
        }
//        dd($result);

//        $result = ($point[0] + $p_point[0]) - $o_point[0];
//        $result = (($p_point[0]==NULL)? $point[0] - $o_point[0] : ($o_point[0]==NULL))? $point[0] + $p_point[0] : 0;

//        dd($result);
        $this->data["current_point"] = $result;
        StudentDetail::create($this->data);

        $this->data1["point"] = $result;
        Student::whereId($id)->update($this->data1);

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
//        dd("aaaa");
        StudentDetail::where('id', $id)->delete();
        return back()->with('destroy', 'Data Berhasil Dihapus');
    }

}
