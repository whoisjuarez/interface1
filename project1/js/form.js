const myForm = document.querySelector("#contact");

myForm.addEventListener("submit", (e) => {
    //prevent from sending out of html
    e.preventDefault();
    
        let url = "php/form.php";
        let formData = new FormData(myForm);

        fetch(url, { method: "POST", body: formData })
         .then((res) => {
            return res.text();
         })
         .then((body) => {
            console.log(body);
         })
});