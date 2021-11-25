

        
            var books=document.getElementsByClassName('title')
            for (var x=0;x<books.length;x++){
                if(books[x].addEventListener){
                    books[x].addEventListener('click',sendName)
                }else {
                    exit();
                }
            }

           function sendName(event){
                 return event.target.innerHTML
            }
        

        