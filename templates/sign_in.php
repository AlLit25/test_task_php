<?php
/** template sign in*/
?>
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Sign up</h2>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="" method="post" class="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" name="LOGIN">
                        <label for="floatingInput">Login</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" name="PASS">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>