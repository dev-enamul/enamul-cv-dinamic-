<script src="{{asset('fontend/js/master.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('fontend/js/popper.min.js')}}"></script>
  <script src="{{asset('fontend/js/core.js')}}"></script>
    <script type="text/javascript">
    const instance = new Typewriter('.designation', {
      strings: ['Web Developer', 'Graphic Designer','Blogger'],
      autoStart: true,
      loop: true,
    });
  </script>



  <!--for wow-->

  <script src="{{asset('fontend/js/wow.js')}}"></script>

<script>
     wow = new WOW(
		  {
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       1,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
		)
		wow.init();

</script>


 <script type="text/javascript">
    $(document).ready(function(){
      $('.work_menu').click(function(){
        const value = $(this).attr('data-filter');
        if(value=='all'){
          $('.itemwork').show('1000');
        }else{
          $('.itemwork').not('.'+value).hide('1000');
          $('.itemwork').filter('.'+value).show('1000');

        }
      })


    })
	
  </script>