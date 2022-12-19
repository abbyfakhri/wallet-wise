
const updateDiv = ()=>{
    var xhr = new XMLHttpRequest();
    const div = document.getElementById("textbox");
    const previousValue = div.innerHTML;
    xhr.onreadystatechange = () =>{
        if(xhr.readyState === 4 && xhr.status === 200){



            div.innerHTML = xhr.responseText;
            
        }
    }

    xhr.open('POST',"server.php",true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("param1=value1&param2=value2");

    /* button.addEventListener("click",()=>{
        div.innerHTML = previousValue;
    }) */ 

}

const div = document.getElementById("textbox");
const button = document.getElementById("btn");


button.addEventListener("click",updateDiv);


const changeSecondDiv = () =>{
    const secondDiv = document.getElementById("secondDiv");    
    const originalState = secondDiv;


    if(secondDiv == originalState){
        secondDiv.innerHTML = "<h1>this is the second div (after)</h1>";

    }
    else{
        secondDiv.innerHTML = "<h1>another one</h1>";
    }

    secondBtn.removeEventListener("click",changeSecondDiv);
    
}

const secondBtn = document.getElementById("secondBtn");
const secondDiv = document.getElementById("secondDiv");
const previous = secondDiv.innerHTML;

secondBtn.addEventListener("click",()=>{
    
    

    if(secondDiv.innerHTML == previous){
        secondDiv.innerHTML = "<h1>2</h1>";
    }
    else{
        secondDiv.innerHTML = "<h1>1</h1>";
        previous = "<h1>1</h1>";
    }
    
});




