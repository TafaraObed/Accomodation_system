<h4>Hello! let's get started</h4>
  <h6 class="fw-light">Sign in to continue.</h6>
  <form class="pt-3" method="POST" action="<?=route('auth/login')?>">
    <div class="form-group">
      <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
    </div>
    <div class="mt-3 d-grid gap-2">
      <button type="submit"class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
    </div>
    <div class="my-2 d-flex justify-content-between align-items-center">
      <div class="form-check">
        <label class="form-check-label text-muted">
          <input type="checkbox" class="form-check-input"> Keep me signed in </label>
      </div>
    </div>
    <div class="text-center mt-4 fw-light"> Don't have an account? <a href="<?=route('auth/register')?>" class="text-primary">Create</a>
    </div>
  </form>