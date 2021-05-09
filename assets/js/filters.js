
window.onload = () => {
    const FiltersForm = document.querySelector("#filtersTag");
    
    //on boucle sur les input
    
 document.querySelectorAll("#filtersTag input").forEach(input => {
     input.addEventListener("change", () => {
         // on intercepte les clics
         // on recupère les données du form
         const Form = new FormData(FiltersForm);
         
         //on fabrique l'url
         const Params = new URLSearchParams()
         
         Form.forEach((value, key) => {
             Params.append(key, value);
         });
         
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
