
const products = document.querySelectorAll('.product');
	const totalPriceEl = document.querySelector('.total-price');



let totalPrice = 0;


products.forEach(product => {

	const incBtn = product.querySelector('.inc-btn');
	const productCountEl = product.querySelector('.product-count');
	const productPrice = product.querySelector('.product-price').textContent;



	const decBtn = product.querySelector('.dec-btn');
	productCountEl.value = 1;
	totalPrice += +productPrice;
	totalPriceEl.textContent = '$'+totalPrice;

	incBtn.addEventListener('click',()=>{

	
			productCountEl.value =  +productCountEl.value + 1;
		totalPrice += +productPrice;

		totalPriceEl.textContent = '$'+totalPrice;
		
		


	})

	decBtn.addEventListener('click',() => {

	if( +productCountEl.value !== 1) {
		
		productCountEl.value = productCountEl.value - 1;

		totalPrice -= +productPrice;

		totalPriceEl.textContent =  '$'+totalPrice;

	}


	})
})










