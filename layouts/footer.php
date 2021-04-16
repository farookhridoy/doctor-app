<footer>
    <div class="container">
        <div class="col-one-third">
            <h3>Work with us</h3>
            <dl class="footer-list">
                <dt>Vacancies</dt>
                <dd>Fellowships</dd>
                <dt>Traineeships</dt>
                <dd>Procurement and grants</dd>
               <!--  <dt>contact</dt>
                <dd>view all</dd> -->
            </dl>
        </div>
        <div class="col-one-third">
            <h3>Contact Us</h3>
            <address>
                <a href="mailto:info@patientracker.com">info@patietracker.com</a>
            </address>
        </div>
        <div class="col-one-third">
            <h3>Register for Updates</h3>
            <form>
                <input type="text" id="name" placeholder="Name" />
                <input type="text" id="email" placeholder="Email@addreess.com" />
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </div>
    <br\>
    <span class="copyright">&copy;copyright 2020, Patient Tracking System</span>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<script>
    $(function() {
        $nav = $('.nav-list');

        $(window).resize(function() {
            if ($(window).width() >= 500) {
                $nav.show();
            } else {
                $nav.hide();
            }
        });
    });
</script>