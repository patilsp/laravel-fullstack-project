

      const pageChange = new TimelineLite({
          paused: true
      });
      pageChange.to(".home .heading", .3, {
          x: 350,
          ease: Cubic.easeInOut
      });
      pageChange.staggerTo(".featured *", .4, {
          transform: 'scaleX(0) scaleY(0)',
          transformOrigin: 'center',
          ease: Expo.easeInOut
      });
      pageChange.to("#page2", .5, {
          y: 150,
          opacity: 0,
          ease: Cubic.easeInOut
      });
      pageChange.to(".home", .1, {
          opacity: 0,
          onComplete: function() {
              TweenMax.set(".home", {
                  display: 'none'
              });
              pageChange.to(".book", .2, {
                  opacity: 1,
                  zIndex: 0,
                  y: 10,
                  ease: Cubic.easeInOut
              });
              pageChange.to(".cta", .3, {
                  opacity: 1,
                  zIndex: 0,
                  y: 10,
                  ease: Cubic.easeInOut
              });
          }
      });

      $('#page2').on('click', function() {
          pageChange.play();
          setTimeout(function() {
              $('.wrapper').addClass('inner');
          }, 1000)
      });

      $('.page1').on('click', function() {
          pageChange.reverse();
          setTimeout(function() {
              $('.wrapper').removeClass('inner');

          }, 1000);
          setTimeout(function() {
              $('.home').css('display', 'block');
          }, 1500)
      });

