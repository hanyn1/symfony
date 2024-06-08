<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    #[Route('/show/{name}')]
    public function showTeacher($name){


        return $this ->render('teacher/show.html.twig', ["nameTeacher" => $name]);
    }
    #[Route('/index', name: 'app_teacher_index')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_student');
    }

}
