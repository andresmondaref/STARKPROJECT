<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Akun</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form action="" method="post">
                    <div class="mb-2">
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="mr" />
                            <span>Laki-Laki</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="ms" />
                            <span>Perempuan</span>
                        </label>
                    </div>

                    <div class="input-field">
                        <input placeholder="Nama Depan" id="first_name" name="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Nama Belakang" id="last_name" name="last_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Username" id="username" name="username" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Alamat" id="address" name="address" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="No. Telpon" id="phone" name="phone" type="tel" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Provinsi" id="district" name="district" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0"> -->
                        <input placeholder="Kabupaten" id="kabupaten" name="kabupaten" type="text" class="validate">
                    </div>
                    <!-- <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="city">
                                <option value="-">Your City</option>
                                <option value="Bangkok">Bangkok</option>
                                <option value="Yangon">Yangon</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Singapore">Singapore</option>
                            </select>
                        </div> -->
                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0 tm-pl-xs-0"> -->
                            <div class="input-field">
                                <input placeholder="Kode Pos" id="zipcode" name="zipcode" type="text" class="validate">
                            </div>
                    <div class="input-field">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Re-type Password" id="password2" name="password2" type="password" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">REGISTER Yourself</h3>
                    <p class="grey-text">Aenean tincidunt, enim nec blandit lobortis, ante enim ultrices eros, et laoreet augue libero id nunc.
                        Proin semper feugiat ultrices.</p>
                    <p class="grey-text">Aenean a efficitur magna, sed dignissim odio. Praesent pretium lectus ac nunc ultrices, ac volutpat orci
                        viverra.
                    </p>
                </header>

            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2018 Company Name 
                    
                    - <a rel="nofollow" href="http://www.tooplate.com/view/2105-input">Input</a> by 
                    <a rel="nofollow" href="http://tooplate.com" class="tm-footer-link">Tooplate</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>