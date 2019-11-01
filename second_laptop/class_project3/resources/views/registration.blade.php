<html>

    <head>
    </head>
    <body>
      <form method="POST">

      @csrf <!-- must be included other wise the form does not work-->
        <div class="form-group row">
            <label for="staticEmail"  class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text"  name='email' class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" name='password' class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="col-sm-10">
            <input type="submit" class="btn btn-success" value='Submit'>
            </div>
        </div>
    </form>

    </body>
</html>