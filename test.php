<?php 

 echo $_SERVER['QUERY_STRING'];
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

    <form action="testSubmit.php" method="POST">
    
     <div>
     <label for="">
           Name
        </label>
        <input type="text" name="username" id="name" placeholder="username" value="" required> 
     </div>
     <div>
        <label for="date">Date</label>
        <input type="date" name="date">
     </div>
     <div>
         <label for="checkbox">checkbox</label>
         <input type="checkbox" id="check">
     </div>

      <div>
      <h4>Gender</h4>
          <div> 
          <label for="gender">Male</label>
          <input type="radio" id="male" name="male">
          </div>
          <div> 
          <label for="gender">Female</label>
          <input type="radio" id="female" name="female">
          </div>
         
      </div>
      <br>
 
       <div>
           <label for="color">Color</label>
           <select name="color" id="color">
               <option value="Red">Red</option>
               <option value="Green">Green</option>
               <option value="Blue">Blue</option>
           </select>
       </div>

      <br>
     <label for="">
           Password
        </label>
        <input type="password" name="password" id="password" placeholder="password" required> 
     </div>
     <br> <br>
     <button type="reset">Reset</button> 
       <button type="submit">Submit</button> 

 
       <ul>
           <li><a href="testSubmit?username=Supun">Supun</a></li>
           <li><a href="testSubmit?username=Pasan">Pasan</a></li>
      
           </ul>
           <?php
           echo "{$name}";
    ?>

    </form>
</body>
</html>