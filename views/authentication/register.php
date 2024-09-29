<h4>New here?</h4>
<h6 class="fw-light">Signing up is easy. It only takes a few steps</h6>
<form class="pt-3" method="POST" action="<?=route('auth/register')?>">
  <div class="form-group">
    <input type="text" class="form-control form-control-lg" id="email"  name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-lg" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
  </div>
  <div class="mb-4">
    <div class="form-check">
      <label class="form-check-label text-muted">
        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
    </div>
  </div>
  <div class="mt-3 d-grid gap-2">
    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN UP</button>
  </div>
  <div class="text-center mt-4 fw-light"> Already have an account? <a href="<?=route('auth/login')?>" class="text-primary">Login</a>
  </div>
</form>