<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <form action="includes/userupdate.inc.php" method="post">
    <div class="container col-lg-4 d-flex justify-content-center align-items-center mt-5">
      <div class="col shadow p-4 rounded-3 border-top border-5 border-primary">
        <div class="row align-items-center">
          
          <div class="header-text mb-3 text-center">
            <h1>Change Account</h1>
          </div>

          <div class="input-group mb-3">
            <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address" name="email"/>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username"/>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" id="pwd" name="pwd"/>
          </div>

          <div class="input-group mb-3 d-flex justify-content-between">
            <div class="input-group">
              <button class="btn btn-lg btn-primary w-100 fs-6 mb-2">
                Update
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form action="includes/userdelete.inc.php" method="post">
    <div class="container col-lg-4 d-flex justify-content-center align-items-center mt-5">
      <div class="col shadow p-4 rounded-3 border-top border-5 border-primary">
        <div class="row align-items-center">
          
          <div class="header-text mb-3 text-center">
            <h1>Delete Account</h1>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username"/>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" id="pwd" name="pwd"/>
          </div>

          <div class="input-group mb-3 d-flex justify-content-between">
            <div class="input-group">
              <button class="btn btn-lg btn-primary w-100 fs-6 mb-2">
                Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
</body>

</html>