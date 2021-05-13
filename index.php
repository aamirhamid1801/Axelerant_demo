<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            align-items:center;
            justify-content:center;
        }
    .container{
        display:flex;
        flex-direction:column;
        gap:0.5em;
          
            align-items: flex-start;
            justify-content:center;
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }
    .option{
         display:flex;
         flex-direction:row;
         align-items:center;
        
  
    }
    .option input{
        width:20px;
        height:20px;
        margin-right:10px;
    }
        .option input[type="submit"]{
        width:300px;
        height:30px;
        background-color: #f8f9f7;
        font-weight: bold;
        transition: all 2s;
        border-radius:500px;

    }
      .option input[type="submit"]:hover{
        cursor: pointer;
        background-color: #4a3;
        font-weight: bold;
        font-style: italic;
      
      }
    </style>
</head>
<body>

    <form  class="container" action="save.php" method="post">
       
    <div class="question">
    <h3>Who is your favorite author?</h3>
     <?php
        if(isset($empty) && $empty == true)
        {
            echo "<h5 style='color:#f68;'>Please Select an Author!</h5>";
        }
        ?>
    </div>
        <div class="option">
            <input type="radio" name="option" value="1" id="">
            <p> Miguel de Cervantes</p>
        </div>
        <div class="option">
            <input type="radio" name="option" value="2" id="">
            <p> Charles Dickens</p>
        </div>
        <div class="option">
            <input type="radio" name="option" value="3" id="">
            <p> J.R.R. Tolkien</p>
        </div>
        <div class="option">
            <input type="radio" name="option" value="4" id="">
            <p> Antoine de Saint-Exuper</p>
        </div>
          <div class="option">
            <input type="submit" value="Submit">
        </div>
        </form>
   
</body>
</html>