<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\post;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $teacher = Teacher::where('email', $email)->first();

        if ($teacher) {
            if (password_verify($password, $teacher->password)) {
                session()->put(["LoggedTeacher" => $teacher->id]);

                return redirect()->route("teachers.dashboard");

            } else {
                return redirect()->back()->with("fail", "Password is not correct");
            }
        } else {
            return redirect()->back()->with("fail", "Email not Found");
        }
    }

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
    public function create(Request $request)
    {
        $teacher_posts = new post;
        $teacher_posts->content = $request['content'];
        $teacher_posts->file = $request['file'];
        $teacher_posts->objects = $request['objects'];
        $teacher_posts->save();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'phone' => $request->phone,
        ]);



        $teacher->save();

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
            'success' => 'Teacher Registered successfully',
            'from' => 'signup',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function Logout()
    {
         return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}