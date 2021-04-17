<footer class="footer d-md-block d-xs-none" id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h5>Get started</h5>
                <ul>
                    <li>
                        {{ link_to_route('register', 'Create an Account', [], ['class' => 'nav-link']) }}
                    </li>
                    <li>
                        {{ link_to_route('about.book', 'About Easy Laravel 5', [], ['class' => 'nav-link']) }}
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <h5>About Us</h5>
                <ul>
                    <li>
                        {{ link_to_route('about.index', 'About HackerPair', [], ['class' => 'nav-link']) }}
                    </li>
                    <li>
                        {{ link_to_route('contact.index', 'Contact Us', [], ['class' => 'nav-link']) }}
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 social-networks">
                <a href="http://twitter.com/hackerpair" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="http://facebook.com/hackerpair" class="facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="http://github.com/wjgilmore/hackerpair" class="github"><i class="fa fa-github"></i></a>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2017 WJ Gilmore, LLC. All Rights Reserved.</p>
        </div>
    </div>

</footer>