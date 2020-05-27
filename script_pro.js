
$(document).ready(function () {
  var api_url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/jobs?searchText=&roleIds=8&googlePlaceId=&googlePlaceName=&latitude=&longitude=&page=0';
  var key = 'Basic bWVzc3VhOnBpbmd1MTIz' // not real

  var $carousel = $('.carousel-developer-jobs').flickity({
      cellAlign: 'left',
      warpAround: true
  });

  $.ajax({
      url: api_url,
      contentType: "application/json",
      beforeSend: function (request) {
          request.setRequestHeader("authorization", key);
      },
      dataType: 'json',
      success: function (result) {
          var html = '';

          $carousel.flickity('destroy');
          $('.carousel-developer-jobs').empty();
          $.each(result, function (key, value) {
              var salaryType = "";
              var jobExpireType = "";
              if (value.salaryType == "MONTHLY") {
                  salaryType = "บาท / เดือน";
              } else if (value.salaryType == "DAILY") {
                  salaryType = "บาท / ชั่วโมง";
              } else if (value.salaryType == "HOURLY") {
                  salaryType = "บาท / ชั่วโมง";
              } else {
                  salaryType = "บาท / ชั่วโมง";
              }

              if (value.jobExpireTimeLeftUnit == "day") {
                  jobExpireType = "วัน";
              } else {
                  jobExpireType = "ชั่วโมง";
              }
              html = '<div class="carousel-cell card-job mx-auto">' +
                  '<a href="" target="_blank" class="mx-auto" id="link_page" >' +
                  '<div class="d-flex img-section">' +
                  '<img src="' + value.jobProfileImageUrl + '" class="image-job" id="img_job">' +
                  '<div class="img-logo-section d-flex">' +
                  '<img class="img-logo" src="' + value.headquarterLogoUrl + '" id="img_logo">' +
                  '<span class="text-branch-name my-auto">' + value.branchName + '</span>' +
                  '</div>' +
                  '<div class="bg-section">' +

                  '</div>' +
                  '</div>' +
                  '<div class="text-control d-flex flex-column">' +
                  '<span class="job-title">' + value.jobTitle + '</span>' +
                  '<div class="d-flex item-desc-margin" style="margin-top: 8px;">' +
                  '<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">' +
                  '<span class="salary-text mb-auto">' + value.salaryFrom + " - " + value.salaryTo + " / " + salaryType + '</span>' +
                  '</div>' +
                  '<div class="d-flex item-desc-margin"  style="margin-top: 8px;">' +
                  '<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">' +
                  '<span class="company-text mb-auto">' + value.headquarterName + '</span>' +
                  '</div>' +
                  '<div class="d-flex item-desc-margin"  style="margin-top: 8px;">' +
                  '<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png@3x.png" class="img-salary mb-auto">' +
                  '<span class="company-text mb-auto">' + value.jobExpireTimeLeft + ' ' + jobExpireType + '</span>' +
                  '</div>' +
                  '<div class="row mt-auto">' +
                  '<div class="col-12 d-flex">' +
                  '<button class="btn btn-apply mx-auto my-auto">ดูรายละเอียดงาน</button>' +
                  '</div>' +
                  '</div>' +
                  '</div>' +
                  '</a>' +
                  '</div>';
              $(".carocarousel-developer-jobsusel").append(html);
              document.getElementById('link_page').href = "https://job.jobnow.work/job/" + value.uuid + "?utm_source=jobnow.work&utm_medium=recommend_landing";
              if(key == result.length-1){
                  html = '<div class="carousel-cell card-job mx-auto">'+
                  '<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">'+
                  '<div class="text-control margin-extra d-flex flex-column">'+
                  '<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>'+
                  '<div class="d-inline">'+
                  '<span class="job-title">รอคนอยู่อีกเยอะที่ </span>'+
                  '<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">'+
                  '</div>'+
                  '<a href="https://job.jobnow.work/?utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >'+
                  '<button class="btn btn-apply-extra">ดูงานใหม่ทั้งหมด</button>'+
                  '</a>'+
                  ' <a href="https://jobnow.work/resume?utm_source=jobnow.work&utm_medium=recommend_all_jobs" target="_blank" class="job-title-red mx-auto">ฝากประวัติของคุณ'+
                  '</a>'+
                  '</div>'+
                  '</div>';
                  $(".carousel-developer-jobs").append(html);
              }
            })

          $carousel.flickity({
              cellAlign: 'center',
              warpAround: true,
              contain: true
          });


      }
  })
});