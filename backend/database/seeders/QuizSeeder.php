<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = [
            new Quiz(
                [
                    'id' => 1,
                    'title' => 'HTML',
                    'status' => null
                ]
            ),

            new Quiz(
                [
                    'id' => 2,
                    'title' => 'CSS',
                    'status' => null
                ]
            ),

            new Quiz(
                [
                    'id' => 3,
                    'title' => 'JavaScript',
                    'status' => null
                ]
            ),

            new Quiz(
                [
                    'id' => 4,
                    'title' => 'PHP',
                    'status' => null
                ]
            ),

            new Quiz(
                [
                    'id' => 5,
                    'title' => 'Git',
                    'status' => null
                ]
            ),
        ];

        foreach ($quizzes as $quiz) {
            $quiz->save();
        }

        $html = Quiz::find(1);
        $css = Quiz::find(2);
        $js = Quiz::find(3);
        $php = Quiz::find(4);
        $git = Quiz::find(5);

        // Start HTML
        $html->addChild(
            $htmlQ1 = new Quiz(
                [
                    'title' => 'What does HTML stand for?'
                ]
            )
        );

        $html->addChild(
            $htmlQ2 = new Quiz(
                [
                    'title' => 'Choose the correct HTML element to define important text'
                ]
            )
        );

        $html->addChild(
            $htmlQ3 = new Quiz(
                [
                    'title' => 'What is the correct HTML for inserting a background image?'
                ]
            )
        );

        $htmlQ1->addChild(
            new Quiz(
                [
                    'title' => 'Hyper Text Markup Language',
                    'status' => 1
                ]
            )
        );

        $htmlQ1->addChild(
            new Quiz(
                [
                    'title' => 'Hyperlinks and Text Markup Language',
                    'status' => 0
                ]
            )
        );

        $htmlQ1->addChild(
            new Quiz(
                [
                    'title' => 'Home Tool Markup Language',
                    'status' => 0
                ]
            )
        );

        $htmlQ2->addChild(
            new Quiz(
                [
                    'title' => '<i>',
                    'status' => 0
                ]
            )
        );

        $htmlQ2->addChild(
            new Quiz(
                [
                    'title' => '<strong>',
                    'status' => 1
                ]
            )
        );

        $htmlQ2->addChild(
            new Quiz(
                [
                    'title' => '<important>',
                    'status' => 0
                ]
            )
        );

        $htmlQ3->addChild(
            new Quiz(
                [
                    'title' => '<body style="background-image:url(background.gif)">',
                    'status' => 1
                ]
            )
        );

        $htmlQ3->addChild(
            new Quiz(
                [
                    'title' => '<body bg="background.gif">',
                    'status' => 0
                ]
            )
        );

        $htmlQ3->addChild(
            new Quiz(
                [
                    'title' => '<background img="background.gif">',
                    'status' => 0
                ]
            )
        );
        // End HTML

        // Start CSS
        $css->addChild(
            $cssQ1 = new Quiz(
                [
                    'title' => 'Which property is used to change the font of an element?'
                ]
            )
        );

        $css->addChild(
            $cssQ2 = new Quiz(
                [
                    'title' => 'How do you group selectors?'
                ]
            )
        );

        $css->addChild(
            $cssQ3 = new Quiz(
                [
                    'title' => 'What is the default value of the position property?'
                ]
            )
        );

        $cssQ1->addChild(
            new Quiz(
                [
                    'title' => 'font-family',
                    'status' => 1
                ]
            )
        );

        $cssQ1->addChild(
            new Quiz(
                [
                    'title' => 'font-style',
                    'status' => 0
                ]
            )
        );

        $cssQ1->addChild(
            new Quiz(
                [
                    'title' => 'font-weight',
                    'status' => 0
                ]
            )
        );

        $cssQ2->addChild(
            new Quiz(
                [
                    'title' => 'Separate each selector with a plus sign',
                    'status' => 0
                ]
            )
        );

        $cssQ2->addChild(
            new Quiz(
                [
                    'title' => 'Separate each selector with a comma',
                    'status' => 1
                ]
            )
        );

        $cssQ2->addChild(
            new Quiz(
                [
                    'title' => 'Separate each selector with a space',
                    'status' => 0
                ]
            )
        );

        $cssQ3->addChild(
            new Quiz(
                [
                    'title' => 'relative',
                    'status' => 0
                ]
            )
        );

        $cssQ3->addChild(
            new Quiz(
                [
                    'title' => 'static',
                    'status' => 1
                ]
            )
        );

        $cssQ3->addChild(
            new Quiz(
                [
                    'title' => 'absolute',
                    'status' => 0
                ]
            )
        );
        // End CSS

        // Start JavaScript
        $js->addChild(
            $jsQ1 = new Quiz(
                [
                    'title' => 'How do you create a function in JavaScript?'
                ]
            )
        );

        $js->addChild(
            $jsQ2 = new Quiz(
                [
                    'title' => 'How do you round the number 7.25, to the nearest integer?'
                ]
            )
        );

        $js->addChild(
            $jsQ3 = new Quiz(
                [
                    'title' => 'What will the following code return: Boolean(10 > 9)'
                ]
            )
        );

        $jsQ1->addChild(
            new Quiz(
                [
                    'title' => 'function = myFunction()',
                    'status' => 0
                ]
            )
        );

        $jsQ1->addChild(
            new Quiz(
                [
                    'title' => 'function:myFunction()',
                    'status' => 0
                ]
            )
        );

        $jsQ1->addChild(
            new Quiz(
                [
                    'title' => 'function myFunction()',
                    'status' => 1
                ]
            )
        );

        $jsQ2->addChild(
            new Quiz(
                [
                    'title' => 'rnd(7.25)',
                    'status' => 0
                ]
            )
        );

        $jsQ2->addChild(
            new Quiz(
                [
                    'title' => 'Math.round(7.25)',
                    'status' => 1
                ]
            )
        );

        $jsQ2->addChild(
            new Quiz(
                [
                    'title' => 'round(7.25)',
                    'status' => 0
                ]
            )
        );

        $jsQ3->addChild(
            new Quiz(
                [
                    'title' => 'false',
                    'status' => 0
                ]
            )
        );

        $jsQ3->addChild(
            new Quiz(
                [
                    'title' => 'true',
                    'status' => 1
                ]
            )
        );

        $jsQ3->addChild(
            new Quiz(
                [
                    'title' => 'NaN',
                    'status' => 0
                ]
            )
        );
        // End JavaScript

        // Start PHP
        $php->addChild(
            $phpQ1 = new Quiz(
                [
                    'title' => 'How do you create a cookie in PHP?'
                ]
            )
        );

        $php->addChild(
            $phpQ2 = new Quiz(
                [
                    'title' => 'Which operator is used to check if two values are equal and of same data type?'
                ]
            )
        );

        $php->addChild(
            $phpQ3 = new Quiz(
                [
                    'title' => 'Which one of these variables has an illegal name?'
                ]
            )
        );

        $phpQ1->addChild(
            new Quiz(
                [
                    'title' => 'makecookie()',
                    'status' => 0
                ]
            )
        );

        $phpQ1->addChild(
            new Quiz(
                [
                    'title' => 'setcookie()',
                    'status' => 1
                ]
            )
        );

        $phpQ1->addChild(
            new Quiz(
                [
                    'title' => 'createcookie',
                    'status' => 0
                ]
            )
        );

        $phpQ2->addChild(
            new Quiz(
                [
                    'title' => '!=',
                    'status' => 0
                ]
            )
        );

        $phpQ2->addChild(
            new Quiz(
                [
                    'title' => '===',
                    'status' => 1
                ]
            )
        );

        $phpQ2->addChild(
            new Quiz(
                [
                    'title' => '==',
                    'status' => 0
                ]
            )
        );

        $phpQ3->addChild(
            new Quiz(
                [
                    'title' => '$my_Var',
                    'status' => 0
                ]
            )
        );

        $phpQ3->addChild(
            new Quiz(
                [
                    'title' => '$myVar',
                    'status' => 0
                ]
            )
        );

        $phpQ3->addChild(
            new Quiz(
                [
                    'title' => '$my-Var',
                    'status' => 1
                ]
            )
        );
        // End PHP

        // Start Git
        $git->addChild(
            $gitQ1 = new Quiz(
                [
                    'title' => 'What is the command to push the current repository to the remote origin?'
                ]
            )
        );
        
        $git->addChild(
            $gitQ2 = new Quiz(
                [
                    'title' => 'What is the command to get the current status of the Git repository?'
                ]
            )
        );

        $git->addChild(
            $gitQ3 = new Quiz(
                [
                    'title' => 'What is the command to see the available options for the commit command?'
                ]
            )
        );

        $gitQ1->addChild(
            new Quiz(
                [
                    'title' => 'git remote commit',
                    'status' => 0
                ]
            )
        );

        $gitQ1->addChild(
            new Quiz(
                [
                    'title' => 'git remote push',
                    'status' => 0
                ]
            )
        );

        $gitQ1->addChild(
            new Quiz(
                [
                    'title' => 'git push origin',
                    'status' => 1
                ]
            )
        );

        $gitQ2->addChild(
            new Quiz(
                [
                    'title' => 'git config --status',
                    'status' => 0
                ]
            )
        );

        $gitQ2->addChild(
            new Quiz(
                [
                    'title' => 'git getStatus',
                    'status' => 0
                ]
            )
        );

        $gitQ2->addChild(
            new Quiz(
                [
                    'title' => 'git status',
                    'status' => 1
                ]
            )
        );

        $gitQ3->addChild(
            new Quiz(
                [
                    'title' => 'git commit -help',
                    'status' => 1
                ]
            )
        );

        $gitQ3->addChild(
            new Quiz(
                [
                    'title' => 'gitHelp commit',
                    'status' => 0
                ]
            )
        );

        $gitQ3->addChild(
            new Quiz(
                [
                    'title' => 'git commit readme',
                    'status' => 0
                ]
            )
        );
        // End Git
    }
}
