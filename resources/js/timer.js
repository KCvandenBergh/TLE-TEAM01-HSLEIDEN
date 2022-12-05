window.onload = function () {
    // create the timer element
    let timer = document.getElementById('timer');
    let choices = document.getElementsByClassName('choices');
    timer.className = 'hidden';
    let i = null;
    if(scenarioJson.time !== null){
        i = parseInt(scenarioJson.time);
    }

    if( i !== null) {
        // add into page
        timer.innerText = i.toString();
        timer.className = 'card-text';
        // function to update every second
        let intervalID = setInterval(function () {
            i--;
            timer.innerText = i.toString();

            // if i hits zero > stop timer > click default choice
            if (i <= 0) {
                stopTimer(intervalID);
                clickDefaultChoice(choices);
            }
        }, 1000);
    }

    function stopTimer(intervalID){
        clearInterval(intervalID);
    }

    function clickDefaultChoice(choices){
        // TODO: implement a default choice on scenario's with time pressure.
        // TEMP: picks first choice on screen as default
        choices[0].click();
    }
}

