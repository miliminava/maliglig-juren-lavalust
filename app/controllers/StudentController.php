<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentController
 * 
 * Automatically generated via CLI.
 */
class StudentController extends Controller {
    public function index()
    {
        $this->call->view('student/index');
    }

    public function profile()
    {
        $student=[
            'student_id' => 'MCC2024-00226',
            'name' => 'Juren E. Maliglig',
            'course' => 'Bachelor of Science in Information Technology',
            'year' => '3rd Year',
            'section' => 'F5',
            'email' => 'jurenmaliglig@gmail.com'
        ];
        
        $this->call->view('student/StudentInformation', $student);
    }

    public function verify_page()
    {
        echo '
        <form method="POST" action="/student/verify">
            <h2>Are you a student?</h2>
            <label>
                <input type="radio" name="is_student" value="yes" required> Yes
            </label><br>
            <label>
                <input type="radio" name="is_student" value="no" required> No
            </label><br><br>
            <button type="submit">Submit</button>
        </form>
        ';
    }

    public function verify()
    {
        $answer = $_POST['is_student'] ?? '';

        if ($answer === 'yes') {
            setcookie('student_verified', 'yes', time() + 3600, '/');
            redirect('/student/profile');
            return;
        }

        setcookie('student_verified', 'no', time() + 3600, '/');
        redirect('/student');
    }
}