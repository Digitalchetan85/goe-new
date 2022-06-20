<!-- <a href="/" class="pt-2 pb-2 btn btn-warning m-2">Get Free Counselling</a> -->

<!-- Button trigger modal -->
<button type="button" class="pt-2 pb-2 btn btn-warning m-2" data-toggle="modal" data-target="#free-councelling-university">
    Get Free Counselling
</button>

<!-- Modal -->
<div class="modal fade" id="free-councelling-university" tabindex="-1" role="dialog" aria-labelledby="free-councellingTitle" aria-hidden="true">
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
                    <label for="university-student-name" class="text-left">student Name</label>
                    <input type="text" class="form-control" id="university-student-name" name="university-student-name" placeholder="Student Name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="university-parent-name" class="text-left">Parent Name</label>
                    <input type="text" class="form-control" id="university-parent-name" name="university-parent-name" placeholder="Parent Name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="university-email" class="text-left">Email</label>
                    <input type="email" class="form-control" id="university-email" name="university-email" placeholder="Email" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="university-tel" class="text-left">Phone</label>
                    <input type="tel" class="form-control" id="university-tel" name="university-tel" placeholder="Contact No." required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="university-city" class="text-left">City</label>
                    <input type="text" class="form-control" id="university-city" name="university-city" placeholder="Contact No." required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="university-neet" class="text-left">NEET Score</label>
                    <input type="tel" class="form-control" id="university-neet" name="university-neet" placeholder="NEET Score" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" onClick="FreeCouncellingUniversity();">Submit form</button>
            <div id="free-councelling-university-status"></div>
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

