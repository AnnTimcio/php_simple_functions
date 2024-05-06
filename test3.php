<?php

    function save_words($input_string){
        $con = mysqli_connect("localhost", "root", "", "baza");
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
          }
          echo "Connected successfully";
    $words_arrayt = explode(' ', $input_string);
    foreach ($words_arrayt as $word)
    {
        echo $word;
        $in = "INSERT INTO words (word) VALUES ('$word')";
    if (mysqli_query($con, $in)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $in . "<br>" . mysqli_error($con);
      }
    }
    $sel = "SELECT word FROM words";
    $res = mysqli_query($con, $sel);
    $i=0;
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
          echo ++$i.") ".$row["word"]."<br>";}
        }
    mysqli_close($con);
    }
    
    ?>
<form method="post">
    Enter your words: <input type="tesxt" name="words"></form>
<?php
if(isset($_POST['words'])){ 
save_words($_POST['words']);
}
?>