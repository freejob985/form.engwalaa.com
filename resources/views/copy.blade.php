
<div class="copy" style="
display: none;
">
    <p>&copy;2018 Jitney Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com"
            target="_blank">W3Layouts</a></p>
</div>
<!-- js -->

<script src="{{ URL('Front/js/jquery-2.2.3.min.js') }}"></script>

<!-- //js -->
<!-- Calendar -->

<script src="{{ URL('Front/js/jquery-ui.js') }}"></script>

<script>
    $(function () {
          $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
      });
</script>
<!-- //Calendar -->
<!-- Time -->
<script src="{{ URL('Front/js/wickedpicker.js') }}"></script>
<!--===============================================================================================-->
<script>
    $('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
</script>
<!-- //Time -->
