// noinspection JSUnresolvedVariable

window.onload = function () {
    // select the timer element
    let timer = document.getElementById('timer');
    timer.className = 'hidden';

    let full = parseInt(scenarioJson.time);

    //select the choices elements
    let choices = document.getElementsByClassName('choices');

    // set i value
    let i = null;
    if (scenarioJson.time !== null) {
        i = parseInt(scenarioJson.time)
    }
    // if i isn't null run the timer
    if (i !== null) {
        // add value of i into page and make visible
        /*timer.innerText = i.toString();*/
        timer.className = 'card-text';

        let percentage = 100;


        // function to update every second
        let intervalID = setInterval(function () {
            i--;
            /*timer.innerText = i.toString();*/
            percentage = (i / full) * 100;

            // if i hits zero > stop timer > click default choice
            if (i <= 0) {
                stopTimer(intervalID);
                clickDefaultChoice(choices);
            }
        }, 1000);
    }
    timer.animate([
        {
        width: '100%',
        backgroundColor: 'green',
    },
        {
            offset: 0.5,
            width: '50%',
            backgroundColor: 'yellow',

        },
        {
            width: '0',
            backgroundColor: 'red',
        }], {duration: full*1000})
    // stop interval timer
    function stopTimer(intervalID) {
        clearInterval(intervalID);
    }

    // click the given default choice
    function clickDefaultChoice(choices) {
        timer.remove();
        // see if there is a given default choice, then set up the route for it
        if (scenarioJson.default_choice !== null && defaultChoice !== null) {
            let a = document.createElement("a");
            a.href = route('scenario.show', {
                story: scenarioJson.story_id, //story id,
                scenario: defaultChoice.scenario_id,// next scenario id,
                madeChoice: defaultChoice.id // default choice id
            });

            // click the created link
            a.click();

        } else {
            // if there is time but no default choice given, pick first choice
            choices[0].click();
        }
    }
}

