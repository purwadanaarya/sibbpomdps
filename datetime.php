<script>
function DDMMYYYY(value, event) {
  let newValue = value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');

  const dayOrMonth = (index) => index % 2 === 1 && index < 4;

  // on delete key.  
  if (!event.data) {
    return value;
  }

  return newValue.split('').map((v, i) => dayOrMonth(i) ? v + '-' : v).join('');;
}
</script>

<?php if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$newDate = date("Y-m-d", strtotime($date));
	$newDate2 = date("j F Y", strtotime($newDate));
	echo $newDate;
	echo "<br>";
	echo $newDate2;
	?>
<input type="tel" maxlength="10" value="<?php echo $date ?>" name="date" placeholder="dd-mm-yyyy"
    oninput="this.value = DDMMYYYY(this.value, event)" />
<?php 
} ?>

<form action="datetime.php" method="post">
<input type="tel" maxlength="10" name="date" placeholder="dd-mm-yyyy"
    oninput="this.value = DDMMYYYY(this.value, event)" />
<input type="submit" name="submit" value="submit">
</form>

