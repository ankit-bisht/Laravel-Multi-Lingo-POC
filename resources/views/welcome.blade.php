<h1>
{{__('msg.welcome')}}
</h1>

<?php 
echo trans_choice('msg.apple', 10); 
?>

<select id="locale">
  <option value="en" disabled selected hidden>Select Language</option>
  <option value="en">English</option>
  <option value="hi">Hindi</option>
</select>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
<script>

$(function() {
    console.log($('h1').text());
    $("#locale").change(function() {
        var selectedLocale = $(this).children("option:selected").val();
        var url = $(location).attr("href");
        var urlSplit = url.split('/');
        window.open('http://'+urlSplit[2]+'/'+selectedLocale,'_self');
    });
});
</script>