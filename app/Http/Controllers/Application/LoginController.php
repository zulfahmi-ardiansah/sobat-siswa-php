<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\{
    Controller,
    Utility,
    QueryUtility
};

use Illuminate\Http\Request;

use Hash, Redirect;

use App\Models\{
    AdmSchool,
    AdmTeacher,
    AdmStudent
};

class LoginController extends Controller
{
    // Property
        public $model = [];

    // Student Page   
        public function studentPage (Request $request)
        {
            if ($request->get("submit")) {
                $admSchool = AdmSchool::where("code", $request->get("code"))->first();
                if ($admSchool) {
                    $admStudent = AdmStudent::where("nis", $request->get("student_nis"))
                                            ->where("school_id", $admSchool->id)
                                            ->where("is_active", "1")
                                            ->first();
                    if ($admStudent) {
                        if (Hash::check($request->get("student_password"), $admStudent->password)) {
                            session([
                                "displayName" => $admStudent->name,
                                "loginStudentToken" => bcrypt(date("Y-m-d H:i:s")),
                                "admStudent" => $admStudent,
                                "admSchool" => $admSchool
                            ]);
                            return Redirect::to(url("/stdashboard"))->with("actionSuccess", "Selamat datang di Sobat Siswa");
                        }
                    }
                    $this->model["actionError"] = "Informasi akun yang diberikan salah !";
                } else {
                    $this->model["actionError"] = "Sekolah tidak terdaftar !";
                }
            }
            return view("login.student");
        }

    // Teacher Page   
        public function teacherPage (Request $request)
        {
            if ($request->get("submit")) {
                $admSchool = AdmSchool::where("code", $request->get("code"))->first();
                if ($admSchool) {
                    $admTeacher = AdmTeacher::where("email", $request->get("teacher_email"))
                                            ->where("school_id", $admSchool->id)
                                            ->where("is_active", "1")
                                            ->first();
                    if ($admTeacher) {
                        if (Hash::check($request->get("teacher_password"), $admTeacher->password)) {
                            session([
                                "displayName" => $admTeacher->name,
                                "loginToken" => bcrypt(date("Y-m-d H:i:s")),
                                "admTeacher" => $admTeacher,
                                "admSchool" => $admSchool
                            ]);
                            return Redirect::to(url("/dashboard"))->with("actionSuccess", "Selamat datang di Sobat Siswa");
                        }
                    }
                    $this->model["actionError"] = "Informasi akun yang diberikan salah !";
                } else {
                    $this->model["actionError"] = "Sekolah tidak terdaftar !";
                }
            }
            return view("login.teacher", $this->model);
        }

    // Logout Page
        public function logoutPage (Request $request)
        {
            session()->flush();
            return redirect(url("/login"));
        }
}