const calculator = document.querySelector('.calculator');
const keys = calculator.querySelector('.calculator-keys');

keys.addEventListener('click', e => {
	if (e.target.matches('calc-button')) {
		alert('Key pressed!');
		console.log('hello!');
	}
})