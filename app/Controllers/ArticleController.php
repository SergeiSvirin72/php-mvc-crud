<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $this->view->render(
            'news/index.php',
            'layouts/app.php',
            Article::get()
        );
    }

    public function show($id)
    {
        $this->view->render(
            'news/show.php',
            'layouts/app.php',
            Article::getById($id)
        );
    }

    public function create()
    {
        $errors = [];
        if ($_POST['submit']) {
            if ($title = Article::checkTitle($_POST['title'])) $errors['title'] = $title;
            if ($content = Article::checkTitle($_POST['content'])) $errors['content'] = $content;
            if ($date = Article::checkTitle($_POST['date'])) $errors['date'] = $date;

            if (empty($errors)) {
                Article::create($_POST['title'], $_POST['content'], $_POST['date']);
                header('Location: http://localhost:4000/articles');
            }
        }

        $this->view->render(
            'news/create.php',
            'layouts/app.php',
            ['errors' => $errors, 'payload' => $_POST],
        );
    }

    public function edit($id)
    {
        $errors = [];
        if ($_POST['submit']) {
            if ($title = Article::checkTitle($_POST['title'])) $errors['title'] = $title;
            if ($content = Article::checkTitle($_POST['content'])) $errors['content'] = $content;
            if ($date = Article::checkTitle($_POST['date'])) $errors['date'] = $date;

            if (empty($errors)) {
                Article::update($id, $_POST['title'], $_POST['content'], $_POST['date']);
                header("Location: http://localhost:4000/articles/$id");
            }
        }

        $this->view->render(
            'news/edit.php',
            'layouts/app.php',
            ['errors' => $errors, 'payload' => Article::getById($id)],
        );
    }

    public function destroy($id)
    {
        Article::deleteById($id);
        header('Location: http://localhost:4000/articles');
    }
}