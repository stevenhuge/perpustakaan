<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
       <form class="table form-control d-flex align-items justify-content-center" method="POST" action="{{ route('login.store') }}" style="width: 25%">
        @csrf
        <table class="table table-striped mt-3">
            <tr>
                <td>
                    <label for="">Login Dulu Yuk !</label> <br />
                    <label for="" class="mt-3">Email :</label> <br />
                    <input class="form-control" type="text" placeholder="email" name="email">
              
                    <label for="">Password :</label> <br />
                    <input class="form-control" type="password" placeholder="password" name="password">
                    <button class="mt-3 btn btn-secondary" type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> 
    </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>