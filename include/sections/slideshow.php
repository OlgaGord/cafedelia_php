    <script>
        let elSS;
        let currSlide = 0;
        let intHandle;
        let elOverlay;

        function Slide(filename, title) {
            this.src = filename;
            this.title = title;
        }

        let slides = [];

        slides.push(new Slide("image2.jpg", ""));
        slides.push(new Slide("cafe2.jpg", ""));
        slides.push(new Slide("cappucino1.jpg", "Cappuccino"));
        slides.push(new Slide("herbal1.png", "Herbal tea"));
        slides.push(new Slide("green1.png", "Green tea"));
        slides.push(new Slide("black1.png", "Black tea"));
        slides.push(new Slide("expresso1.jpg", "Espresso"));
        slides.push(new Slide("hot_choco1.jpg", "Hot Chocolate"));


        window.onload = () => {
            elSS = document.querySelector("#slideshow");
            elOverlay = document.querySelector("#overlay");
            elSS.addEventListener("mouseover", () => {
                elOverlay.style.opacity = "1";
                clearInterval(intHandle);
            });


            elSS.addEventListener("mouseout", () => {

                intHandle = setInterval(showNextSlide, 2100);
                elOverlay.style.opacity = "0";
            });

            slides.forEach((el, i) => {

                el.element = document.createElement("div");
                el.element.style.backgroundImage = "url('img/" + el.src + "')";
                el.element.className = "slide";


                elSS.appendChild(el.element);
                let elCap = document.createElement("h1");
                elCap.innerText = el.title;
                el.element.appendChild(elCap);

            });

            intHandle = setInterval(showNextSlide, 1100);

            setVisible(0);
        };
        let showNextSlide = function() {
            currSlide = (currSlide + 1) % slides.length;
            setVisible(currSlide);
        };

        let showPrevSlide = function() {

            currSlide = currSlide === 0 ? slides.length - 1 : currSlide - 1;
            setVisible(currSlide);
        };

        let setVisible = function(index) {
            slides.forEach((el, i) => {
                if (i == index) {
                    el.element.style.opacity = "1";
                } else {
                    el.element.style.opacity = "0";
                }
            });
        };
    </script> 