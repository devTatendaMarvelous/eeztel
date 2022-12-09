const allTotal = document.querySelector('.allTotal')
products = document.querySelectorAll('.product')
    
const calculate = () => {
     let grandTotal = 0
     

     products.forEach((element) => {
          console.log(element.children[1].value)
           const quantity = document.querySelector('.qty')
               price = document.querySelector('.price')
          total = document.querySelector('.total')
          
          let productTotal = Number(price.value) * Number(quantity.value)
          
          total.value = productTotal
          grandTotal += productTotal
          console.log(typeof(grandTotal))
          allTotal.value = grandTotal
     })
     
         
  

     
}
