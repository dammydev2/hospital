<?php

?>
<body>
    <!-- llll
<img src="{{ url('images/patients.jpg') }}"> -->
    <div class="background">
        <div class="inner">
            <div class="top-bar">
                <h3>WELCOME TO THE MEDICAL APP</h3>
                <div class="text">
                    <ol>
                        <li>Download and install xampp server for at least php7.2 from <b><a href="https://www.apachefriends.org/download.html">here</a></b></li>
                        <li>During instalation, you may leave the username as root, if password is promopt, put in a password you can specifically remember (you will need it in the next phase)</li>
                        <li>Create a new database call it whatever you like e.g. hospital</li>
                    </ol>
                    <a href="#" style="float: right;" class="next-btn">NEXT</a>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="form-page" id="form-page" style="display: none;">
                    <h3>Database Credentials</h3>
                    <form method="post" action="{{ url('database_form') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Database Name</label>
                            <input type="text" name="database" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter database name e.g. hospital">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Database Username</label>
                            <input type="text" name="username" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" value="root">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Database Password</label>
                            <input type="password"  name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter database password">
                        </div>
                        <a href="#" style="float: left;" class="former btn btn-danger">&lt;&lt;Previous</a>
                        <button type="submit" style="float: right;" class="next-btn btn btn-primary">Submit</button>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $(".next-btn").click(function() {
            $(".form-page").show();
            $(".text").hide();
        });
        $(".former").click(function() {
            $(".text").show();
            $(".form-page").hide();
        });
    });
</script>
<style type="text/css">
    .background {
        height: 100%;
        background-image: url('/images/patients.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .inner {
        height: 100%;
        background-color: rgba(0, 0, 255, 0.2);
    }

    .top-bar {
        background-color: rgba(0, 0, 255, 0.4);
        color: #ffffff;
        padding: 40px;
    }

    .top-bar h3 {
        text-align: center;
    }

    .next-btn {
        display: block;
        width: 115px;
        height: 45px;
        background: rgba(0, 0, 255, 0.5);
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        line-height: 25px;
        text-decoration: none;
    }

    .form-page {
        width: 40%;
        margin: 0px auto;
        background: rgba(0, 0, 255, 0.4);
        padding: 10px;
    }
</style>