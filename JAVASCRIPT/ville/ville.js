const Ville1 = {
  nom: "Paris",
  lat: 48.8534,
  long: 2.3488,
};

const Ville2 = {
  nom: "Bordeaux",
  lat: 44.8333,
  long: -0.5667,
};

const Ville3 = {
  nom: "Dunkerque",
  lat: 51.035,
  long: 2.378,
};

const tab = [Ville1, Ville2, Ville3];

function affichageCoordonees(tab) {
  for (let value of tab) {
    console.log(
      "-----" +
        value.nom +
        "-----" +
        "\n" +
        "Latitude : " +
        value.lat +
        "\n" +
        "Longitude : " +
        value.long +
        "\n"
    );
  }
}
console.log(affichageCoordonees(tab));
