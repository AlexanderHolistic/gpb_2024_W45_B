export class Basic {
    constructor (){

    }
    initGUI(){
        //

        let div = document.createElement("div");
        div.className="Container";
        document.body.appendChild(div);
        
        let h1 = document.createElement("h1");
        h1.innerText="NotizY"
        div.appendChild(h1);

        let img = document.createElement("img");
        img.src="TODO";
        div.appendChild(img);

        let main = document.createElement("main")
        document.body.appendChild(main);
    }
}