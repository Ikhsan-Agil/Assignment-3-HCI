<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() { 
      $("#formtabel").submit(function(e) {
          e.preventDefault();
          $.ajax({
              url: 'input.php',
              type: 'post',
              data: $(this).serialize(),             
              success: function(data) {
              $('#status').html(data);              
              document.getElementById("formtabel").reset();
              console.log($(this));
              $('#printer').load('print.php');           
              }
          });
      });
  })
 </script>
