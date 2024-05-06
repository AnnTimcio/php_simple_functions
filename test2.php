<?php
    function count_words($input_string){
    $sum = str_word_count($input_string);
    echo "Words number is $sum, \n";
    }
    
    function capitalize_words($cap){
        $cap_words = ucwords($cap);
        echo "$cap_words <br>";
    }

    function word_len($w){
    $n = 0;
    for ($l=0; $l< strlen($w); $l++){
        $c = $w[$l];
        
        if( $c != ' '){
            echo "$c";
            $n++;
        }
        else{
            echo "$n ";
            $n=0;
        };

    }
        echo $n;}
    ?>
<form method="post">
    Enter your words: <input type="tesxt" name="words"></form>
<?php
if(isset($_POST['words'])){ 
count_words($_POST['words']);
}

if(isset($_POST['words'])){ 
    capitalize_words($_POST['words']);
    }

if(isset($_POST['words'])){ 
    word_len($_POST['words']);
     }
?>