<?php

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!isset($_COOKIE['student_verified']) || $_COOKIE['student_verified'] !== 'yes') {
            redirect('/student/verify');
            return;
        }

        return $next();
    }
}