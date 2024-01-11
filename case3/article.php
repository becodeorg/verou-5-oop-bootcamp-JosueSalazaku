<?php

/** TODO:
 * 
 * Use Case #3
We are preparing three types of content for a website:

Articles
Ads
Vacancies
All of those have a title and text. When showing the title, they are modified as follows:
articles remain as they are, ads are shown in all caps and vacancies are appended with " - apply now!". The original title should still be retrievable, so no modification is permanent.

Have an array with two articles, one ad and one vacancy. Use this array to show all content types (title + text).

Bonus: an article can be marked as "breaking news". If this is the case, the title is prepended with "BREAKING: ". Extra bonus: display all the content with the appropriate html tags.
 *  */  


 require_once 'content.php';

 class Article extends Content 
 {
     public bool $isBreakingNews;
 
     public function __construct(string $title, string $text, bool $isBreakingNews)
     {
         parent::__construct($title, $text); // Add a semicolon here
         $this->isBreakingNews = $isBreakingNews;
     }
 
     public function DisplayTitle() {
         return $this->isBreakingNews ? "BREAKING: {$this->title}" : $this->title;
     }
 
     public function getText(): string
     {
         return $this->text;
     }
 }

 echo "<br>Article";