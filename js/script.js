((d, $) => {
  const handleMadol = () => {
    const listMenu = d.querySelectorAll(".header_item");
    const madol = d.querySelector(".modal");
    const madolBody = d.querySelector(".modal_body");
    const listMadol = d.querySelectorAll(".modal_content");
    const btnMap = d.querySelector("#btn-map");
    const btnClose = d.querySelector("#btnClone");
    listMenu.forEach((menu) => {
      menu.addEventListener("click", function () {
        listMadol.forEach((modal) => (modal.style.display = "none"));
        let madolName = this.dataset.modal;
        madol.style.display = "block";
        d.querySelector(`#${madolName}`).style.display = "block";
      });
    });

    madolBody.addEventListener("click", (e) => {
      if (madolBody == e.target) {
        madol.style.display = "none";
      }
    });

    btnMap.addEventListener("click", function () {
      listMadol.forEach((modal) => (modal.style.display = "none"));
      let madolName = this.dataset.modal;
      d.querySelector(`#${madolName}`).style.display = "block";
    });
    btnClose.addEventListener("click", (e) => {
      madol.style.display = "none";
    });
  };
  const menuHandel = () => {
    const btnOpen = d.querySelector("#btnMenu");
    const menuBody = d.querySelector(".header_menuBody");
    const btnClose = d.querySelector(".btnClose");
    btnOpen.addEventListener("click", () => {
      menuBody.classList.add("isShow");
      btnClose.classList.add("isShow");
    });
    btnClose.addEventListener("click", function () {
      this.classList.remove("isShow");
      menuBody.classList.remove("isShow");
    });
  };
  const showMess = (mess) => {
    $(".modal_content").css("display", "none");
    $(".modal").css("display", "block");
    $("#mess").css("display", "block");
    $(".mess_des").text(mess);
  };
  const showResult = (data) => {
    $(".modal_content").css("display", "none");
    $(".modal").css("display", "block");
    $("#result").css("display", "block");
    const html = `
    <div class='result_title'>
    phiếu kết quả xét nghiệm
    </div>
    <div class="result_content">
      <div class="result_item">
        <div class="result_label">
            Họ và tên:
        </div>
        <div class="result_value">
        ${data.name}
        </div>
      </div>
      <div class="result_item">
        <div class="result_label">
            Mã số bệnh nhân:
        </div>
        <div class="result_value">
        ${data.id}
        </div>
      </div>
      <div class="result_item">
        <div class="result_label">
              Số điện thoại:
        </div>
        <div class="result_value">
        ${data.phone}
        </div>
      </div>

    </div>
    <div class="file_content">
    <iframe
    src="${data.file}"
    frameBorder="0"
    scrolling="auto"
    height="100%"
    width="100%"
    ></iframe>

    </div>
    `;
    $(".result").empty();
    $(".result").append(html);
  };
  const seachAnalysis = () => {
    $(d).ready(() => {
      $(".btn.analysis").click(function () {
        let phone = $(this).closest(".form").find("input[name=phone]");
        let id = $(this).closest(".form").find("input[name=id]");
        if (!$(phone).val()) {
          showMess("Vui lòng nhập số điện thoại ");
          return;
        }
        if (!$(id).val()) {
          showMess("Vui lòng nhập mã bệnh nhân");
          return;
        }
        $.ajax({
          type: "post", //Phương thức truyền post hoặc get
          dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
          url: script.url, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
          data: {
            action: "analysis", //Tên action
            phone: $(phone).val(),
            id: $(id).val(), //Biến truyền vào xử lý. $_POST['website']
          },
          context: this,
          success: function (response) {
            //Làm gì đó khi dữ liệu đã được xử lý
            if ( response.success ) {
              return showResult(response.data)
            } else {
              return showMess(response.data);
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(
              "The following error occured: " + textStatus,
              errorThrown
            );
          },
        });
        return false;
      });
    });
  };
  handleMadol();
  menuHandel();
  seachAnalysis();
})(document, jQuery);
