<Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHPCalculator</title>
    <style>
        .main-container{
            background-color:green;
            width:100%;
            height: 100%;
        }
        hr{
            font-weight:bold;
        }
        .calculater-container{
            padding: 50px;
            width:50%;
            height: 60%;
            background-color:yellow;
            border-radius: 5% 30% 1%;
            box-shadow:15px 40px 30px black;
            border-top:0px;
            border-bottom:5px solid ;
            border-left:0px ;
            border-right:5px solid ;
        }
        .heading-section{
            
            width:100%;
            height: 100%;
        }
        .heading-section h1{
            font-size:50px;
            padding:10px;
            margin:5px;
            border-left:10px solid green;
        }
        .form-section{
            width:100%;
            height: 100%;
            color:black;
        }
        form input{
            padding:3px 15px;
            background-color:yellow;
            margin:-15px;
            color:blue;
            border:none;
        }
        .message-div{
            padding: 5px;
            margin:5px;
            color:gray;
        }
        .message{
            font-weight:bold;
            font-size:2rem;
        }
        .submit-div{

        }
    </style>
</head>
<body>
<div class=" main-container container-fluid d-flex justify-content-center align-items-center">
    <div class=" calculater-container p-5 container  d-flex flex-column justify-content-center align-items-center">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class=" heading-section col-6 "> <h1> <strong>Php Calculater</strong> </h1></div>
                <div class=" form-section col-6 ">
                    <form method="POST">
                        <div class="num1_div">
                        <input type="text" name="number1"  placeholder="Enter 1st number"> <hr><br></div>
                        <div class="num2-div"><input type="text" name="number2" placeholder="Enter 2nd number"><hr></div>
                        <select name="operater"  class="select">
                            <option class="option" value="add">Add</option>
                            <option class="option" value="Subtract">Subtract</option>
                            <option class="option" value="Multiply">Multiply</option>
                            <option class="option" value="divide">divide</option>
                        </select><br><br>
                        <div class="submit-div">
                            <input type="submit" name="submit" value="submit" >
                        </div>
                    </form>
                
                </div>
            </div>
            </div>
            
            <div class=" d-flex container flex-colum justify-content-center align-items-center message-div ">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    <p class="message">
                    <?php 
                   // echo "hello";
                    if(isset($_POST['submit'])){
                        $num1 = $_POST['number1'];
                        $num2 = $_POST['number2'];
                       // echo $num1 . $num2;
                        $Operation = $_POST['operater'];
                        switch ($Operation) {
                            case 'add':
                                $sum = $num1 + $num2;
                                echo "The sum is : " .$sum ;
                                break;
                            case 'Multiply':
                                $product = $num1 * $num2;
                                 echo "The product is : " . $product;
                                break;
                            case 'Subtract':
                                $difference = $num1 - $num2;
                                echo "The difference is : " .$difference;
                                break;
                            case 'divide':
                                $division = $num1 / $num2;
                                echo "The division is : " .$division;
                                break;
                            
                            default:
                                echo "There is something wrong";
                                break;
                        }
                    }
    
                ?>
                </p>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>
   
    
</body>
</html>