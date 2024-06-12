// C:\xampp\htdocs\College campus\JS\rotating_news.js

document.addEventListener("DOMContentLoaded", () => {
    const concepts = document.querySelectorAll(".concept");
    let activeConceptIndex = 0;

    const showNextConcept = () => {
        if (activeConceptIndex < concepts.length) {
            concepts[activeConceptIndex].classList.add("active");
            activeConceptIndex++;
        }
    };

    concepts.forEach(concept => {
        concept.addEventListener("click", showNextConcept);
    });
});
