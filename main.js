const pTable= document.getElementById('products-table');




pTable.addEventListener('click', (e)=>{
    if(e.target && e.target.matches('a.updateBtn')){
        e.preventDefault();
    let id= e.target.getAttribute("id");
    console.log(id);
    editUser(id);

    }
  });
  
  const editUser = async (id)=>{
    const data = await fetch(`readproduct.php?edit=1&id=${id}`,{
        method: 'GET',
    });
    const response = await data.json();
    console.log( response);



    document.getElementById("id").value=response.id;
    document.getElementById("name").value=response.uname;
    document.getElementById("price").value=response.uprice;
    document.getElementById("description").value=response.description;
    document.getElementById("brand").value=response.brand;
    document.getElementById("image").value=response.image;

};