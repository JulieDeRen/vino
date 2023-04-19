orientHorizontale() {
    let chaine = "";
    let root = document.documentElement;
    const cartes = this.#domParent.querySelectorAll(".carte");

    cartes.forEach((element) => {
      element.classList.add("horizontale");
      element.firstElementChild.classList.add("horizontale");
      element.firstElementChild.nextElementSibling.classList.add("horizontale");
    });
    root.style.setProperty("--largeur-colonne", "800px");
    return chaine;
  }


  orientVerticale() {
    let chaine = "";
    let root = document.documentElement;

    const cartes = this.#domParent.querySelectorAll(".carte");
    cartes.forEach((element) => {
      element.classList.remove("horizontale");
      element.firstElementChild.classList.remove("horizontale");
      element.firstElementChild.nextElementSibling.classList.remove(
        "horizontale"
      );
    });
    root.style.setProperty("--largeur-colonne", "175px");
    return chaine;
  }