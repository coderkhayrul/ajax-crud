<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JQUERY CURD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="./style.css">

</head>

<body class="bg-secondary">
    <div class="container my-5">
        <div class="row">
            <!-- FORM -->
            <div class="col-md-4">
                <div class="form-group mb-2">
                    <label class="control-label" for="" clas>Student Name</label>
                    <input class="form-control" type="text" id="studnetName" placeholder="Student Name">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="">Student Email</label>
                    <input class="form-control" type="text" id="studnetEmail" placeholder="Student Email">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="">Student Name</label>
                    <input class="form-control" type="text" id="studnetPhone" placeholder="Student Phone">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="">Student Name</label>
                    <textarea name="" id="studentAddress" class="form-control" placeholder="Student Address"></textarea>
                </div>
                <div class="form-group mt-3">
                    <button id="save" class="btn btn-success form-control mb-2"> SAVE</button>
                    <button id="update" class="btn btn-primary form-control"> UPDATE</button>
                </div>
            </div>
            <!-- FORM END -->
            <!-- TABLE -->
            <div class="col-md-8">
                <table class="table" border="2px">
                    <thead class="text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABLE END -->
        </div>
    </div>




    <!-- SCRIPT LINK -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="./scripts.js"></script>
</body>

</html>