((d) => {
  const handleMadol = () => {
    const listMenu = d.querySelectorAll(".header_item");
    const madol = d.querySelector(".modal");
    const madolBody = d.querySelector(".modal_body");
    const listMadol = d.querySelectorAll(".modal_content");
    const btnMap = d.querySelector("#btn-map");
    listMenu.forEach((menu) => {
      menu.addEventListener("click", function () {
        listMadol.forEach((modal) => (modal.style.display = "none"));
        let madolName = this.dataset.modal;
        madol.style.display = "block";
        d.querySelector(`#${madolName}`).style.display = "block";
      });
    });

    madolBody.addEventListener("click", (e) => {
      if (madolBody==e.target) {
        madol.style.display = "none";
      }
    } );

    btnMap.addEventListener( 'click', function(){
      listMadol.forEach( ( modal ) => ( modal.style.display = "none" ) );
      let madolName = this.dataset.modal;
      d.querySelector(`#${madolName}`).style.display = "block";
    })

  };
  const menuHandel = () => {
    const btnOpen = d.querySelector( '#btnMenu' );
    const menuBody = d.querySelector( '.header_menuBody' );
    const btnClose = d.querySelector( '.btnClose' );
    btnOpen.addEventListener( 'click', () => {
      menuBody.classList.add( 'isShow' );
      btnClose.classList.add( 'isShow' );
    } );
    btnClose.addEventListener( 'click', function() {
      this.classList.remove( 'isShow' );
      menuBody.classList.remove( 'isShow' );

    })
  }
  handleMadol();
  menuHandel();
})(document);
