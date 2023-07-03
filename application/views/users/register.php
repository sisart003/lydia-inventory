
<div class="row">
                <div class="col-md-4"></div>
                
                <div class="col-md-4">
                <h2 class="mb-5 text-center"><?= $title; ?></h2>
                <?php echo validation_errors(); ?>
                <?php echo form_open('users/register'); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Admin">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="user_level" aria-label="Default select example">
                            <option selected disabled>User Level</option>
                            <option value="administrator">Admin</option>
                            <option value="moderator">Moderator</option>
                            <option value="user">User</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" placeholder="Password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="passwordConfirm" class="form-label">Confirmation</label>
                        <input class="form-control" type="password" id="passwordConfirm" placeholder="Confirm Password" name="confpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    
                </div>
                </form>
            </div>