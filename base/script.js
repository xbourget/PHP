function calculerprime() {

    age = parseInt(document.getElementById('age').value, 10)
    permis = parseInt(document.getElementById('anneepermis').value, 10)
    nombre_accidents = parseInt(document.getElementById('accident').value, 10)
    ancienClient = document.getElementById('check')
    compteur_points_malus = nombre_accidents

    if (nombre_accidents <= 3) {
        if (age < 25) {
            compteur_points_malus += 1
        }

        if (permis < 2) {
            compteur_points_malus += 1
        }

        if (document.getElementById('choixGarer').value === 'garage') {
            compteur_points_malus -= 1
        } else if (document.getElementById('choixGarer').value === 'dehors') {
            compteur_points_malus += 1
        }

        if (ancienClient.checked) {
            compteur_points_malus -= 1
        }

        switch (compteur_points_malus) {
            case 3:
                document.getElementById("résultat").value = `Tarif marron`
                document.getElementById("résultat").style.color = "brown";
                break;
            case 2:
                document.getElementById("résultat").value = `Tarif rouge`
                document.getElementById("résultat").style.color = "red";
                break;
            case 1:
                document.getElementById("résultat").value = `Tarif orange`
                document.getElementById("résultat").style.color = "orange";
                break;
            case 0:
                document.getElementById("résultat").value = `Tarif vert`
                document.getElementById("résultat").style.color = "green";
                break;
            case -1:
                document.getElementById("résultat").value = `Tarif bleu`
                document.getElementById("résultat").style.color = "blue";
                break;
            case -2:
                document.getElementById("résultat").value = `Tarif or`
                document.getElementById("résultat").style.color = "gold";
                break;
            default:
                document.getElementById("résultat").value = `Refus`
        }       document.getElementById("compteur").innerHTML = compteur_points_malus
    } else {
        document.getElementById("compteur").innerHTML = "vous n'avez pas renseigné tout ce qu'il fallait ou vous avez eu trop d'accidents, vous êtes refusé"
        document.getElementById("résultat").value = `Aucun`
    }
}