<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blocky | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Blocky is a bitcoin informational center">
    <meta name="author" content="Blocky">

    <meta name="robots" content="index,follow,noodp,noydir">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link href="styles.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({ selector: '#mce' });
    </script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="/"><img src="blockylogo2.png"></img><img src="blockylogo.png"></img></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right nav-items">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">James Backneg
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <div class="anal_blocky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="anal_item">
                        <div>
                            <h1><span>Total</span><br>Email<br>Addresses</h1>
                        </div>
                        <h1>04</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="anal_item">
                        <div>
                            <h1><span>Total</span><br>Unique<br>Views</h1>
                        </div>
                        <h1>59</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="anal_item">
                        <div>
                            <h1><span>Total</span><br>Views<br>All-Time</h1>
                        </div>
                        <h1>103</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="email_blocky">
        <div class="container-fluid">
            <h1>Email List</h1>
            <p>List of emails in your account.</p>
            <table class="table">
                <tbody>
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Date Updated</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>

                    <tr>
                        <th scope="row">
                            <div class="status offline"></div>
                        </th>
                        <td>osinski_nathen@gmail.com</td>
                        <td>09/01/2017</td>
                        <td>
                            <ul>
                                <li><a href="#"><img src="trashIcon.png" alt="Delete"></a></li>
                                <li><a href="#"><img src="pencilIcon.png" alt="Edit"></a></li>
                                <li><a href="#"><img src="eyeIcon.png" alt="Hide"></a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <div class="status online"></div>
                        </th>
                        <td>adams.burley@yahoo.com</td>
                        <td>12/12/2017</td>
                        <td>
                            <ul>
                                <li><a href="#"><img src="trashIcon.png" alt="Delete"></a></li>
                                <li><a href="#"><img src="pencilIcon.png" alt="Edit"></a></li>
                                <li><a href="#"><img src="eyeIcon.png" alt="Hide"></a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <div class="status online"></div>
                        </th>
                        <td>maegan_kerluke@rodrigo.me</td>
                        <td>01/18/2017</td>
                        <td>
                            <ul>
                                <li><a href="#"><img src="trashIcon.png" alt="Delete"></a></li>
                                <li><a href="#"><img src="pencilIcon.png" alt="Edit"></a></li>
                                <li><a href="#"><img src="eyeIcon.png" alt="Hide"></a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <div class="status away"></div>
                        </th>
                        <td>dahlia.weissnat@hotmail.com</td>
                        <td>07/10/2017</td>
                        <td>
                            <ul>
                                <li><a href="#"><img src="trashIcon.png" alt="Delete"></a></li>
                                <li><a href="#"><img src="pencilIcon.png" alt="Edit"></a></li>
                                <li><a href="#"><img src="eyeIcon.png" alt="Hide"></a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</html>
