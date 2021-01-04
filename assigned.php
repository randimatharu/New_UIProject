

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h4>User Search</h4>

        <div class="card">
            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="usr">First Name</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="usr">Last Name</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="usr">Username</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="sel2">Type:</label>
                                <select multiple class="form-control" id="sel2" name="sellist2">
                                    <option></option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="form-group">
                                    <label for="sel2">Status</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sel2">Is Administrator</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="form-group">
                                    <label for="usr">Job Title</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Department</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-2">
                            <div class="form-group">
                                <label for="usr">Any Phone</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="form-group">
                                <label for="usr">Any Address</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="form-group">
                                <label for="usr">Any Email</label>
                                <input type="email" class="form-control" id="first_name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-2">
                            <div class="form-group">
                                <label for="usr">City</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="form-group">
                                <label for="usr">State</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="form-group">
                                <label for="usr">Postal Code</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usr">Country</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-danger" value="SEARCH">
                            <input type="reset" class="btn btn-danger" value="CLEAR">
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>