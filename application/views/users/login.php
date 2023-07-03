<div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('users/login'); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Admin" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input class="form-control" type="password" id="password" placeholder="Password" name="password">
                    </div>
                        <button class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>