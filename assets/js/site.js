jQuery(document).ready(function() {
  // async function supportsWebp() {
  //   if (!self.createImageBitmap) return false;
  //   const webpData = 'data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=';
  //   const blob = await fetch(webpData).then(r => r.blob());
  //   return createImageBitmap(blob).then(() => true, () => false);
  // }

  // (async () => {
  //   if (await supportsWebp()) {
  //     document.documentElement.classList.remove("no-webp");
  //   } else {
  //   }
  // })();

  var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
  });

  var lazyLoadDelay = new LazyLoad({
    elements_selector: ".loadall .lazy",
    load_delay: 5,
    threshold: 0,
  });
  lazyLoadDelay.loadAll();

  var lazyLoadDelay = new LazyLoad({
    elements_selector: ".loadall",
    load_delay: 5,
    threshold: 0,
  });
  lazyLoadDelay.loadAll();

  var forms = document.getElementsByClassName('needs-validation');
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });

  function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-bs-toggle="modal"]');
    trigger.click(function() {
      var theModal = $(this).data("bs-target"),
      videoSRC = $(this).attr("data-theVideo"),
      videoSRCauto = videoSRC + "?autoplay=1&rel=0";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function() {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  }
  autoPlayYouTubeModal();

  jQuery('.videomodal').on('hidden.bs.modal', function() {
    jQuery('.videomodal iframe').removeAttr('src');
  })

  function getdate() {
    var d = new Date();
    var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    $('.cday').html(days[d.getDay()]);
    //document.getElementById("cday").innerHTML = days[d.getDay()];  
    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();
    if (s < 10) {
      s = "0" + s;
    }
    if (m < 10) {
      m = "0" + m;
    }
    if (h < 10) {
      h = "0" + h;
    }
    document.getElementById("chour").innerHTML = h;
    document.getElementById("cmin").innerHTML = m;
    document.getElementById("csec").innerHTML = s;
    setTimeout(function() { getdate() }, 500);
  }
  if($('.cday').length){
    getdate();
  }

  $('.sliderm').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    arrows: true,
  });
  var $slider = $('.sliderm');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.progress-bar' );
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount) ) * 100;
    $progressBarLabel.css('width', calc  + 5 + '%');
  });
  
  $('.slidert').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    arrows: false,
    centerMode: true,
    responsive: [{
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    }]
  });

  $('.slidera').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    arrows: false,
    responsive: [{
      breakpoint: 1400,
      settings: {
        slidesToShow: 4,
      }
    },{
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
      }
    }]
  });

  $('.sliderl').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    arrows: false,
    responsive: [{
      breakpoint: 1400,
      settings: {
        slidesToShow: 4,
      }
    },{
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
      }
    }]
  });

  $('.footer-menu .see-more').on('click', function() {
    $(this).addClass("d-none");
    $(this).parents().children('.nav-item').removeClass("d-none");
  });

  /*Scroll to top*/
  jQuery(window).scroll(function() {
    if(jQuery(this).scrollTop() >= 100) {
      $('#backtotop').css({ 'right': '5%', 'opacity': '1' });  
    }else{
      $('#backtotop').css({ 'right': '-5%', 'opacity': '0' }); 
    }
  });

  $("#backtotop").click(function(){
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
  });

  $('.quote-book-request-btn').on('click', function() {
    var key = $(this).attr('key');

    if(!$(this).hasClass('btn-disable')){
      changeBtnTab(key);
      if($('.diy-tab .bcontent[key=' + key + ']').length){
        $( '.diy-tab .bcontent[key=' + key + '] .mb-3:first-child .btn' ).trigger( "click" );
        $( '.diy-tab .bcontent[key=' + key + '] .mb-2:first-child .btn' ).trigger( "click" );
      }
    }

  });

  $(".select-tab").change(function() {
    var key = $(this).children("option:selected").attr('key');
    changeBtnTab(key);
    if($('.diy-tab .bcontent[key=' + key + ']').length){
      $( '.diy-tab .bcontent[key=' + key + '] .form-select' ).find('option:first-child').trigger('change');
    }
  });

  function changeBtnTab(key) {
    $('.quote-book-request-btn').removeClass("active");
    $('.quote-book-request-btn[key=' + key + ']').addClass("active");
    $('.bcontent').addClass("d-none");
    $('.bcontent[key=' + key + ']').removeClass("d-none");
    $('.select-tab').find('option').attr("selected", false);
    $('.select-tab').find('option[key=' + key + ']').attr("selected", true);
  }

  $("#spost").change(function() {
    var key = 'search';
    changeBtnTab(key);    
    var value = $(this).val().toLowerCase();
    var n=0;
    $(".all-locations .col-btn").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      if($(this).css("display")!="none"){
        n++;
      }
    });
    $('#res').text(n);
  });

  /*$("#spost").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
       $("#suburb").closeSelect();
    }
  });*/

  $('.diy-btn').on('click', function() {
    var key = $(this).attr('key');
    changeDiyTab(key);

    $([document.documentElement, document.body]).animate({
      scrollTop: $(".diy-tab ").offset().top
    }, 0);
  });



  $(".select-diy").change(function() {
    var key = $(this).find("option:selected").attr('key');
    changeDiyTab(key);
  });

  function changeDiyTab(key) {
    $('.diy-btn').removeClass("active");
    $('.diy-btn[key=' + key + ']').addClass("active");
    $('.bscontent').addClass("d-none");
    $('.bscontent[key=' + key + ']').removeClass("d-none");
    $('.select-diy').find('option').attr("selected", false);
    $('.select-diy').find('option[key=' + key + ']').attr("selected", true);
  }

  $('.review-btn').on('click', function() {
    var key = $(this).attr('key');
    changeReviewTab(key);
  });

  $(".review-select").change(function() {
    var key = $(this).children("option:selected").attr('key');
    changeReviewTab(key);
  });

  function changeReviewTab(key) {
    $('.review-btn').removeClass("active");
    $('.review-btn[key=' + key + ']').addClass("active");
    $('.review-select').find('option').attr("selected", false);
    $('.review-select').find('option[key=' + key + ']').attr("selected", true);
    $('.loadrow').addClass("d-none");
    if(key=='all'){
      $('.bcontent').removeClass("d-none");
      $('.masrow').masonry();
    }else{

      $('.bcontent').addClass("d-none");
      $('.bcontent[key=' + key + ']').removeClass("d-none");

      if(key=='review'){
        $('.masrow').masonry();
      }else{
        $('.masrow').masonry('destroy')
      }
    }
  }

  $('.menuc').on('click', function() {
    var key = $(this).attr('key');
    changeMenuC(key);
  });

  function changeMenuC(key) {
    $('.menuc').removeClass("active");
    $('.menuc[key=' + key + ']').addClass("active");
    $('.menucc').addClass("d-none");
    $('.menucc[key=' + key + ']').removeClass("d-none");
  }

  $('.loadrow .btn-more').on('click', function() {
   $('.loadrow').addClass("d-none");
   $('.bcontent').removeClass("d-none");
   $('.masrow').masonry();
 });


  if($('#collapse11').length){
   var myCollapse = document.getElementById('collapse11')
   var bsCollapse = new bootstrap.Collapse(myCollapse, {
    toggle: true
  })
 }

 $('.ndropdown-btn').on('click', function() {
  $(".ndropdown").toggleClass("open");
});



  /* $('#book input[type="file"]').change(function(e) {
   var fileName = e.target.files[0].name;
   $('#attachment').html(fileName);
 });*/

 $.fn.fileUploader = function (filesToUpload, sectionIdentifier) {
  var fileIdCounter = 0;
  this.closest(".files").change(function (evt) {
    var output = [];
    for (var i = 0; i < evt.target.files.length; i++) {
      fileIdCounter++;
      var file = evt.target.files[i];
      var fileId = sectionIdentifier + fileIdCounter;
      filesToUpload.push({
        id: fileId,
        file: file
      });
      var removeLink = "<a class=\"removeFile text-dark\" href=\"#\" data-fileid=\"" + fileId + "\"><i class=\"fas fa-times me-1 \"></i></a>";
      $(".filelist").empty();
      output.push("<div class=\"d-flex border justify-content-between py-1 px-2 mb-1\">", escape(file.name), "", removeLink, "</div> ");
    };
    $('#uheading').removeClass('d-none');
    $(this).find(".filelist")
    .append(output.join(""));
    //evt.target.value = null;
  });

  $(this).on("click", ".removeFile", function (e) {
    e.preventDefault();
    var fileId = $(this).parent().children("a").data("fileid");
    for (var i = 0; i < filesToUpload.length; ++i) {
      if (filesToUpload[i].id === fileId)
        filesToUpload.splice(i, 1);
      $('#file')[0].files[i].val(null);
    }
    $(this).parent().remove();

    if ($('.filelist').find('.d-flex').length == 0){
      $('#uheading').addClass('d-none');
      $('#file').val(null);
    }
    //console.log($('#file')[0].files[0]);
  });

  this.clear = function () {
    for (var i = 0; i < filesToUpload.length; ++i) {
      if (filesToUpload[i].id.indexOf(sectionIdentifier) >= 0)
        filesToUpload.splice(i, 1);
    }
    $(this).find(".filelist").empty();
  }
  return this;
};

(function () {
  var filesToUpload = [];
  var files1Uploader = $("#files1").fileUploader(filesToUpload, "file");
})()

$('.masrow').masonry();

/****************** Number animation **************/
if($('.review-scrollsection').length){
 $('.review-scrollsection').each(function() {
  var section = $(this);
  var hasEntered = false;
  if (section !== null) {
    var oft = section.offset()
    var shouldAnimate = (window.scrollY + window.innerHeight) >= oft.top;
    if (shouldAnimate && !hasEntered) {
      hasEntered = true;
      section.find('.reviewnumber').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 4000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
        $(this).text($(this).text());
      });
    }
    // window.addEventListener('scroll', (e) => {

    // });
  }
});
}

});