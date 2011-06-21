<?php

$article = array('title' => 'my article title', 'body' => 'lorem ipsum');
printarticle($article);

	function printarticle($article) {

          foreach($article as $key => $content) {

              switch ($key) {
                 case 'title':
               	     $tag = 'h1';
                     $attributes = array( 'id'=>'myid','class'=>$key);
                     break;
                  case 'body':
                     $tag = 'p';
                     $attributes = array('id'=> 'myid','class' =>$key);
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
                                    $output .= ' '. $key .'="'. $value . '"';
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
