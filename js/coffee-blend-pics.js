var ImageArray = 
          [
            'url("/assets/images/zakaz/nochoice.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/espresso.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/crema.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/arabica.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/nero.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/oro.png") no-repeat 50% 0',
            'url("/assets/images/zakaz/platino.png") no-repeat 50% 0'
          ];

var form = document.forms[0];
var formZakaz = document.forms[1];
var select = form.elements.cofe;
select.addEventListener('change', setBackground);                

function setBackground() {

   var currentSel = select.value;
   var ImageChange = document.querySelector('.ImageChange');
   var myPrice = document.querySelector('.myprice p span');

   switch( currentSel ) {

      case '0':
          ImageChange.style.background = ImageArray[0];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = 'не выбрано';
          break;

      case '1':
          ImageChange.style.background = ImageArray[1];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = Price + ' <i class="fa fa-rub"></i>/мес';
          break;

      case '2':
          ImageChange.style.background = ImageArray[2];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = Price + ' <i class="fa fa-rub"></i>/мес';
          break;

      case '3':
          ImageChange.style.background = ImageArray[3];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = (Price + Price * 0.05) + ' <i class="fa fa-rub"></i>/мес';
          break;

      case '4':
          ImageChange.style.background = ImageArray[4];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = (Price + Price * 0.05) + ' <i class="fa fa-rub"></i>/мес';
          break;

      case '5':
          ImageChange.style.background = ImageArray[5];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = (Price + Price * 0.1) + ' <i class="fa fa-rub"></i>/мес';
          break;

      case '6':
          ImageChange.style.background = ImageArray[6];
          ImageChange.style.backgroundSize = 'contain';
          myPrice.innerHTML = (Price + Price * 0.1) + ' <i class="fa fa-rub"></i>/мес';
          break;

      default:
          return;
    }

    var options = select.children;

    var currOption = options[currentSel].innerHTML;

    var hiddenInput = formZakaz.elements.cofe_type;
    hiddenInput.value = currOption;           

}
              