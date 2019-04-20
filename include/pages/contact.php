<div class="text_dynamic">This coffeedelia is
    <span class="text_annimate" data-period="2000" data_change='[ "the Best.", "a magic place.", "for cakes.", "for coffee.", "worth to visit!" ]'></span>
</div>

<script>
    var textAnnimate = function(element, toChange, period) {
        this.toChange = toChange;
        this.element = element;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    textAnnimate.prototype.tick = function() {
        var i = this.loopNum % this.toChange.length;
        var fullTxt = this.toChange[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.element.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 300 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('text_annimate');
        for (var i = 0; i < elements.length; i++) {
            var toChange = elements[i].getAttribute('data_change');
            var period = elements[i].getAttribute('data-period');
            if (toChange) {
                new textAnnimate(elements[i], JSON.parse(toChange), period);
            }
        }
        css.innerHTML = ".text_annimate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };
</script>
<br> <br>



<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.719360965568!2d-75.7671518484781!3d45.45531107899836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce033b87d0c6fd%3A0x941945e012fe4523!2s325+Boulevard+de+la+Cit%C3%A9-des-Jeunes%2C+Gatineau%2C+QC+J8Y+6T3!5e0!3m2!1sen!2sca!4v1550439094931" class="resp_iframe" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="text_map">
    <div>
        <p>
            <h2>Our address:</h2>
            325 Boulevard de la Cité-des-Jeunes, Gatineau, QC J8Y 6T3
        </p>
    </div>
    <div>
        <p>
            <h2>Tel:</h2>
            (514)-555-333-1122
        </p>
    </div>
    <div>
        <p>
            <h2>Email:</h2>
            Olga@gmail.com
        </p>
    </div>
</div> 