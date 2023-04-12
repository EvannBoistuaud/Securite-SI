
function validation() {
    let valide = true;


    //Gestion de l'email
    let Mail = document.getElementById("mail");
    if (/^[^\s@]+@[A-Za-z0-9-]+.[A-Za-z0-9]+$/.test(Mail.value) == true) {
        Mail.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelMail").style.color = "#04AA6D";
    } else {
        Mail.style.borderBottomColor = " red";
        document.getElementById("labelMail").style.color = "red";
        valide = false;
    }
    //Gestion du Mot de passe
    let Mdp = document.getElementById("mdp");
    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(Mdp.value) == true) {
        Mdp.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelMdp").style.color = "#04AA6D";
    } else {
        Mdp.style.borderBottomColor = " red";
        document.getElementById("labelMdp").style.color = "red";
        valide = false;
    }
    
    return valide;

}
