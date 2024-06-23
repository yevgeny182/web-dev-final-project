<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <h1>
        <?php
            //Hello world code here
        echo "<p> hello world! </p>";
        ?>
    </h1>
    <h1>
       Largest number - 21, 1 & 100
    </h1>
    <p>
        <?php
            //Largest number code here
        $a=21;
        $b=1;
        $c=100;

        if($a >= $b && $a >= $c){
            echo "largest number is $a";
        }
        else if($b >= $a && $b >= $c){
            echo "largest number is $b";
        }
        else{
            echo "<h3> larget number is $c </h3>";
        }

        ?>
    </P>
    <h1>
       Swapping numbers - a=26, b=99
    </h1>
    <p>
        <?php
            //Swapping numberes code here
        $temp;
        $a = 26;
        $b = 99;

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<h3> swapped numbers a=$a, b=$b </h3>";


        ?>
    </P>
    <h1>
       Fibonacci - 20
    </h1>
    <p>
        <?php
            //Fibonacci code here
        $a = 0;
        $b = 1;
        $temp = 0;
        echo "<h3> the sequence in 20 times:<br>";
        
        while($temp<=19){
            $c =  $a + $b;

            echo "$c, ";
            
            $a = $b;
            $b = $c;
            $temp = $temp+1;
        }

        

        ?>
    </P>
    <h1>
       * Right Triangle - 5 Levels
    </h1>
    <p>
        <?php
            //Right Triangle code here
        for($a=0; $a<1; $a++){
            echo "*<br>";
        }
        for($a=0; $a<2; $a++){
            echo "*";
        }
        echo "<br>";
        for($a=0; $a<3; $a++){
            echo "*";
        }
        echo "<br>";
         for($a=0; $a<4; $a++){
            echo "*";
        }
        echo "<br>";
         for($a=0; $a<5; $a++){
            echo "*";
        }
        
        ?>
    </P>
    <h1>FLAMES</h1>
    <form id="flamesForm" method="get" onsubmit="flamesSubmit(event)">
        <input type="text" name="name1" id="name1" placeholder="Name 1" required="required">
        <input type="text" name="name2" id="name2" placeholder="Name 2" required="required">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"/>
    </form>
    <h2 id="result"></h2>
    <script>
        var xhttp = new XMLHttpRequest();

        function flamesSubmit(e){
            var url = "../src/php/flames.php";
            var data = $("#flamesForm").serialize();
              This creates a URL Parameter list that will look like this: 
                name1=value_of_name1&name2=value_of_name2


            var urlData = url+"?"+data;
              To pass data to your php in GET, concatenate url + "?" + data to create a url request like this: 
                ../src/php/flames.php?name1=value_of_name1&name2=value_of_name2
            xhttp.open("GET", urlData, true);
            xhttp.send();
             To pass data to your php in POST, use the following instead:
                xhttp.open("POST", url, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
                xhttp.send(data);

                
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var res = JSON.parse(this.responseText);
                    if(res["status"] == 200){
                        $("#result").text(res["data"]);
                    }else{
                        alert(res["data"]);
                    }
                }
            };
            e.preventDefault();
        }
    </script>
</body>
</html>