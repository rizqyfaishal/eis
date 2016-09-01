<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Alumni;
use App\Article;
use App\Event;
use App\FutureStudent;
use App\Message;
use App\Program;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function home(){
        return view('dashboard-admin-home')->with([
            'admin' => Admin::with('user')->first()
        ]);
    }

    public function membersManager(){
        return view('dashboard-admin-member-manager')->with([
            'alumnis' => Alumni::with('user')->get(),
            'fStudents' => FutureStudent::with('user')->get(),
            'cStudents' => Student::with('user')->get()
        ]);
    }

    public function gantiPassword(){
        return view('dashboard-admin-ganti-password');
    }

    public function update(Requests\ChangePasswordRequest $request)
    {
        $user = Auth::user();
        if(!Hash::check($request->input('old_password'), $user->password)) {
            Session::flash('change_password_failed','Password lama tidak valid!');
            return redirect()->back();
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        Session::flash('change_password_success','Penggantian Password Sukses!');
        return redirect()->back();
    }

    public function editAkun(){
        $admin = Auth::user()->user;
        if(is_null($admin)){
            return redirect(action('Auth\AuthController@showLoginForm'));
        }
        return view('dashboard-admin-edit-akun')->with([
            'admin' => $admin
        ]);
    }


    public function inbox(){
        $messages = Message::all();
        return view('dashboard-admin-inbox')->with([
            'messages' => $messages
        ]);
    }

    public function messageView($id){
        $message = Message::find($id);
        if(is_null($message)){
            abort(404);
        }
        return view('dashboard-admin-message-view')->with([
            'message' => $message
        ]);
    }

    public function messageReply($id){
        $message = Message::find($id);
        if(is_null($message)){
            abort(404);
        }
        return view('dashboard-admin-reply-message')->with([
            'email' => $message->email_from
        ]);
    }

    public function messageDelete($id){
        $message = Message::find($id);
        if(is_null($message)){
            abort(404);
        }
        return view('dashboard-admin-message-delete')->with([
            'message' => $message
        ]);
    }

    public function toggleStatusRejected($id){
        $user = User::find($id);
        if(is_null($user)){
            abort(404);
        }
        $user->status = 2;
        $user->save();
        Session::flash('user_rejected',$user->fname . ' ' .$user->lname. ' (' . $user->email.') Rejected!');
        return redirect()->back();
    }

    public function toggleStatusAccepted($id){
        $user = User::find($id);
        if(is_null($user)){
            abort(404);
        }
        $user->status = 1;
        $user->save();

        Session::flash('user_accepted',$user->fname . ' ' .$user->lname. ' (' . $user->email.') Accepted!');
        return redirect()->back();
    }

    public function delete($id){
        $user = User::find($id);
        if(is_null($user)){
            abort(404);
        }
        $user->user->delete();
        $user->delete();
        Session::flash('user_deleted',$user->fname . ' ' .$user->lname. ' (' . $user->email.') Deleted!');
        return redirect()->back();
    }

    public function deleteAlumniConfirmation($id){
        $alumni = Alumni::find($id);
        if(is_null($alumni)){
            abort(404);
        }
        return view('dashboard-admin-delete-alumni-confirm')->with([
            'alumni' => $alumni
        ]);
    }

    public function deleteFStudentConfirmation($id){
        $fSTudent = FutureStudent::find($id);
        if(is_null($fSTudent)){
            abort(404);
        }
        return view('dashboard-admin-delete-f-student-confirm')->with([
            'fStudent' => $fSTudent
        ]);
    }

    public function deleteStudentConfirmation($id){
        $student = Student::find($id);
        if(is_null($student)){
            abort(404);
        }
        return view('dashboard-admin-delete-student-confirm')->with([
            'student' => $student
        ]);
    }

    public function createEvent(){
        return view('dashboard-admin-create-event');
    }

    public function createArticle(Request $request){
        $type = $request->query('type');
        return view('dashboard-admin-article-create')->with([
            'type_id' => $type
        ]);
    }

    public function createProgram(){
        return view('dashboard-admin-program-create');
    }

    public function eventManager(){
        return view('dashboard-admin-event-manager')->with([
            'events' => Event::all()
        ]);
    }

    public function articleManager(){
        return view('dashboard-admin-randi-manager')->with([
            'articles' => Article::all()
        ]);
    }

    public function programsManager(){
        return view('dashboard-admin-program-manager')->with([
            'programs' => Program::all()
        ]);
    }

    public function eventDeleteConfirm($id){
        $event = Event::find($id);
        if(is_null($event)){
            abort(404);
        }
        return view('dashboard-admin-delete-event-confirm')->with([
            'event' => $event
        ]);
    }

    public function articleDeleteConfirm($id){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        return view('dashboard-admin-article-delete-confirm')->with([
            'article' => $article
        ]);
    }


}
