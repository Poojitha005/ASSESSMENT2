<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.submitbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form  method="post" action="form_submit.php">  
  <div class="container">  
  <center>  <h1> SIGNUP FROM</h1> </center>  
  <hr>  
  
  <label for="Username"><b>Username</b></label>   
<input type="text" name="username" placeholder= "Username" size="15" required />  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  

 <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" required>  
<label for="Date:"><b>DOB:</b></label>
	<input type = "Date" name="dob">  

<div>  
<label for="Gender:"><b>Gender:</b></label> 
<input type="radio" value="Male" name="gender"> Male
<input type="radio" value="Female" name="gender"> Female  
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="mobile" placeholder="Country Code"  value="+91" size="2"/>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" value="address"  name="address" required></textarea>  
 <div id="centerbutton" style="text-align: center; width: 100%;"><input type="submit" class="signupbtn" value="Submit" name="submit"></div>
 </div>
</form>  
</body>  
</html>  