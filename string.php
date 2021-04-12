<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head> 
<body class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h4 class="mb-3">String Opration</h4>
            <form id="form" method="post" >
                <div class="form-group">
                    <label for="name" id="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">     
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $str = $_POST['name'];
        $i=0;
        if($str[$i] == "a") {

            echo " 'a' found";

        } else {

            echo " 'a' Not Found";
        }
    
        $str1 = $str;
        $vCount = 0;
        $cCount = 0;
        
        $str = strtolower($str);
        for ($i = 0; $i < strlen($str); $i++) {
     
            if ( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {
            
                $vCount++;
            }
            
            else if($str[$i] >= 'a' && $str[$i] <= 'z') {
            
                $cCount++;
            }
        }

        function countDigits( $str )
        {
            return preg_match_all( "/[0-9]/", $str );
         
        }
        substr_count($str, ' ');
        echo "<br>";
        echo $str."<br>";
        echo "Number of vowels : " , $vCount."</br>";
        echo "Number of consonants : " , $cCount."</br>";
        echo "Number of spaces :" . substr_count($str," ")."</br>";
        echo "Number of digits :".countDigits($str);
    
    }
?>


 </body>
</html>