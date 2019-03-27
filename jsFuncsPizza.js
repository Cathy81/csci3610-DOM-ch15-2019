   function setPizzaItem(pizza)
   {
  var pizzaName=pizza.split("|")[1];
  localStorage.setItem(pizzaName, pizza); //in case it is the first time to add to the cart
    }

    function setPizzaQuantity(pizza)
   {
  var pizzaName=pizza.split("|")[1];
  var quantityName="quan"+pizzaName;
    if(localStorage.getItem(quantityName)!=null)
      var quantity=parseInt(localStorage.getItem(quantityName))+1;
    else
      quantity=1;
    
    localStorage.setItem(quantityName,quantity);
    }

   function clearCart()
   {
    localStorage.clear();
    updateBadge();

   }

   function getItemNumber()
   {
      var items = localStorage.getItem('quanTotal');
      if(items == null)
         cartItems=0;
       else
         cartItems=items;
     return parseInt(cartItems);
   }

   function updateBadge()
   {
    var cartItems=getItemNumber();
    document.getElementById("bNumber").innerHTML=cartItems;
   }


  


