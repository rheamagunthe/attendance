<div class="row">
	<div class="col-md-12">
		<div class="box box-solid">
			<form id="frmUpdateProfile" method="post" action="<?php echo URL; ?>profile/update/<?php echo $this->user['userid']; ?>">
			<div class="box-body">
				<div class="form-group">
					<label class="control-label">Username</label>
					<input type="text" class="form-control" name="username" value="<?php echo $this->user['username']; ?>" />
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<div class="form-group">
					<label class="control-label">Firstname</label>
					<input type="text" class="form-control" name="firstname" value="<?php echo $this->user['firstname']; ?>" />
				</div>
				<div class="form-group">
					<label class="control-label">Middlename</label>
					<input type="text" class="form-control" name="middlename" value="<?php echo $this->user['middlename']; ?>" />
				</div>
				<div class="form-group">
					<label class="control-label">Lastname</label>
					<input type="text" class="form-control" name="lastname" value="<?php echo $this->user['lastname']; ?>" />
				</div>
				<div class="form-group">
					<label class="control-label">Mobile Number</label>
					<input type="text" class="form-control" name="mobile" value="<?php echo $this->user['mobile']; ?>" />
				</div>
				<div class="form-group">
					<label class="control-label">Image</label>
					<button type="button" class="btn btn-block btn-info" id="btnCapture"><i class="fa fa-camera"></i> Capture Image</button>
				</div>
				<div class="form-group">
					<label class="control-label">Or Select a File</label>
					<input type="file" class="form-control" id="selectFile" accept="image/png,image/jpeg,image/jpg" />
				</div>
				<?php if($this->user['image'] != ""): ?>
				<div class="form-group imagePreview">
					<label class="control-label">Current Image</label>
					<img class="img-responsive img-bordered" style="margin: 0 auto" src="<?php echo URL; ?>public/uploads/user/<?php echo $this->user['image']; ?>" />
				</div>
				<?php else: ?>
				<div class="form-group imagePreview hidden">
					<label class="control-label">Preview Image</label>
				</div>
				<?php endif; ?>
			</div>
			<div class="box-footer text-right">
				<input type="hidden" name="image" value="" />
				<button class="btn btn-primary">Update</button>
			</div>
			</form>
		</div>
	</div>
</div>