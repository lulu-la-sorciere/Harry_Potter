const app = {
    init:function(){
      // Verification uploading of js file
      console.log('Oui, mon fichier JS a bien été "inclu"');  

      // Recovery of button element
      const buttonMenu = document.getElementById('header__icon');

      //
      buttonMenu.addEventListener('click', app.handleClickOnButtonMenu);
    },

    handleClickOnButtonMenu: function(evt){
        evt.preventDefault();

        const clickOnButtonMenu = evt.currentTarget;
        console.log(clickOnButtonMenu);

        const body = document.getElementsByName('body');
        console.log(body);
        
       
    }
}


document.addEventListener('DOMContentLoaded', app.init);