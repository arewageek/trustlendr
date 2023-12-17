function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
};

function randInt() {
    return Math.floor(Math.random() * 181) - 90
    // return Math.floor(Math.random() * (800 - 250 + 1)) + 250
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function openGuage() {
    document.getElementById("guage").style.display = "block";
}
function closeGuage() {
    document.getElementById("guage").style.display = "none";
}

// creditScore()


// 430

async function GaugeChart_SetPercent(score) {
    let pp = document.querySelector(".pointer");
    // let random = randInt();

    console.log(score)

    if(!score){
        score = 850
    }
    // random = 20;
    // let rotate;
    // if(random < 275){
    //     rotate = random - 90
    // }
    // else if(random > 275){
    //     rotate = random + 90
    // }
    // else{
    //     rotate = 0
    // }
    
    // console.log("rand" + random);
    console.log(score + 250 + 90);

    const scorePercentage = (score * (180/Math.PI)) 

    console.log(Number(scorePercentage,2))
    // if ran
    document.querySelector("#guage-text").innerHTML = `Your creditscore is ${score}`
    pp.style.transform = `rotateZ(${scorePercentage}deg)`;
    console.log("Hellooooo");
}

document.getElementById("form").addEventListener("submit", async (e) => {
    e.preventDefault();
    console.log("Hello");
    const ID = e.currentTarget.children[6].value

    // console.log(ID)
    
    const response = await fetch('/api/credit/score/' + ID)
    const res = await response.json()
    const score = await res.message[0].score
    const msg = await res.message

    if(res.status == 404){
        alert(msg)
    }

    else{
        // console.log(response, res, score)
        GaugeChart_SetPercent(score);
        openGuage();
        
        // console.log(e.currentTarget.children[6]);
        if(ID.length === 10 || ID.length === 34){
            closeForm();
            setTimeout(() => {
            }, 500)
        }
        else{
            document.querySelector("#error-text").innerHTML = "Error! Please input a valid ID"
        }
        // e.currentTarget.children[2].value = e.currentTarget.children[4].value = e.currentTarget.children[6].value = "";
    }
    
});

function footerToggle(footerBtn) {
    $(footerBtn).toggleClass("btnActive");
    $(footerBtn).next().toggleClass("active");
}


