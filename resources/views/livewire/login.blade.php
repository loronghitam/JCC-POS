<div>
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome <s>Bitch</s> Back</h1>
    </div>
    <form class="user" action="{{ 'login' }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
            <div class="valid-feedback">
                Looks good!
              </div>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
            <div class="valid-feedback">
                Looks good!
              </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="password">
                <label class="custom-control-label" for="customCheck">Remember
                    Me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block"> Login</button>
        <div class="text-center mt-3">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
        <hr>
        <a href="index.html" class="btn btn-facebook btn-user btn-block" >
            Create an Account!
        </a>
    </form>
</div>
