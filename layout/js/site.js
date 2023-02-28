function hello() {
    alert("Welcome to my website");
}

function add(){
    document.write(5+6);
}

function changeColor(where, newColor){
    if (where == "newColor") {
        document.body.style.backgroundColor = newColor;
    }
}

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor=color;
}

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}

// crud function 
function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
    }
}

function crud(){
    let lname=(document.form1.lname.value).trim();
    if(lname.length>15){
        alert("Last Name must not be more than 15 characters");
        return false;
    }
}

function fnameVal() {
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
    }
}