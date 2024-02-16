const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll('.menuItem')


const products = [
    {
      id: 1,
      title: "Air Force",
      price: 119,
      colors: [
        {
          code: "black",
          img: "./img/air.png",
        },
        {
          code: "darkblue",
          img: "./img/air2.png",
        },
      ],
    },
    {
      id: 2,
      title: "Air Jordan",
      price: 149,
      colors: [
        {
          code: "lightgray",
          img: "./img/jordan.png",
        },
        {
          code: "green",
          img: "./img/jordan2.png",
        },
      ],
    },
    {
      id: 3,
      title: "Blazer",
      price: 109,
      colors: [
        {
          code: "lightgray",
          img: "./img/blazer.png",
        },
        {
          code: "green",
          img: "./img/blazer2.png",
        },
      ],
    },
    {
      id: 4,
      title: "Crater",
      price: 129,
      colors: [
        {
          code: "black",
          img: "./img/crater.png",
        },
        {
          code: "lightgray",
          img: "./img/crater2.png",
        },
      ],
    },
    {
      id: 5,
      title: "Hippie",
      price: 99,
      colors: [
        {
          code: "gray",
          img: "./img/hippie.png",
        },
        {
          code: "black",
          img: "./img/hippie2.png",
        },
      ],
    },
  ];
  
  let choosenProduct = products[0];

  const currentProudectImg = document.querySelector(".productImg");
  const currentProudectTitle = document.querySelector(".productTitle");
  const currentProudectPrice = document.querySelector(".productPrice");
  const currentProudectColor = document.querySelectorAll(".color");
  const currentProudectSize = document.querySelectorAll(".size"); 
  

menuItems.forEach((item,index) =>{
    item.addEventListener("click", ()=>{
        //changing the wrapper dynamicly
        wrapper.style.transform = `translateX(${-100 * index}vw)`;

        //change the choosen products\
        choosenProduct = products[index]

        //change text of current product
        currentProudectTitle.textContent = choosenProduct.title;
        currentProudectPrice.textContent = `$` + choosenProduct.price;
        currentProudectImg.src = choosenProduct.colors[0].img;
        currentProudectColor.forEach((color,index)=>{
            
            //assiging the color to the page
                color.style.backgroundColor = choosenProduct.colors[index].code;
        })
    })
});



currentProudectColor.forEach((color,index)=>{
    color.addEventListener('click',()=>{
        currentProudectImg.src = choosenProduct.colors[index].img
    });
});

currentProudectSize.forEach((size,index)=>{
    size.addEventListener('click',()=>{
        currentProudectSize.forEach((size)=>{
            size.style.backgroundColor = 'white'
            size.style.color = 'black'
        });
        size.style.backgroundColor = 'black'
        size.style.color = 'white'

    });
});

//for the payment page pop-up

const productButton = document.querySelector(".productButton");
const payment = document.querySelector('.payment');
const close = document.querySelector(".close");

productButton.addEventListener("click", ()=>{
  payment.style.display="flex"
})

close.addEventListener("click", ()=>{
  payment.style.display="none"
})