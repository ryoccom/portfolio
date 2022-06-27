//mail ajax


import Handlebars from 'handlebars/dist/handlebars';
import jQuery from 'jquery';

jQuery(function ($) {
    $.ajax({
        url: 'https://ryoccomportforio.microcms.io/api/v1/works?orders=-publishedAt',
        type: 'GET',
        headers: {
          'Content-Type': 'application/json',
          'X-MICROCMS-API-KEY': 'bcdd7e522ed845b68aa2fdb4ed6791e355d5'
        },
      })
        .done(function(data) {
          var source = $('#news-template').html();
          var imgsource = $('#img-template').html();
          var template = Handlebars.compile(source);
          var imgtemplate = Handlebars.compile(imgsource);
          
          var html = template({
              data: data.contents
          });
          
          var imghtml = imgtemplate({
              data: data.contents
          })
          $('#js-result').html(html);
          $('#js-image').html(imghtml);

        });

  });
