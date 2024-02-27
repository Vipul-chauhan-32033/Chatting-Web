const form = document.querySelector(".typing-area"),
inputField = document.querySelector(".input-field"),
sendBtn = document.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) =>{
    e.preventDefault();
}

sendBtn.onclick =  ()=>{
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "php/insert_chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               inputField.value = "";         
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}


setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "php/get_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                    chatBox.innerHTML = data;
                // console.log(data);

            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}, 500);