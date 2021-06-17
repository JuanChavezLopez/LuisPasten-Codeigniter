<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <!-- Mostramos los errores  -->
        <?= validation_errors(); ?>

        <!-- mostramos solo el error para email. -->
        <!-- <?= form_error('email')?> -->
        <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-6">
                        <h1>Login</h1>
                        <!-- <?php var_dump($menu) ?> -->

                        <!-- <ul>
                            <?php foreach($menu as $item): ?>
                                <li><a href="<?= $item['url'] ?>"><?=$item['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul> -->

                        <form action="<?= base_url('login/validate')?>" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                                <div class="invalid-feedback">
                                    El correo esta vacio
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control " id="exampleInputPassword1">
                                <div class="invalid-feedback">
                                    El password no es correcto.
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        </div>
    </body>
</html>