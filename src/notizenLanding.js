export class NotizenLanding{

    constructor(){

    }

    async threeCards(){
        const cardBod = document.getElementById("cardBody");
        cardBod.innerHTML = ''; // Bestehende Karten entfernen

        for(let i = 0; i < 3; i++){
            
            if(i%3 == 0){
                let cardRow = document.createElement("div");
                cardRow.classList.add("row", "mb-3");
                cardBod.appendChild(cardRow);
            }
            
            let cardCol = document.createElement("div");
            cardCol.classList.add("col");
            cardCol.id = "card" + i;
            cardBod.appendChild(cardCol);

            let marginBorder = document.createElement("div");
            marginBorder.classList.add("p-3", "border", "bg-light", "rounded", "shadow");
            cardCol.appendChild(marginBorder);

            let card = document.createElement("div");
            card.classList.add("card", "justify-content-center");
            marginBorder.appendChild(card);

            let cardInnerBod = document.createElement("div");
            cardInnerBod.classList.add("card-body");
            card.appendChild(cardInnerBod);

            let cardTitle = document.createElement("h5");
            cardTitle.classList.add("card-title");
            cardTitle.innerHTML = "Titel der Notiz";
            cardInnerBod.appendChild(cardTitle);

            let cardText = document.createElement("p");
            cardText.classList.add("card-text");
            cardText.innerHTML = "Beispieltext für den Inhalt der Karte.";
            cardInnerBod.appendChild(cardText);

            let cardLink = document.createElement("a");
            cardLink.classList.add("btn", "btn-custom");
            cardLink.href = "#";
            cardLink.innerHTML = "Weiterlesen";
            cardInnerBod.appendChild(cardLink);
        }
    }
}