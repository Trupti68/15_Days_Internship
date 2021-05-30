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

<h1 class="text-center">Enter your Subject Marks</h1>
<br>
    <form action="studentresult.php" method="post">
    <table class="center">
    <tr>
    <td>Enter C Programming Marks:</td>
    <td><input type="number" name="txt1" class="form-control" min="1" max="100" required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <tr>
    <td>Enter C++ Programming Marks:</td>
    <td><input type="number" name="txt2" class="form-control" min="1" max="100"  required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <tr>
    <td>Enter Java Programming Marks:</td>
    <td><input type="number" name="txt3" class="form-control" min="1" max="100"  required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <tr>
    <td>Enter Python Marks:</td>
    <td><input type="number" name="txt4" class="form-control" min="1" max="100"  required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <tr>
    <td>Enter Web Development Marks:</td>
    <td><input type="number" name="txt5" class="form-control" min="1" max="100"  required/></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
    <tr>
    <td><input type="submit" class="btn btn-dark"></td>
    <td><input type="reset" class="btn btn-dark"></td>
    </tr>
    </table>
    </form>
</body>
</html>