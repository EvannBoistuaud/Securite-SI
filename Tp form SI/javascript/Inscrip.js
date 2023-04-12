
function validation() {
    let valide = true;

    //Gestion du Nom
    let Nom = document.getElementById("nom");
    if (Nom.value.length >= 3 && Nom.value.length <= 100 && /^[a-zA-ZÀ-ÿ]+$/.test(Nom.value) == true) {
        Nom.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelNom").style.color = "#04AA6D";
        document.getElementById("errornom").style.visibility = "hidden";
        document.getElementById("errornom").style.display = "none";

    } else {
        Nom.style.borderBottomColor = " red";
        document.getElementById("labelNom").style.color = "red";
        document.getElementById("errornom").style.visibility = "visible";
        document.getElementById("errornom").style.display = "block";
        valide = false;
    }
    //Gestion du Prenom
    let Prenom = document.getElementById("prenom");
    if (Prenom.value.length >= 3 && Prenom.value.length <= 100 && /^[a-zA-Z ]+$/.test(Prenom.value) == true) {
        Prenom.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelPrenom").style.color = "#04AA6D";
        document.getElementById("errorprenom").style.visibility = "hidden";
        document.getElementById("errorprenom").style.display = "none";
    } else {
        Prenom.style.borderBottomColor = " red";
        document.getElementById("labelPrenom").style.color = "red";
        document.getElementById("errorprenom").style.visibility = "visible";
        document.getElementById("errorprenom").style.display = "block";
        valide = false;
    }

    //Gestion de l'email
    let Mail = document.getElementById("mail");
    if (/^[^\s@]+@[A-Za-z0-9-]+.[A-Za-z0-9]+$/.test(Mail.value) == true) {
        Mail.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelMail").style.color = "#04AA6D";
        document.getElementById("errormail").style.visibility = "hidden";
        document.getElementById("errormail").style.display = "none";
    } else {
        Mail.style.borderBottomColor = " red";
        document.getElementById("labelMail").style.color = "red";
        document.getElementById("errormail").style.visibility = "visible";
        document.getElementById("errormail").style.display = "block";
        valide = false;
    }
    //Gestion du Mot de passe
    let Mdp = document.getElementById("mdp");
    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(Mdp.value) == true) {
        Mdp.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelMdp").style.color = "#04AA6D";
        document.getElementById("errormdp").style.visibility = "hidden";
        document.getElementById("errormdp").style.display = "none";
    } else {
        Mdp.style.borderBottomColor = " red";
        document.getElementById("labelMdp").style.color = "red";
        document.getElementById("errormdp").style.visibility = "visible";
        document.getElementById("errormdp").style.display = "block";
        valide = false;
    }
    //Confirmation du Mot de passe
    let ConfMdp = document.getElementById("confmdp");
    if (ConfMdp.value == Mdp.value && ConfMdp.value.length >= 6 && ConfMdp.value.length <= 20) {
        ConfMdp.style.borderBottomColor = " #04AA6D";
        document.getElementById("labelConfMdp").style.color = "#04AA6D";
        document.getElementById("errorconf").style.visibility = "hidden";
        document.getElementById("errorconf").style.display = "none";
    } else {
        ConfMdp.style.borderBottomColor = " red";
        document.getElementById("labelConfMdp").style.color = "red";
        document.getElementById("errorconf").style.visibility = "visible";
        document.getElementById("errorconf").style.display = "block";
        valide = false;
    }

    return valide;

}
