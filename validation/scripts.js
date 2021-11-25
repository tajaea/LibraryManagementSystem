

        
            var books=document.getElementsByClassName('title')
            for (var x=0;x<books.length;x++){
                if(books[x].addEventListener){
                    books[x].addEventListener('click',e=>{
                        console.log(e.target.innerHTML);
                    })
                }else {
                    exit();
                }
            }
        

        