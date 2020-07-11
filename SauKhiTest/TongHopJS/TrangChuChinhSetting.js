//                                Tạo file javascript sử dụng jquery để tạo hiệu ứng dựa Tham Khảo trên api.jquery.com (Update 11/07/2020 18:11)
// Người Tạo Code Lê Quang Vũ (-_-)
// Cài Đặt Hiệu Ứng
(function ($) {
    "LeQuangVuSet";
  
    // Lấy Luồng Dữ Liệu
    var $LuongSide = $(".control-sidebar");
    var $Khung = $("<div />", {
      // Tạo Khung
      class: "p-3 control-sidebar-content",
    });
  
    //Đưa Khung vào
    $LuongSide.append($Khung);
  
    var nav_dark = [
      "navbar-blue-grey-darken-4",
      "navbar-blue-grey-darken-3",
      "navbar-blue-grey-darken-2",
      "navbar-blue-grey-darken-1",
      "navbar-red-darken-4",
      "navbar-red-darken-3",
      "navbar-red-darken-2",
      "navbar-red-darken-1",
      "navbar-indigo-darken-4",
      "navbar-indigo-darken-3",
      "navbar-indigo-darken-2",
      "navbar-indigo-darken-1",
      "navbar-teal-darken-4",
      "navbar-teal-darken-3",
      "navbar-teal-darken-2",
      "navbar-teal-darken-1",
    ];
  
    var nav_light = [
      "navbar-blue-grey-lighten-2",
      "navbar-green-lighten-2",
      "navbar-teal-lighten-2",
      "navbar-blue-lighten-2",
    ];
  
    // Thiết Lập Sử Dụng Javascript setting child
    $Khung.append('<center><h5>LQVSetting</h5></center><hr class="mb-2"/>');
    var $LuaChonCon = $("<input />", {
      type: "checkbox",
      value: 1,
      checked: $(".nav-sidebar").hasClass("nav-child-indent"),
      class: "mr-1",
    }).on("click", function () {
      if ($(this).is(":checked")) {
        $(".nav-sidebar").addClass("nav-child-indent");
      } else {
        $(".nav-sidebar").removeClass("nav-child-indent");
      }
    });
  
    var $SuDungLuaChonCon = $("<div />", { class: "mb-1" })
      .append($LuaChonCon)
      .append("<span padding-bottom: 10px;>Chỉnh Lựa Chọn Con</span>");
  
    $Khung.append($SuDungLuaChonCon);
    // Kết Thúc Thiết Lập Sử Dụng Javascript setting child
  
    // Bắt Đầu Cài Đặt Hiệu Ứng Change Color javascript GG
    $Khung.append("<center><h6>Chỉnh Màu HeaderTop</h6></center>");
  
    var $HeaderTop = $("<div />", {
      class: "d-flex",
    });
  
    var navbar_all_colors = nav_dark.concat(nav_light);
  
    var $HeaderTop_colors = createSkinBlock(navbar_all_colors, function () {
      var color = $(this).data("color");
  
      var $main_header = $(".main-header");
  
      $main_header.removeClass("navbar-dark").removeClass("navbar-light");
  
      navbar_all_colors.forEach(function (color) {
        $main_header.removeClass(color);
      });
  
      if (nav_dark.indexOf(color) > -1) {
        $main_header.addClass("navbar-dark");
      } else {
        $main_header.addClass("navbar-light");
      }
  
      $main_header.addClass(color);
    });
  
    $HeaderTop.append($HeaderTop_colors);
  
    $Khung.append($HeaderTop);
  
    //Setting color Tùy Chọn
    var sidebar_colors = [
      "bg-blue-grey-darken-4",
      "bg-blue-grey-darken-3",
      "bg-blue-grey-darken-2",
      "bg-blue-grey-darken-1",
      "bg-red-darken-4",
      "bg-red-darken-3",
      "bg-red-darken-2",
      "bg-red-darken-1",
      "bg-indigo-darken-4",
      "bg-indigo-darken-3",
      "bg-indigo-darken-2",
      "bg-indigo-darken-1",
      "bg-teal-darken-4",
      "bg-teal-darken-3",
      "bg-teal-darken-2",
      "bg-teal-darken-1",
      "bg-blue-grey-lighten-2",
      "bg-green-lighten-2",
      "bg-teal-lighten-2",
      "bg-blue-lighten-2",
    ];
  
    //setting color side tùy chọn
    var sidebar_skins = [
      "sidebar-dark-blue-grey-darken-4",
      "sidebar-dark-blue-grey-darken-3",
      "sidebar-dark-blue-grey-darken-2",
      "sidebar-dark-blue-grey-darken-1",
      "sidebar-dark-red-darken-4",
      "sidebar-dark-red-darken-3",
      "sidebar-dark-red-darken-2",
      "sidebar-dark-red-darken-1",
      "sidebar-dark-indigo-darken-4",
      "sidebar-dark-indigo-darken-3",
      "sidebar-dark-indigo-darken-2",
      "sidebar-dark-indigo-darken-1",
      "sidebar-dark-teal-darken-4",
      "sidebar-dark-teal-darken-3",
      "sidebar-dark-teal-darken-2",
      "sidebar-dark-teal-darken-1",
      "sidebar-dark-blue-grey-lighten-2",
      "sidebar-dark-green-lighten-2",
      "sidebar-dark-teal-lighten-2",
      "sidebar-dark-blue-lighten-2",
      "sidebar-light-blue-grey-darken-4",
      "sidebar-light-blue-grey-darken-3",
      "sidebar-light-blue-grey-darken-2",
      "sidebar-light-blue-grey-darken-1",
      "sidebar-light-red-darken-4",
      "sidebar-light-red-darken-3",
      "sidebar-light-red-darken-2",
      "sidebar-light-red-darken-1",
      "sidebar-light-indigo-darken-4",
      "sidebar-light-indigo-darken-3",
      "sidebar-light-indigo-darken-2",
      "sidebar-light-indigo-darken-1",
      "sidebar-light-teal-darken-4",
      "sidebar-light-teal-darken-3",
      "sidebar-light-teal-darken-2",
      "sidebar-light-teal-darken-1",
      "sidebar-light-blue-grey-lighten-2",
      "sidebar-light-green-lighten-2",
      "sidebar-light-teal-lighten-2",
      "sidebar-light-blue-lighten-2",
    ];
  
    //tạo list color
    var logo_skins = navbar_all_colors;
  
    //tạo khung chỉnh màu logo
    $Khung.append("<center><h6>Chỉnh Logo</h6></center>");
    
    var $LogoChinh = $("<div />", {
      class: "d-flex",
    });
  
    $Khung.append($LogoChinh);
  
    //sử dụng .css và .data của jquery để lấy dữ liệu (api.jquery.com)
    var $clear_btn = $("<a />", {
      href: "#",
    })
      .text("clear")
      .on("click", function (e) {
  
        e.preventDefault();
  
        var $logo = $(".brand-link");
  
        logo_skins.forEach(function (skin) {
  
          $logo.removeClass(skin);
  
        });
      });
  
    $Khung.append( 
          createSkinBlock(logo_skins, function () {
          var color = $(this).data("color");// tạo biến chứa color
  
          var $logo = $(".brand-link");
  
          logo_skins.forEach(function (skin) {
            $logo.removeClass(skin);//xóa class hiện tại (api.jquery.com)
          });
  
         $logo.addClass(color);//add class tương dương với list color ở trên (api.jquery.com)
  
      }).append($clear_btn)//nối
    );
  
    //tạo khung chỉnh side trên màu đen
    $Khung.append("<center><h6>Slide Đen (Chỉnh Màu)</h6></center>");
  
    //tạo khung chứa
    var $SideDenChinh = $("<div />", {
      class: "d-flex",
    });
  
    $Khung.append($SideDenChinh);
    
    $Khung.append(//các phương thúc tương tự trên
      createSkinBlock(sidebar_colors, function () {
        var color = $(this).data("color");
  
        var sidebar_class = "sidebar-dark-" + color.replace("bg-", "");
  
        var $LuongSide = $(".main-sidebar");
  
        sidebar_skins.forEach(function (skin) {
          $LuongSide.removeClass(skin);
        });
  
        $LuongSide.addClass(sidebar_class);
      })
    );
  
    //các phương thức add tương tự trên có thể tạo thêm nhiều bảng màu side khác
    // nhưng lấy chủ đạo 2 màu đen trắng phối
    $Khung.append("<center><h6>Slide Trắng (Chỉnh Màu)</h6></center>");
  
    var $SideTrangChinh = $("<div />", {
      class: "d-flex",
    });
  
    $Khung.append($SideTrangChinh);
  
    $Khung.append(
      createSkinBlock(sidebar_colors, function () {
        var color = $(this).data("color");
        var sidebar_class = "sidebar-light-" + color.replace("bg-", "");
        var $LuongSide = $(".main-sidebar");
        sidebar_skins.forEach(function (skin) {
          $LuongSide.removeClass(skin);
        });
  
        $LuongSide.addClass(sidebar_class);
      })
    );
  
      //tạo khung thiết kế chỉnh bảng màu dựa trên hướng dẫn và example ví dụ và phát triển (api.jquery.com)
    function createSkinBlock(colors, callback) {
      var $block = $("<div />", {
        class: "d-flex flex-wrap mb-3",
      });
  
      colors.forEach(function (color) {
        var $color = $("<div />", {
          class:
            (typeof color === "object" ? color.join(" ") : color)
              .replace("navbar-", "bg-")
              .replace("accent-", "bg-") + " elevation-2",
        });
  
        $block.append($color);
  
        $color.data("color", color);//lấy list các data
  
        $color.css({//tạo màu 
          width: "40px",
          height: "20px",
          borderRadius: "25px",
          marginRight: 10,
          marginBottom: 10,
          opacity: 0.8,
          cursor: "pointer",
        });
  
        $color.hover(// tạo hiệu ứng di chuột vào đối tượng trong jquery
          function () {
            $(this)
              .css({ opacity: 1 })
              .removeClass("elevation-2")// phần cài đặt 2 loại trong file TrangChuChinhCss.css 
              .addClass("elevation-4");
          },
          function () {
            $(this)
              .css({ opacity: 0.8 })
              .removeClass("elevation-4")
              .addClass("elevation-2");
          }
        );
  
        if (callback) {//tạo sự kiện click
          $color.on("click", callback);
        }
      });
  
      return $block;// trả về 1 chuỗi dữ liệu đối tượng đã cài đặt
    }
  })(jQuery);
  