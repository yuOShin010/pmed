<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

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
                                <input type="text" name="sname" class="form-control" placeholder="Enter Surname">
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control" placeholder="Enter Possition">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <!-- <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                            </div> -->
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