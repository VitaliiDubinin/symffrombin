<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;




 class ShowController extends AbstractController{
    // #[Route('/questions/q1', name:'1_questions_page')]
    // #[Route('/questions/{slug}', name:'1_questions_page')]
    #[Route('/questions/{slug}')]
    public function questions(string $slug=null): Response{


        $answers = ['answer1', 'answer2', 'answer3']; 

    // public function questions(): Response{

if ($slug==null){
$slug='awesome job';

}
        
        $title=u(str_replace('-','-----',$slug))->title(true);
        // return new Response ('string funct testing '.$title);

return $this->render('question/show.html_2.twig',['question'=>$title,],);
$this->render('question/show.html_2.twig',['answers'=>$answers]);




    }

    #[Route('/answers/{slug}')]
    public function answers(string $slug=null): Response{


        $answers = ['answer1', 'answer2', 'answer3']; 
if ($slug==null){
$slug=0;
}
        
        // $title=u(str_replace('-','-----',$slug))->title(true);

        // return new Response ('string funct testing '.$title);

return $this->render('question/show.html_2.twig',['question'=>$answers[$slug]]);






    // exit(" from /questions/q1 test without new Response");

    // return new Response (
    //     '<html><body><div> That is %%%%%% page for Symfony task</div><div>What a bewitching controller we have conjured!</div> 
    //     <body><html>'
    // );
    
    }
    

    #[Route("/quest/{slug}",name:"secondpage")]
public function secondpage($slug): Response
{
//$slug='Future page to show a question';
return new Response(
sprintf('%s',$slug)
);
}

       
    }
 
 ?>