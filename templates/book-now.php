<!-- <a href="/" class="pt-2 pb-2 btn btn-warning m-2">Get Free Counselling</a> -->

<!-- Button trigger modal -->
<button type="button" class="pt-2 pb-2 btn btn-warning m-2" data-toggle="modal" data-target="#book-now">
    Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="book-now" tabindex="-1" role="dialog" aria-labelledby="free-councellingTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Get Free Counselling</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
        <div class="text-left">
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="student-name" class="text-left">student Name</label>
                    <input type="text" class="form-control" id="student-name" name="student-name" placeholder="Student Name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="parent-name" class="text-left">Parent Name</label>
                    <input type="text" class="form-control" id="parent-name" name="parent-name" placeholder="Parent Name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="email" class="text-left">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="tel" class="text-left">Phone</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Contact No." required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="city" class="text-left">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Contact No." required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="neet" class="text-left">NEET Score</label>
                    <input type="tel" class="form-control" id="neet" name="neet" placeholder="NEET Score" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" onClick="FreeCouncellingCountry();">Submit form</button>
            <div id="free-councelling-country-status"></div>
            </div>

            <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            </script>
        </div>
      </div>
    </div>
  </div>
</div>