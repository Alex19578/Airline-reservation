<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reserved data</title>
</head>
<body>
    <h1>Your ticket details are</h1>
    <div class="absolute">
        <?php

            if(isset($_POST['from']) && isset($_POST['to'])){
                $flighttype=$_POST['type'];
                $class=$_POST['class'];
                $from=$_POST['from'];
                $dest=$_POST["to"];
                $dep=$_POST['departing-date'];
                $ret=$_POST['returning-date'];
                $child=$_POST['children'];
                $adult=$_POST['adult'];
                $cost=$child*7500+$adult*10000;
                echo "Type_of_trip  :".$flighttype."<br>";
                echo "From_city     :".$from."<br>";
                echo "Destination   :".$dest."<br>";
                echo "Boarding_date :".$dep."<br>";
                echo "Return_date   :".$ret."<br>";
                echo "Childrens     :".$child."<br>";
                echo "Total_Adults  :".$adult."<br>";
                echo "Flight_class  :".$class."<br>";
                echo "Total_Cost  :".$cost."<br><br><br>";
                echo "your ticket has been reserved <br> Kindly check your mail/sms for further information";
            }
           echo "<br><br>"
           ?>
           <h3>click here to comnfirm your ticket</h3>
           <button type="button" class="cancelbtn">Confirm</button><br>
    </div>
<style>
    body{
        color:white;
        padding: auto;
        background-image: url("img/index.jpg");
        background-size:cover;
 		background-color: #cccccc;
    }
    h1{
        color: #f97d7d ;
        text-align:center;
    }
    h3{
        color:#FF0400;
    }
    div.absolute {
        color:  #dbdaf6 ;
        position: absolute;
        top: 100px;
        right: 500px;
        width: 500px;
        height: 500px;
    }
    button {
        text-align: center;
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 8px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}
</style>
</body>
</html>