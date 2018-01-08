/* eslint no-console: 0 */
import * as scrollTo from '../utils/scrollTo';


const but = document.getElementById('toDown');

but.onclick = (e) => {
	const tar = e.currentTarget.getAttribute('data-target');
    /*
    const startingPoint = window.pageYOffset;
	console.log(startingPoint);
	const targetElement = document.getElementById(tar);
    scrollToElem(startingPoint, targetElement);
    */
	console.log(`tar: ${tar}`);
	scrollTo.scrollToElement(tar, 500);
};

export default but;
