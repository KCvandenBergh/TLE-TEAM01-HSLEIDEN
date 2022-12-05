window.onload = function () {
    // select the timer element
    let timer = document.getElementById('timer');
    timer.className = 'hidden';

    //select the choices elements
    let choices = document.getElementsByClassName('choices');

    // set i value
    let i = null;
    if(scenarioJson.time !== null){
        i = parseInt(scenarioJson.time);
    }

    // if i isn't null run the timer
    if( i !== null) {
        // add value of i into page and make visible
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

    // stop interval timer
    function stopTimer(intervalID){
        clearInterval(intervalID);
    }

    // click the given default choice
    function clickDefaultChoice(choices) {
        // TODO: implement a default choice on scenario's with time pressure.
        // see if there is a given default choice, then set up the route for it
        if (scenarioJson.default_choice !== null) {
            let a = document.createElement("a");
            a.href = route('scenario.show', {
                story: '', //story id,
                scenario:'',// next scenario id,
                madeChoice:'' // default choice id
            });

            console.log(a); // sanity check generated url => DELETE on production.
            // click the created link
            a.click();

        } else {
            // TEMP: picks first choice on screen as default
            choices[0].click();
        }
    }
}

