<?php include 'includes/header.php' ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="header">DOTA Timer</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button onclick="startTimer()">Start Timer</button> <button onclick="stopTimer()">Stop Timer</button>
                
                <script>

                    var secondCounter = 58;
                    var secondTimeout;
                    var delayToStart = 150;
                    var roshanTimeAfterStart = 900;
                    var creepWaveTime = 60;
                    var powerRunes = 120;
                    var bountyRunes = 300;

                    function stopTimer(){
                        if (secondTimeout != null) {
                            clearTimeout(secondTimeout);
                            secondCounter = 0;
                        }
                    }

                    function startTimer(){
                        if (secondTimeout != null) {
                            clearTimeout(secondTimeout);
                        }
                        startCounting();
                    }

                    function startCounting() {
                        console.log(secondCounter);
                        secondCounter = secondCounter + 1
                        checkTimes();
                        secondTimeout = setTimeout(startCounting, 1000);
                    }

                    function checkTimes() {
                        // FIRST CREEP SPAWN
                        if (secondCounter < (delayToStart + 1) && secondCounter % creepWaveTime == 0){
                            alert("First Creeps");
                        }

                        // SUBSEQUENT CREEP SPAWNS
                        if ((secondCounter - delayToStart) > 0 && secondCounter % creepWaveTime == 0){
                            alert("Creep Wave");
                        }

                        // ROSHAN
                        if ((secondCounter - delayToStart) > 0 && secondCounter % roshanTimeAfterStart == 0)
                            && delayToStart + roshanTimeAfterStart < (secondCounter + 1){
                            alert("First Roshan");
                        }

                        // Power Runes
                        if ((secondCounter - delayToStart) > 0 && secondCounter % powerRunes  == 0){
                            alert("Power");
                        }

                        // Bounty Runes
                        if ((secondCounter - delayToStart) > 0 && bountyRunes % 300 == 0){
                            alert("Bounty");
                        }
                    }



                </script>
                <!--<img src="images/Timer-Placeholder.jpg" alt="Placeholder image" class="timer"/>-->
            </div>
        </div>

<?php include 'includes/footer.php' ?>




















        <!--<button id="startButton">Start Timer</button> <button id="stopButton">Stop Timer</button>

        //document.getElementById(startTimer).onClick(beginTimer);


        /*                    var start = document.getElementById("startButton");
        start.onClick = function () {
        var interval = setInterval(beginTimer, 1000)
        interval();
        }*/






        -->