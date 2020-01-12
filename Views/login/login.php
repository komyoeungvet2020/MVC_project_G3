<div class="container mt-5">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="card  alert-info">
          <div class="card-header">
            <img src="http://www.foodcrowd.com.br/img/icons/login.png" width="150" class="img-fluid mx-auto d-block" alt="">
          </div>

        <div class="card-body">
          <form action="index.php?action=form_login" method="POST">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text material-icons" id="u-label">person</span>
              </div>
              <input type="text" class="form-control" name="username" autofocus placeholder="Username...">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text material-icons" id="p-label">lock</span>
              </div>
              <input type="password" class="form-control" name="password" placeholder="Password...">
            </div>

            <div class="form-group mb-0">

              <button type="submit" name="submit" class="btn btn-primary btn-block">
                Login
              </button>

              <hr>
            </div>

          </form>
        </div>
      </div>
    </div>
    <div class="col-4"></div>
  </div>
</div>