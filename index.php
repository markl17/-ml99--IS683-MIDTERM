<?php

$articles = array();
$article1 = array('title' => 'Hello World 1', 'body' => 'some body text');
$article2 = array('title' => 'Hello World 2', 'body' => 'some body text');
$articles = array($article1, $article2);

foreach ($articles as $article) {
printarticle($article);
}

function printarticle($article) {
;

        publish($article);

        function publish($article){
                foreach($article as $key => $content) {

                        switch ($key) {
                        case "title":
                        $tag = 'h1';
                        $attributes = array("class" => "title");

                        break;
                        case "body":
                        $tag = 'p';
                        $attributes = array("class" => "content");

                        break;
                        }
                        echo create_tags($tag, $attributes, $content);


                }


        }

        function create_tags($tag, $attributes, $content){
                try{
                        if(!is_array($attributes)){
                          throw new Exception('Error! Must be a Array!', 295);
                        }
                        $output = '<' . $tag;
                        foreach ($attributes as $key=>$value) {
                                if(isset($value)){
                                    $output .= ' '. $key .'="'. $value .
 '"';
                                }
                        }
                        $output .= '>' . $content .  '</' . $tag . '>';
                        return $output;
                }
                catch(Exception $e){
                        echo $e->getMessage(). $e->getCode();
                }
        }

        ?>
