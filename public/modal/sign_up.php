<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body mx-5">
                    <div class="name row">

                        <div class="col mx-1">
                            <input name="username" type="text" placeholder="first name" required><br>
                        </div>
                        <div class="col mx-1">
                            <input name="username" type="text" placeholder="lastname" required><br>
                        </div>
                    </div>
                    <div class="inputvalues">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input name="username" type="text" placeholder="Username" required><br>
                    </div>

                    <div class="inputvalues">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input name="e-mail" type="text" placeholder="e-mail Id" required><br>
                    </div>

                    <div class="inputvalues">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <input name="mobile" type="number" placeholder="Phone no." required><br>
                    </div>


                    <div class="inputvalues">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input name="password" type="password" placeholder="password" required><br>
                    </div>


                    <div class="inputvalues">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        <input name="cpassword" type="password" placeholder="confirm password" required><br>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-dark">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">




</script>