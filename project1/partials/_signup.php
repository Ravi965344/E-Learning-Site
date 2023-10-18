<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signup">Signup to iDescuss</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/project1/partials/_handle.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control" id="username" name="username"
                            aria-describedby="usernamelHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_no" class="form-label">Phone_no</label>
                        <input type="phone" class="form-control" id="phone_no" name="phone_no" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_id" class="form-label">Email_id</label>
                        <input type="email" class="form-control" id="email_id" name="email_id"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" onchange="preview()" class="form-control-file" id="image" name="image" required>

                        <img id="imagePreview" src="" alt="Preview" width="100px">
                    </div>

                    <script>
                    function preview() {
                        const input = document.getElementById('image');
                        const previewImage = document.getElementById('imagePreview');

                        if (input.files && input.files[0]) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                previewImage.src = e.target.result;
                            };

                            reader.readAsDataURL(input.files[0]);
                        } else {
                            previewImage.src = ''; // Clear the preview if no file is selected
                        }
                    }
                    </script>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>