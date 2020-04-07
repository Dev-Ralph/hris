<form>
    <?php logd();?>
    <div class="md-form">
       <i class="fas fa-envelope prefix mt-2"></i>
       <input type="text" id="inputValidationEx" name="username" class="form-control validate my-0">
       <label for="inputValidationEx" data-error="wrong" data-success="right">Email Address</label>
       <small id="inputValidationEx" class="text-muted my-0">Use your valid Centro Escolar University email.</small>
     </div>
     <div class="md-form">
        <i class="fas fa-lock prefix mt-1"></i>
        <input type="password" id="inputValidationEx2" name="password" class="form-control validate my-0">
        <label for="inputValidationEx2" data-error="wrong" data-success="right">Password</label>
      </div>
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input my-0" name="remember" id="defaultUnchecked">
          <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
      </div>
      <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="login" class="btn btn-success form-control mt-3 mx-0">
</form>
