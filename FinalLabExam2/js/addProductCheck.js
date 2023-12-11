function productCheck() {
 
    let productName = document.getElementById('productName').value;
    let productPrice = document.getElementById('productPrice').value;
    let productQuantity = document.getElementById('productQualtity').value;
    
    
    let std = {
        'productName': productName,
        'productPrice': productPrice,
        'productQuantity': productQuantity ,

    }

    if(productName==""){
        alert('!!!Please provide Product Name And also check other information');
        return false;
    }
    if(productPrice==""){
        alert('!!!Please provide product Price.');
        return false;
    }
    if(productQuantity==""){
        alert('!!!Please provide Quantity');
        return false;
    }
    
   
}


