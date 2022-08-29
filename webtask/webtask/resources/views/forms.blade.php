<!DOCTYPE.html>
<html>
    <body>
        <center>
            <div style="background-image:url('https://www.odysseyis.com/wp-content/uploads/2019/05/Odyssey-forms-background.jpg');
            background-repeat:no-repeat;background-size:100% 590px;height:590px;color:white">
            <h1 style="font-size:7vh;">Employee Information form </h1>
            <div style="background-color:white;color:black;font-size:5vh"><strong>Personal Information</strong> </div><br>
<form 
name="form"; 
action="insert"; 
method= "post";  > @csrf 
        <strong>Name:</strong>&ensp;&ensp;&emsp;&emsp;<input type="text" style="width:40vh;height:6vh;" name="name" placeholder="enter your name...." required><br><br>
   <strong>Salary:</strong> &ensp;&emsp;&emsp;<input type="text" style="width:40vh;height:6vh;" name="salary" placeholder="enter your salary..." required><br><br>
   <strong>Address:</strong>&emsp;&emsp;<input type="text" style="width:40vh;height:6vh;" name="address" placeholder="enter your address...." required><br><br>
   <strong>Phone no:</strong>&emsp;&emsp;<input type="tel" style="width:40vh;height:6vh;" name="phone_no" placeholder="enter your phone no...." required><br><br>
   <strong>Email:</strong> &ensp;&ensp;&emsp;&emsp;<input type="email" style="width:40vh;height:6vh;" name="email" placeholder="enter your email..." required><br><br>
   <strong>Grade:</strong> &ensp;&ensp;&emsp;&emsp;<input type="text" style="width:40vh;height:6vh;" name="grade" placeholder="enter your grade..." required><br><br>
   <strong>Occupation:</strong> &emsp;<input type="text" style="width:40vh;height:6vh;" name="occupation" placeholder="enter your occupation..." required>
<br><br><input type="submit" value="Submit" style="border-radius:2vh;border-color:white;width:15vh;height:6vh;color:black;">
</form>
</center>
</div>
    </body>
    </html>