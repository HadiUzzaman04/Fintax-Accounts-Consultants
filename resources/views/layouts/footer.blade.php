<footer id="footer">
    <div class="inner">
        <section>
            <h2>Contact Us</h2>
            <form method="post" action="{{route('contactus.store')}}">
                @csrf
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field half">
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <input type="text" name="subject" id="subject" placeholder="Subject" />
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="field text-right">
                        <label>&nbsp;</label>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <h2>Contact Info</h2>
            <ul class="alt">
                <li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
                <li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
                <li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
            </ul>
        </section>
    </div>
</footer>