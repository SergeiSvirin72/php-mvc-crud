<?php

namespace App\Models;

use App\Core\DB;
use App\Core\Model;

class Article extends Model
{
    public static function get()
    {
        $query = DB::pdo()->query('SELECT * FROM articles');
        return $query->fetchAll();
    }

    public static function getById($id)
    {
        $query = DB::pdo()->prepare("SELECT * FROM articles WHERE id=:id");
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public static function create($title, $content, $date)
    {
        $query = DB::pdo()->prepare('INSERT INTO articles VALUES (NULL, :title, :content, :date)');
        $query->execute([
            'title' => $title,
            'content' => $content,
            'date' => $date,
        ]);
    }

    public static function update($id, $title, $content, $date)
    {
        $query = DB::pdo()->prepare('UPDATE articles SET title=:title, content=:content, date=:date WHERE id=:id');
        $query->execute([
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'date' => $date,
        ]);
    }

    public static function deleteById($id)
    {
        $query = DB::pdo()->prepare('DELETE FROM articles WHERE id=:id');
        $query->execute(['id' => $id]);
    }

    public static function checkTitle($title)
    {
        return strlen($title) < 3 ? 'Title should be more than 3 characters' : false;
    }

    public static function checkContent($content)
    {
        return strlen($content) < 3 ? 'Content should be more than 3 characters' : false;
    }

    public static function checkDate($date)
    {
        $date = date_parse($date);
        return !checkdate($date['month'], $date['day'], $date['year']) ? 'Invalid date' : false;
    }
}