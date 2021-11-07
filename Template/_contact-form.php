<section id="contact" class="primary-bkg">
    <div class="container p-5">
        <h3 class="text-center">Get in touch!</h3>
        <form action="./Template/_mail.php" class="px-lg-5 needs-validation" novalidate method="POST">
            <div class="form-group pb-3">
                <label for="email" class="small grey-text">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="john@doe.com" required>
                <p class="invalid-feedback small mb-0">Incorrect email address</p>
            </div>
            <div class="form-group pb-3">
                <label for="subject" class="small grey-text">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Hello" value="Hello">
            </div>
            <div class="form-group pb-3">
                <label for="message" class="small grey-text">Message</label>
                <textarea class="form-control" name="message" rows="3" placeholder="Write somehing nice...or whatever you want :)" required></textarea>
                <p class="invalid-feedback small mb-0">Message is required</p>
            </div>
            <button type="submit" class="btn btn-warning">Send</button>

        </form>
    </div>
</section>

<!-- Form validation -->
<script>
    var forms = document.querySelectorAll(".needs-validation");

    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener("submit", function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }

            form.classList.add("was-validated");
        }, false)
    })
</script>
<!-- !Form validation -->