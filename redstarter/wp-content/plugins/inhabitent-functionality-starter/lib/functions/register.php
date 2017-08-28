<?php

add_action('init', 'new_cpt_section');

function new_cpt_section(){
    $customTaxonomy = array(
      "Adventures" => "",
      "Products" => array("Activity"));

      foreach ($customTaxonomy as $key => $value){ // $key : Products & Movies ; $value : $Color & $Movies
        $args1 = init_custom_post_types($key); // creating a new variable args1 and calling the function with its arguments
        register_post_type(strtolower($key), $args1, 0); // Dashboard displays Products and Movies as Custom Post types 

        if($value==""){

        }
        elseif(is_array($value)){ // checking if my $value is an array
          foreach ($value as $array => $x) { // if my $value is an array then create an instance $array and assign it's value with an instance variable $x
            //echo $x;
            $tax_args = init_custom_taxonomies($x); // creating a new variable $tax_args and call the function init_custom_taxonomies and retrieve the value of an array.
            register_taxonomy(strtolower($x), array(strtolower($key)), $tax_args ); // register_taxonomy $x : taxonomy, array($key): No. Custom of Custom Post types, $tax_args is getting the args from the function.
          }
        }
        else{
          //echo $key;
          $tax_args = init_custom_taxonomies($value);
          register_taxonomy(strtolower($value), array(strtolower($key)), $tax_args );
        }
      } 
    } // end new_cpt_section

?>