<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management</title>
    <link rel="icon" href="images/lot.png" type="image/x-icon" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body class="bg-darks">
    <style>
        *{
            color: black;
        }
        button{
            color: black;
        }
        .bg-darks{
            background-color: white !important;
            background-size: cover;
        }
    </style>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-darks">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 mt-5">
                    <section style="margin-top: -50px;" class="mb-2">
                        <div class="h3 mt-1 mx-auto text-center p-0">
                            <img src="assets/images/Kenyatta_University_Logo.png__77746.png" alt="Logo" class="img" width="120" height="70"><br>
                            KU <br>Accomodations
                        </div>
                        <hr class="mt-2 mb-0 bg-primary w-100">
                    </section>
                    <!-- Side bar links based on your role -->
                    <section class="mt-0" id="style-tab">
                        <ul class="nav nav-tabs flex-column mb-sm-auto mb-0 align-items-start" id="myTab" role="tablist">
                            <li class="nav-item text-center btn-stl">
                                <a href="home.php" class="nav-link rounded px-1 mb-2 text-center shadow-md">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded btn-styles" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staffs" type="button" role="tab" aria-controls="staff" aria-selected="false" style="width: 180px; color: white;">Staff</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="add-staff-tab" data-bs-toggle="tab" data-bs-target="#add-staff" type="button" role="tab" aria-controls="add-staff" aria-selected="false" style="width: 180px; color: white;">Add Staff</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="client-tab" data-bs-toggle="tab" data-bs-target="#clients" type="button" role="tab" aria-controls="client" aria-selected="false" style="width: 180px; color: white;">Students</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="profile-tab" data-bs-toggle="tab" data-bs-target="#allocationdetails" type="button" role="tab" aria-controls="profile" aria-selected="false" style="width: 180px; color: white;">Applications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="contact-tab" data-bs-toggle="tab" data-bs-target="#freelots" type="button" role="tab" aria-controls="contact" aria-selected="false" style="width: 180px; color: white;">Hostels</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="client-tab" data-bs-toggle="tab" data-bs-target="#addspaces" type="button" role="tab" aria-controls="client" aria-selected="false" style="width: 180px; color: white;">Rooms</button>
                            </li>
                            <li class="nav-item btn-stl" role="presentation">
                                <button class="nav-link align-middle px-1 mb-2 rounded" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payments" type="button" role="tab" aria-controls="contact" aria-selected="false" style="width: 180px; color: white;">Payments</button>
                            </li>
                        </ul>
                        <style>
                            .btn-stl a,
                            .btn-stl button{
                                background-color: grey;
                                width: 180px;
                            }
                            .btn-stl button:hover
                            .btn-stl:hover{
                                color: red;
                            }
                            .styled-btn {
                                width: 180px;
                            }

                            .btn-styles:hover {
                                border-color: rgb(20, 200, 100);
                            }
                        </style>
                    </section>
                    <div class="dropdown pb-4 fixed-bottom mx-5">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                            <img src="assets/images/P.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-2">VON AIG</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div class="main mt-0 mb-2" >
                    <section class="sticky-top mb-2">
                        <nav class="navbar navbar-expand-md navbar-dark bg-darks">
                            <div class="container">
                                <div class="collapseyd navbar-collapse" id="thisOne1">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="navbar-item">
                                            <a href="profile.php" class="nav-link text-light">&#160; Profile</a>
                                        </li>
                                        <li class="navbar-item">
                                            <a href="#" class="nav-link text-light">&#160; Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <hr class="bg-success w-100 mt-0" style="height: 4px;">
                    </section>

                    <section class="thisSection">
                        <style>
                            .thisSection{
                                background-color: white;
                                width: 100%;
                                background-size: cover;
                            }
                        </style>
                        <!-- Statistics -->
                        <section class="card shadow-lg mt-2 mb-2">
                            <div class="d-flex justify-content-around mt-2 mb-2 text-center">
                                <div class="btn btn-md bg-light">
                                    <div class="card p-0 bg-primary infoitm">
                                        <div class="card-title h4">12</div>
                                        <div class="card-title h6">Staff</div>
                                    </div>
                                </div>
                                <div class="btn btn-md bg-light">
                                    <div class="card p-0 bg-primary infoitm">
                                        <div class="card-title h4">1200</div>
                                        <div class="card-title h6">Students</div>
                                    </div>
                                </div>
                                <div class="btn btn-md bg-light">
                                    <div class="card p-0 bg-primary infoitm">
                                        <div class="card-title h4">6</div>
                                        <div class="card-title h6">Hostels</div>
                                    </div>
                                </div>
                                <div class="btn btn-md bg-light">
                                    <div class="card p-0 bg-primary infoitm">
                                        <div class="card-title h4">1200</div>
                                        <div class="card-title h6">Rooms</div>
                                    </div>
                                </div>
                                <div class="btn btn-md bg-light">
                                    <div class="card p-0 bg-primary infoitm">
                                        <div class="card-title h4">100</div>
                                        <div class="card-title h6">Applications</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- other -->
                        <section class="card">
                            <div class="row ml-2">
                                <div class="col-4 shadow-md m-1">
                                    <div class="h1 text-center">Hostels</div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Hostel</th>
                                            <th>Type</th>
                                            <th>Free Spaces</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nyayo 4</td>
                                                <td>Male</td>
                                                <td>52</td>
                                            </tr>
                                            <tr>
                                                <td>Nyayo 1</td>
                                                <td>Female</td>
                                                <td>152</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-7 card m-1">
                                    <div class="h2 text-center">Mpesa Till Payments</div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Evans Otieno</td>
                                                <td>0712345678</td>
                                                <td>3500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </section>
                        <section class="footer cRights">
                            <div class="bg-light text-center">
                                <p class="text-dark"><i>© 2022 Copyright.</i><br>
                                    Terms and Conditions apply.
                                </p>
                            </div>
                        </section>
                        <style>
                            .cRights {
                                position: fixed !important;
                                bottom: 0;
                                width: 100%;
                                height: 50px;
                                background: #6cf;
                            }
                        </style>
                    </section>
                    xyz
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="js/bootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>