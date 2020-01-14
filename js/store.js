function getCartTotal(){
  var cartItemContainer = document.getElementsByClassName('cart-items')[0]
  var cartRows = cartItemContainer.getElementsByClassName('cart-row')
  var total = 0
  var taxTotal = 0
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i]
    var priceElement = cartRow.getElementsByClassName('cart-price')[0]
    var price = parseFloat(priceElement.innerText.replace('£',''))
    total = total+price
  }
  total = Math.round(total*100)/100
  taxTotal = total+(total*.20)
  document.getElementsByClassName('cart-total-price')[0].innerText = '£' + total
  document.getElementsByClassName('cart-total-price-tax')[0].innerText = '£' + taxTotal
}
getCartTotal()
