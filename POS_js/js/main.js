'use strict';

let cart = [];
let artigo_atual = {};
let id_atualizar = 0;
let total = 0;
let info = {
    'comidas': {
        'img': 'comidas.png',
        'conteudos': [
            {
                'nome': 'Hamburguer',
                'img': 'hamburguer.png',
                'preco': 6.50
            },
            {
                'nome': 'Cachorro do Mauricio',
                'img': 'Cachorro.png',
                'preco': 4.50
            },
            {
                'nome': 'Salada',
                'img': 'Salada.png',
                'preco': 4.00
            },
            {
                'nome': 'Bife',
                'img': 'bife.png',
                'preco': 10.00
            },
            {
                'nome': 'Lasanha',
                'img': 'lasagna.png',
                'preco': 8.00
            },
            {
                'nome': 'Pizza',
                'img': 'Pizza.png',
                'preco': 12.00
            }
        ]
        
    },
    'bebidas': {
        'img': 'bebidas.png',
        'conteudos': [
            {
                'nome': 'Água',
                'img': 'agua.png',
                'preco': 0.70
            },
            {
                'nome': 'Coca-Cola',
                'img': 'cola.png',
                'preco': 1.00
            },
            {
                'nome': 'Fanta',
                'img': 'fanta.png',
                'preco': 1.00
            },
            {
                'nome': 'Sprite',
                'img': 'sprite.png',
                'preco': 1.00
            },
            {
                'nome': 'Coca-Cola 0',
                'img': 'cola0.png',
                'preco': 1.00
            }
        ]
    },
    'cafetaria': {
        'img': 'Cafeteria.png',
        'conteudos': [
            {
                'nome': 'Café',
                'img': 'cafe.png',
                'preco': 0.70
            },
            {
                'nome': 'Galão',
                'img': 'galao.png',
                'preco': 0.80
            },
            {
                'nome': 'Capuccimo',
                'img': 'capucino.png',
                'preco': 1.20
            },


        ]
    },
    'sandes':{
        'img': 'Sandes.png',
        'conteudos':[
            {
                'nome':'Tosta Mista',
                'img': 'mista.png',
                'preco':2.50
            },
            {
                'nome':'Sandes atum',
                'img':'atum.png',
                'preco':3.00
            },
            {
                'nome':'Sandes frango',
                'img':'frango.png',
                'preco':3.00
            }
        ]
    },
    'alcoolicas':{
        'img': 'alcoolicas.png',
        'conteudos':[
            {
                'nome':'Cerveja',
                'img': 'cerveja.png',
                'preco':1.00
            },
            {
                'nome':'Copo de Vinho',
                'img':'vinho.png',
                'preco':1.00
            },
            {
                'nome':'Sidra',
                'img':'sidra.png',
                'preco':1.20
            }
        ]
    },
    'sobremesas':{
        'img': 'Sobremesas.png',
        'conteudos':[
            {
                'nome':'Gelado',
                'img': 'gelado.png',
                'preco':1.50
            },
            {
                'nome':'Mousse de Chocolate',
                'img':'musse.png',
                'preco':3.00
            },
            {
                'nome':'Bolo de Chocolate',
                'img':'bolo.png',
                'preco':3.20
            }
        ]
    }
    
};

let categorias = Object.keys(info);
console.log(categorias);


/* <div class="grid-item">
    <div class="top">
        <div class="image">
            <img src="img/comidas.png" alt="">
        </div>
    </div>
    <div class="bottom">
        <h3>Comidas</h3>
        <img src="img/arrow-right-bold.png" alt="">
    </div>
</div> */

function showCategories(){
    let elementos = Array.from(document.getElementsByClassName("produto"));
    
    for(let i =0; i<elementos.length; i++){
        elementos[i].remove();
    }

    for(let i = 0; i < categorias.length; i++) {
        let div = document.createElement("div")
        
        div.classList.add("grid-item");
        div.classList.add("cat");
    
        let bottom = document.createElement("div");
    
        bottom.classList.add("bottom");
    
        let h3 = document.createElement("h3");
    
        h3.innerHTML = categorias[i];
        let img_bottom = document.createElement("img");
        img_bottom.src = 'img/arrow-right-bold.png';
    
        bottom.appendChild(h3);
        bottom.appendChild(img_bottom);
    
        let top = document.createElement("div");
    
        top.classList.add("top");
    
        let image_div = document.createElement("div");
    
        image_div.classList.add("image");
    
        let img = document.createElement("img");
    
        img.src = `img/${info[categorias[i]]['img']}`;
    
    
        image_div.appendChild(img);
        top.appendChild(image_div);
    
        div.appendChild(top);
        div.appendChild(bottom);
    
        div.addEventListener('click', function(){
            display(categorias[i]);
        });
        
    
        document.querySelectorAll(".lista")[0].parentNode.insertBefore(div, document.querySelectorAll(".lista")[0]);
    }
    
}

/* <div class="grid-item produto">
    <div class="top">
        <img src="img/hamburguer.png" alt="">
    </div>
    <div class="bottom">
        <p>hamburguer</p>
        <h3>9.99 €</h3>
        <div class="add">
            +
        </div>
    </div>
</div> */

function display(categoria) {
    let elementos = Array.from(document.getElementsByClassName("cat"));

    for(let i=0; i<elementos.length; i++) {
        elementos[i].remove();
    }

    let conteudos = info[categoria]['conteudos'];
    console.log(conteudos);
    for(let i = 0; i < conteudos.length; i++){
        let div = document.createElement("div")
    
        div.classList.add("grid-item");
        div.classList.add("produto");

        let bottom = document.createElement("div");

        bottom.classList.add("bottom");

        let p = document.createElement("p");
        
        p.innerHTML = conteudos[i]['nome'];

        let h3 = document.createElement("h3");

        h3.innerHTML = `${conteudos[i]['preco'].toFixed(2)}€`;

        let add = document.createElement("div");
        
        add.classList.add('add');
        add.innerHTML = "+";

        bottom.appendChild(p);
        bottom.appendChild(h3);

        add.addEventListener('click', (e) => {
            if(e.target === document.querySelector(".inner"))
                return;
            
            let modal = document.getElementsByClassName("modal")[0];
            
            artigo_atual['img'] = conteudos[i]['img'];
            artigo_atual['preco'] = conteudos[i]['preco'];
            artigo_atual['nome'] = conteudos[i]['nome'];

            document.querySelector(".modal .inner img").src=`img/${conteudos[i]['img']}`;
            document.querySelector(".modal .inner .table p").innerHTML = `${conteudos[i]['preco']}€`;
            document.querySelector(".modal .inner h2").innerHTML = `${conteudos[i]['nome']}`;
            document.querySelector(".modal .inner #adicionar").style = "display: flex";
            document.querySelector(".modal .inner #atualizar").style = "display: none";

            modal.classList.toggle("show");
        });
        bottom.appendChild(add);

        let top = document.createElement("div");

        top.classList.add("top");


        let img = document.createElement("img");

        img.src = `img/${conteudos[i]['img']}`;

        top.appendChild(img);

        div.appendChild(top);
        div.appendChild(bottom);
        document.querySelectorAll(".lista")[0].parentNode.insertBefore(div, document.querySelectorAll(".lista")[0]);
    }
}

function addCart(elemento){
    cart.push(elemento);

    updateCart();
    
}

function updateCart(){
    document.getElementsByClassName('lista')[0].innerHTML="";
    total = 0
    for(let i=0; i<cart.length; i++){
        let art = document.createElement("div");

        art.classList.add("item")
        art.innerHTML = `
        <span>${cart[i]['nome']}</span>
        <span>${cart[i]['quantidade']}x</span>
        <span>${cart[i]['preco']}€</span>
        <button class="editar"><img src=\"img/edit.png\"></button>
        <button class="apagar"><img src=\"img/delete.png\"></button>
        `;

        document.getElementsByClassName('lista')[0].appendChild(art);
        
        total += (parseInt(cart[i]['quantidade']) * parseFloat(cart[i]['preco']));
    }
    document.getElementById("total").innerHTML = `${total.toFixed(2)}€`;
    

    refreshEdits();
    refreshDeletes();
}

function refreshEdits(){
    let edits = Array.from(document.getElementsByClassName("editar"));

    for(let i = 0; i < edits.length; i++){
        edits[i].addEventListener('click', (e)=> {
            document.querySelector(".modal .inner img").src=`img/${cart[i]['img']}`;
            document.querySelector(".modal .inner .table p").innerHTML = `${cart[i]['preco']}€`;
            document.querySelector(".modal .inner h2").innerHTML = `${cart[i]['nome']}`;
            document.querySelector(".modal .inner #quantidade").innerHTML = `${cart[i]['quantidade']}`;
            document.querySelector(".modal .inner #adicionar").style = "display: none";
            document.querySelector(".modal .inner #atualizar").style = "display: flex";

            quantidade = parseInt(cart[i]['quantidade']);

            id_atualizar = i;
            modal[0].classList.toggle("show");
        })
    }
}
function refreshDeletes(){
    let edits = Array.from(document.getElementsByClassName("apagar"));

    for(let i = 0; i < edits.length; i++){
        edits[i].addEventListener('click', (e)=> {
            cart.splice(i,1);
            updateCart();
        })
    }
}

let modal = Array.from(document.getElementsByClassName("modal"));

for(let i =0; i< modal.length; i++){
    modal[i].addEventListener('click', (e) => {
    
        if(e.target !== modal[i]){
            return;
        }
        modal[i].classList.toggle("show");
    })
}

let close = document.getElementsByClassName("close");

for(let i =0; i<close.length; i++){
    close[i].addEventListener('click', (e) => {
        modal[i].classList.toggle("show");
    })
}

let quantidade = parseInt(document.getElementById("quantidade").innerHTML);

document.getElementById("mais").addEventListener('click', (e) => {
    quantidade = quantidade+1;
    
    if(quantidade <= 0)
        quantidade = quantidade+1;
    document.getElementById("quantidade").innerHTML = quantidade;
})

document.getElementById("menos").addEventListener('click', (e) => {
    quantidade = quantidade-1;
    
    if(quantidade <= 0)
        quantidade = quantidade+1;

    document.getElementById("quantidade").innerHTML = quantidade;
})

document.getElementById("adicionar").addEventListener('click', (e) => {
    let artigo = {
        'quantidade': quantidade,
        'nome': artigo_atual['nome'],
        'preco': artigo_atual['preco'].toFixed(2),
        'img': artigo_atual['img']
    };

    quantidade=1;
    document.getElementById('quantidade').innerHTML = quantidade;

    addCart(artigo)
});

document.getElementById("atualizar").addEventListener('click', (e) => {

    let artigo = {
        'quantidade': quantidade,
        'nome': artigo_atual['nome'],
        'preco': artigo_atual['preco'].toFixed(2),
        'img': artigo_atual['img']
    };
    cart[id_atualizar] = artigo;

    updateCart()
});

showCategories();

document.getElementById('logo').addEventListener('click', (e) => {
    showCategories();
});

document.getElementById("pagar").addEventListener('click', (e)=> {
    let modal = document.getElementsByClassName('modal')[1];

    modal.classList.toggle("show");

    for(let i=0; i<cart.length; i++){
        let div = document.createElement("div");

        div.innerHTML= `<span>${cart[i]['nome']}</span>
        <span>${cart[i]['quantidade']}x</span>
        <span>${cart[i]['preco']}€</span>`;

        document.getElementById('talao').appendChild(div);
    }
    document.getElementById('pagamento-total').innerHTML= `${total.toFixed(2)}€`;
});
document.getElementById("confirmar").addEventListener('click', (e) => {
    location.reload();
});
