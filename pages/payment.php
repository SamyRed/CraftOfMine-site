<?php
?>
<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
	<input type="hidden" name="ik_co_id" value="5925776a3d1eaf72128b4568">
        <input type="hidden" name="ik_pm_no" value="<?=uniqid ()?>">
	<input type="text" name="ik_am" value="100.00">
	<input type="hidden" name="ik_cur" value="RUB">
	<input type="hidden" name="ik_desc" value="Event Description">
	<input type="hidden" name="ik_sign" value="CJMzNsP2Y5soLMcx4ZFFOA==">
	<input type="text" name="ik_x_username" value="SamyRed">
        <input type="submit" value="Оплатить">
</form>