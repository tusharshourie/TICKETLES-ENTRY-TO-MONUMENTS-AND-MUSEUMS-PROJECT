const product = [
    {
        id: 0,
        image: 'pictures/4.jpg',
        title: 'Taj Mahal',
        price: 2000,
    },
    {
        id: 1,
        image: 'pictures/3.jpg',
        title: 'Red Fort',
        price: 2300,
    },
    {
        id: 2,
        image: 'image/qutubminar.jpg',
        title: 'Qutub Minar',
        price: 1000,
    },
    {
        id: 3,
        image: 'pictures/purana-qila-museum_DSVXQO.webp',
        title: 'Purana Quila Museum',
        price: 600,
    },
    {
        id: 4,
        image: 'pictures/suntemple.jpg',
        title: 'Sun Temple',
        price: 600,
    },
    {
        id: 5,
        image: 'pictures/Jantar-Mantar.jpeg',
        title: 'Jantar Mantar',
        price: 600,
    },
    {
        id: 6,
        image: 'pictures/rambagh-garden.jpg',
        title: 'Ram Bagh',
        price: 600,
    },
    {
        id: 7,
        image: 'pictures/hampi.jpg',
        title: 'Group of Monuments - Hampi',
        price: 600,
    },
    {
        id: 8,
        image: 'pictures/humayuntomb.jpg',
        title: 'Humayun Tomb',
        price: 600,
    },
// starts here
    {
        id: 9,
        image: 'pictures/fatehpur-sikri-fort-complex.jpg',
        title: 'Fatehpur Sikri',
        price: 600,
    },

    {
        id: 10,
        image: 'pictures/Ajanta-Ellora-Caves1-architecture.jpg',
        title: 'Ajanta and Ellora Caves',
        price: 600,
    },

    {
        id: 11,
        image: 'pictures/Khajuraho-Group-of-Monuments-ili-133-ogimg.jpg',
        title: 'Khajuraho Group of Monuments',
        price: 600,
    },

    {
        id: 12,
        image: 'pictures/Brihadeeswarar-Temple-Tamil-Nadu.jpg',
        title: 'Brihadeeswarar Temple',
        price: 600,
    },

    {
        id: 13,
        image: 'pictures/bodh_gaya.jpeg',
        title: 'Bodh Gaya',
        price: 600,
    },

    {
        id: 14,
        image: 'pictures/Jaisalmer-Fort_600x400.jpg',
        title: 'Jaisalmer Fort',
        price: 600,
    },

    {
        id: 15,
        image: 'pictures/Groups-of-Monuments-at-Mahabalipuram-1024x675.jpg',
        title: 'Mahabalipuram Group of Monuments',
        price: 600,
    },

    {
        id: 16,
        image: 'pictures/chittorgarh.jpg',
        title: 'Chittorgarh Fort',
        price: 600,
    },

    {
        id: 17,
        image: 'pictures/Charminar.jpg',
        title: 'Charminar',
        price: 600,
    },


    {
        id: 18,
        image: 'pictures/vijay-stambh3.jpg',
        title: 'Vijay Stambh',
        price: 600,
    },

    {
        id: 19,
        image: 'pictures/Kanch_Mahal.jpg',
        title: 'Kanch Mahal',
        price: 600,
    },
    
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Rs. ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Rs. "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "Rs. "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>Rs. ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}