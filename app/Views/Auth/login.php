<?= $this->extend('Auth/layouts/app') ?>

<?= $this->section('content') ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

				<div class="card card-primary">
					<div class="card-header"><h4>Login</h4></div>

					<div class="card-body">
						<?= $this->include('Auth/partials/alert') ?>

						<form action="<?= route_to('login') ?>" method="post">
							<?= csrf_field() ?>
							<div class="form-group">
							<?php if ($config->validFields === ['email']): ?>
								<label for="login"><?= lang('Auth.email') ?></label>
								<input id="login" type="email" class="form-control" name="login" tabindex="1" value="<?= old('login') ?>" autofocus>
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							<?php else: ?>
								<label for="login"><?= lang('Auth.emailOrUsername') ?></label>
								<input id="login" type="text" class="form-control" name="login" tabindex="1" value="<?= old('login') ?>" autofocus>
								<?= session('erros.login') ?>
							<?php endif; ?>
							</div>

							<div class="form-group">
								<label for="password" class="control-label">Password</label>
								<input id="password" type="password" class="form-control" name="password" tabindex="2">
								<div class="invalid-feedback">
									<?= session('errors.password') ?>
								</div>
							</div>

						<?php if($config->allowRemembering): ?>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" <?= old('remember') ? 'checked' : ''; ?>>
									<label class="custom-control-label" for="remember-me"><?= lang('Auth.rememberMe') ?></label>
								</div>
							</div>
						<?php endif; ?>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
									Login
								</button>
							</div>
						</form>

					</div>
				</div>

				<div class="simple-footer">
					Copyright &copy; Stisla <?= date('Y') ?>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
