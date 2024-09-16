import Route from "./Route.js";
//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/lezoo", "Le zoo", "/pages/lezoo.html"),
    new Route("/nosanimaux", "Nos animaux", "/pages/nosanimaux.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
    new Route("/tarifsetservices", "Tarifs et Services", "/pages/tarifsetservices.html"),
];
//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";