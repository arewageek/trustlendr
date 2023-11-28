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


// 430

function GaugeChart_SetPercent() {
    let pp = document.querySelector(".pointer");
    let random = randInt();
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
    
    console.log("rand" + random);
    console.log(random + 250 + 90);
    // if ran
    document.querySelector("#guage-text").innerHTML = `Your creditscore is ${random + 250 + 90}`
    pp.style.transform = `rotateZ(${random}deg)`;
    console.log("Hellooooo");
}

document.getElementById("form").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("Hello");
    const ID = e.currentTarget.children[6].value
    console.log(e.currentTarget.children[6]);
    if(ID.length === 10 || ID.length === 34){
        closeForm();
        GaugeChart_SetPercent(document.querySelector("#gauge-box"), "90");
        setTimeout(() => {
            openGuage();
        }, 500)
    }
    else{
        document.querySelector("#error-text").innerHTML = "Error! Please input a valid ID"
    }
    e.currentTarget.children[2].value = e.currentTarget.children[4].value = e.currentTarget.children[6].value = "";
});

function footerToggle(footerBtn) {
    $(footerBtn).toggleClass("btnActive");
    $(footerBtn).next().toggleClass("active");
}


