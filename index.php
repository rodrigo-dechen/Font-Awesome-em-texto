<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Font-Awesome</title>

    <link rel="stylesheet" href="css/gridsystem.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <style>

        body{
            font-family: monospace, normal;
        }

        input{
            font-family: FontAwesome, sans-serif;
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            width: 2em;
            height: 2em;
            font-size: 32px;
            text-align: center;
        }

    </style>

</head>
<body>

<section>

    <div class="container">

        <h1>Font-Awesome em texto</h1>

        <p><?php

            for($i = 61440; $i < 62101; $i++){
                echo "<input value=\"&#{$i};\" onclick=\"this.select()\" readonly>";
            }

        ?></p>

    </div>

</section>


</body>
</html>