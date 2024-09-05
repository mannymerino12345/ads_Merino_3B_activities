<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;



Route::get('/students/create', function () {
    $student = new Student();
    $student->firstname = 'Manny';
    $student->lastname = 'Merino';
    $student->email = 'mannymerino123@gmail.com';
    $student->age = 12;
    $student->save();
    return 'Student Created!';
});

Route::get('/students', function () {
    $students = Student::all();
    return $students;
});

Route::get('/students/update', function () {
    $student = Student::where('email','mannymerino123@gmail.com')->first();
    $student->email = 'manny.merino@newemail.com';
    $student->save();
    return 'Student Update!';
});

Route::get('/students', function () {
    $student = Student::where('email','manny.merino@newemail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

?>