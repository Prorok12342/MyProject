<?php

abstract class Article {
    public $title;
    public $text;
    
    static protected $delimetr = ': ';

    abstract public function view();
}

class SomeArticle extends Article {
    public function view(){
        echo $this->title . '<br/>';
    }
}

$a = new SomeArticle;
$a->title = 'Титульный текст обьекта "a"';

$a->view();

class NewsArticle extends Article {
    public $author;
    
    public function view(){
        echo $this->author . self::$delimetr . $this->title . '<br/>';
    }
}

$b = new NewsArticle;
$b->title = 'Титульный текст обьекта "b"';
$b->author = 'Какой то автор';

$b->view();