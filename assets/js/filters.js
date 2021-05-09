
window.onload = () => {
    const FiltersForm = document.querySelector("#filterStatut");
    
    //on boucle sur les input
    
 document.querySelectorAll("#filterStatut input").forEach(input => {
     input.addEventListener("change", () => {
         // on intercepte les clics
         // on recupère les données du form
         const Form = new FormData(FiltersForm);
         console.log(Form)
         //on fabrique l'url
         const Params = new URLSearchParams()
         const key = "statutArticle"
         Form.forEach((value,key) => {
             Params.append(value,key);
         });
         console.log(Params)
         // On récupère l'url active
         const Url = new URL(window.location.href);
         
         // on lance la requête Ajax
         fetch(Url.pathname + "?" + Params.toString() + "&ajax=1", {
             headers: {
                 "X-Requested-With": "XMLHttpRequest"
             }
         }).then(response => 
            response.json()   
         ).then(data => {
             const content = document.querySelector("#content");
             content.innerHTML = data.content;
         }).catch(e => alert(e));
     })
 });
}
