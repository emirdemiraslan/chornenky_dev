import Scroll from 'scroll-js';
/* eslint no-console: 0 */
export default function scrollToElem(startingPoint, targetElement) {
	const endPoint = targetElement.offsetTop;
	const scr = new Scroll(document.body);
	scr.to(0, endPoint, { easing: 'easeInOutCubic', duration: 500 });
}
