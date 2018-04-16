<?php

function photo_blog_preprocess_page(&$variables){

  $body_class = "full-width";
  $column_class = "";
  $page = $variables["page"];
if(!empty($page["left_column"]) && !empty($page["right_column"])){
  $column_class = "one-fourth";
  $body_class = "half";
}

  else if (!empty($page["left_column"])|| !empty($page["right_column"])){
    $column_class = "one-fourth";
    $body_class = "three-fourths";
  }
  $variables["photo_blog"]["body_class"] = $body_class;
  $variables["photo_blog"]["column_class"] = $column_class;

}
