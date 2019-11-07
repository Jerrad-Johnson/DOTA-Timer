
            <div class="colorchanger">
                <span id="white">Light Page</span> -- <span id="dark">Dark Page</p></span>
            </div>
        </div>

        <script>
            var targetLightStyle = document.querySelector('#defaultcss'),
                otherLightStyle = 'css/style.css';

            document.querySelector('#white').onclick = function(){
                targetLightStyle.href= 'css/style-white.css';
            };

            var targetDarkStyle = document.querySelector('#defaultcss'),
                otherDarkStyle = 'css/style-white.css';

            document.querySelector('#dark').onclick = function(){
                targetDarkStyle.href= 'css/style.css';
            };



        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
