<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>Dark Mode</title> 
    
    <style>
        body{
        padding:0% 3% 10% 3%;
        text-align:center;
        margin-top: 20px; /* Add margin at the top */
        }
        h1{
        color: #32a852;
        margin-top:30px;
        }
    
        button{
            cursor: pointer;
            border: 1px solid #555;
            text-align: center;
            padding: 5px;
            margin-left: 8px; 
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }
    </style>
</head>

<body>
    <h1></h1>
    <p><i>A Computer Science Portal for Geeks</i></p>

    <h3>Light and Dark Mode</h3>
    <button onclick="myFunction()">Switch mode</button> 
    
    <script>
        function myFunction() {
            let element = document.body;
            element.classList.toggle("dark");
        }
    </script>
</body>
</html>
