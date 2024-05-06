<?php
    function count_words($input_string){
    $sum = str_word_count($input_string);
    echo "Words number is $sum";
    }?>
<form method="post">
    Enter your words: <input type="tesxt" name="words"></form>
<?php
if(isset($_POST['words'])){ 
count_words($_POST['words']);
}

?>