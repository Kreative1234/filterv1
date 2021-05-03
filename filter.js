const filters = document.querySelector("#filters");

filters.addEventListener("input", filterGoods);

function filterGoods() {
  const country = filters.querySelector("#country").value,
    sizes = [...filters.querySelectorAll("#size input:checked")].map(
      (n) => n.value
    ),
    priceMin = document.querySelector("#price-min").value,
    priceMax = document.querySelector("#price-max").value;

  outputGoods(
    DATA.filter(
      (n) =>
        (!country || n.country === country) &&
        (!sizes.length || sizes.includes(n.size)) &&
        (!priceMin || priceMin <= n.cost) &&
        (!priceMax || priceMax >= n.cost)
    )
  );
  
 
}

function outputGoods(goods) {
  document.getElementById("products").innerHTML = goods
    .map(
      (n) => `
<div class="col-md-4 mb-5">
  <div >
    <div class="view zoom overlay rounded z-depth-2" style="height: 260px;">
      <img class="img-fluid w-100"
        src="${n.image}" alt="Sample">
      <a href="#!">
        <div class="mask">
          <img class="img-fluid w-100"
            src="${n.image}">
          <div class="mask rgba-black-slight"></div>
        </div>
      </a>
    </div>
    <div class="text-center pt-4">
      <h5>${n.name}</h5>
      <p><span class="mr-1"><strong>${n.cost}</strong> ${n.size}</span></p>
    </div>
  </div>
</div>  `
  
  
  
  
   




    )
    .join("");
}

const DATA = [
  {
    sex: "male",
    name: "french style",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/5.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Turkish hudson",
    cost: 1800,
	country: "turkey",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/4.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "pasta girl",
    cost: 1800,
	country: "italy",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/3.jpg",
    size: "L"
  },
  {
    "id": 13,
    sex: "male",
    name: "Italian Skirt",
    cost: 1800,
	country: "italy",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/2.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Рубашка №1",
    cost: 1000,
    country: "france",
    image:
      "http://i.piccy.info/i9/9921ed03bf45751d45447b15e78be751/1566814909/19890/1334636/1.jpg",
    size: "S"
  },
  {
    sex: "male",
    name: "Рубашка №2",
    cost: 1200,
    country: "turkey",
    image:
      "http://i.piccy.info/i9/acc4df9b14e48a42d7cd353e923673e7/1566814962/22015/1334636/2.jpg",
    size: "M"
  },
  {
    sex: "male",
    name: "Рубашка №3",
    cost: 1700,
    country: "china",
    image:
      "http://i.piccy.info/i9/174610be67bfea39f99c956885ae3786/1566815027/25896/1334636/3.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Рубашка №4",
    cost: 2000,
    country: "turkey",
    image:
      "http://i.piccy.info/i9/e2e5c6cb274121b9898b7d45a085130f/1566815049/29582/1334636/4.jpg",
    size: "XL"
  },
  
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 2500,
	country: "turkey",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 900,
	country: "china",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/11.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/10.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy cloths",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/9.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "pho T-shirt",
    cost: 1800,
	country: "china",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/8.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/7.jpg",
    size: "L"
  },
  {
    sex: "male",
    name: "Fantasy T-shirt",
    cost: 1800,
	country: "france",
    image: "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/6.jpg",
    size: "L"
  }
];

outputGoods(DATA);
