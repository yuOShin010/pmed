<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title> Modal Crud w/ Bootstrap</title>
</head>
<body>

        <div class="container">
            <div class="jumbotron">
                <div class="card">
                    <h2> PROFILING </h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary bi bi-plus " title="add"data-bs-toggle="modal" data-bs-target="#student_addmodal">
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="student_addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " > CUSTOMIZE PROFILE </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <form action="php/process.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- this field is for form element -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" name="picture" class="form-control">
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="save_data" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>