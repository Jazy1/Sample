<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\posting;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        $student->save();

        $name = $request->name;
        $email = $request->email;

        // SMTP protocol mail sending
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Mailer = "smtp";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "albert.08774573829920@gmail.com";
        $mail->Password = "qnqxqmckwsvdjfgg";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom($email, "$name");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "Acoount Verification";
        $mail->Body   = "Your Name: $name  <br> Your Email Has Been Verified On Our Systems <br> $email <br> <strong> THANK YOU! </strong>";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully sent to user';
        } else {
            echo 'something went wrong';
        }

        return redirect()->route('public.home')->with([
            'success' => 'Student Registered successfully',
            'from' => 'signup',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function createpost(Request $request)
    {
        $student_posting = new posting;
        $student_posting->Student_content = $request['Student_content'];
        $student_posting->save();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}