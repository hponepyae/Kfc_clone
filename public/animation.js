 const text = document.querySelector('.koko');
 const textload = () => {
     setTimeout(() => {
         text.textContent = "Order now ...";
     }, 0);
     setTimeout(() => {
         text.textContent = "Deliver fast ...";
     }, 4000);
     setTimeout(() => {
         text.textContent = "Fresh & clean ...";
     }, 8000);
 }
 textload();
 setInterval(textload, 12000);