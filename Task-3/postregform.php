<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style>
table{
    width: 40%;
}

.center {
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
    
}
h1{
    margin-top: 50px;
}
</style>
<body>

<h1 class="text-center">Registration form using Post Method</h1>
<br>
    <form action="postresult.php" method="post">
    <table class="center">
    <tr>
    <td>Name:</td>
    <td><input type="text" name="txt1" class="form-control" required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <td>Email:</td>
    <td><input type="email" name="txt2" class="form-control" required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <td>Gender:</td>
    <td><input type="radio" name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio"  name="gender" value="female">
          <label for="female">Female</label></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <td>Age:</td>
    <td><input type="number" name="txt3" min="1" max="100" class="form-control"  required/></td>   
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <td><input type="submit" class="btn btn-dark"></td>
    <td><input type="reset" class="btn btn-dark"></td>
    </tr>
    </table>
    </form>
</body>
</html>