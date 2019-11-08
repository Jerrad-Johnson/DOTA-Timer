<?php include 'includes/header.php' ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="header">DOTA Timer</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="number" id="creepOffsetHTML" value="1" max="59" min="0" />
                <button onclick="startTimer()">Start Timer</button> <button onclick="stopTimer()">Stop Timer</button>
                <button onclick="roshanKilled()">Roshan Killed</button>




                <script>

                    var secondCounter = 0;
                    var secondTimeout;
                    var delayToStart = 150;
                    var roshanTimeAfterStart = 900;
                    var creepWaveTime = 60;
                    var powerRunes = 120;
                    var bountyRunes = 300;
                    var creepOffset = 0;
                    var roshanRespawn = 600;
                    var roshanDeathCount = 0;
                    var roshanTimeOfDeath;

                    function stopTimer(){
                            clearTimeout(secondTimeout);
                            secondCounter = 0;
                            roshanRespawn = null;
                            roshanDeathCount = 0;
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
                        getCreepOffsetTime();

                        // FIRST CREEP SPAWN
                        if ((secondCounter - creepOffset) > 0 && (secondCounter - creepOffset) < (delayToStart + 1)
                            && (secondCounter - creepOffset) % creepWaveTime == 0){
                            alert("First Creeps"); // THIS RUNS REPEATEDLY
                        }

                        // SUBSEQUENT CREEP SPAWNS
                        if ((secondCounter - delayToStart - creepOffset) > 0 && (secondCounter - creepOffset)
                            % creepWaveTime == 0){
                            alert("Creep Wave");
                        }

                        // Roshan Spawn
                        if ((secondCounter - delayToStart) > 0 && (secondCounter % roshanTimeAfterStart) == 0
                            && (delayToStart + roshanTimeAfterStart) < (secondCounter + 1)) {
                            alert("First Roshan");
                        }

                        // Roshan Respawn
                        if (roshanTimeOfDeath != null && (secondCounter - roshanTimeOfDeath + roshanRespawn) &
                            roshanRespawn == 0){
                            alert('Rosh has respawned');
                            roshanTimeOfDeath = null;

                            if (roshanDeathCount == 2){
                                alert('Roshan will drop a scepter.')
                            }
                        }

                        // Power Runes
                        if ((secondCounter - delayToStart) > 0 && secondCounter % powerRunes  == 0){
                            alert("Power");
                        }

                        // Bounty Runes
                        if ((secondCounter - delayToStart) > 0 && secondCounter % bountyRunes == 0){
                            alert("Bounty");
                        }
                    }

                    // Get personalized creep offset time.
                    function getCreepOffsetTime(){
                        creepOffset = document.getElementById('creepOffsetHTML').value;
                        console.log(creepOffset)
                    }

                    function roshanKilled() {
                        if (roshanTimeOfDeath != null || secondCounter < (delayToStart + roshanTimeAfterStart)){
                            alert('You must wait for Roshan to spawn before killing him.')
                        } else {
                            roshanTimeOfDeath = secondCounter;
                            roshanDeathCount = roshanDeathCount + 1;
                            console.log(roshanDeathCount);
                            // TODO Display death count, AND notify on third.
                        }
                    }

                    // TODO Add option to reduce or add to current time. Add visual version of current time.


                </script>
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