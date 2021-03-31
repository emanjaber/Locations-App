<?php
    $locations = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentia" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London");

    $cty = 0;
?>

<html>
    <head>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                height: auto;
                background-image: url('../img/mapp.jpg');
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
            }
            form {
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;
            }
            h1{
                font-size: 36px;
                text-shadow: 3px 3px black;
            }
            h2{
                font-size: 30px;
                text-shadow: 1px 1px black;
                margin-bottom: 15px;
            }
            select {
                background-color: #DDDDDD;
                font-size: 16px;
                width: 450px;
                padding: 10px 20px;
                border-radius: 5px;
            }
            button {
                padding: 8px 35px;
                color: white;
                background-color: #2BE006;
                border: black solid 1px;
                border-radius: 5px;
                font-size: 20px;
                font-weight: bold;
            }
            div{
                border: yellow dashed 5px;
                font-size: 40px;
                padding: 10px;
                margin: 30px;
            }
            span {
                color: black;
                text-shadow: 3px 1px #2BE006;
            }
        </style>
    </head>

    <body>
        <form method="POST" class="main" action="task2.php">

            <h1>In which country city is located?</h1>
            <h2 for="city">Please choose a city:</h2>

            <select name="city" id="city">
                <?php
                    foreach($locations as $cntry => $cty){
                        echo "<option value=\"$cty\">$cty</option>";
                    }
                ?>
            </select>
            <button type="submit" name="Go">Go</button>

            <?php
                if(isset($_POST['Go'])){
                    $cty = $_POST['city'];
                    $cntry = array_search($cty, $locations);

                    echo "<div><h5>$cty is in <span>$cntry</span></h5></div>";
                }
            ?>
            
        </form>

    </body>
</html>

