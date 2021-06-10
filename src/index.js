import * as $ from 'jquery';
import '../scss/styles.scss';



// A bit of code I found on stackoverflow that makes buttons unfocus after you press them. Handy!
document.addEventListener('click', function(e) { if(document.activeElement.toString() == '[object HTMLButtonElement]'){ document.activeElement.blur(); } });