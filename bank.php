<table width="100%" id="cart-table" cellpadding="10" cellspacing="1"	border="0">
	<tbody>
		<tr>
			<th>Bank Name</th>
			<th>Branch Code</th>
			<th class="text-right">Amount</th>
			<th class="text-right">Account Number</th>
		</tr>   
<?php
    $item_total = 0;
    $i = 1;
    foreach ($_SESSION["cart_item"] as $item) {
        ?>
        <tr>
		<?php $i++; ?>
		<?php
        $item_total += ($item["price"] * $item['quantity']);
    }
    ?>
			<td><?php echo "FIRST NATIONAL BANK ZA"; ?></td>
			<td><input type="text" name="quantity" readonly size="11"class="quantity"
				value="<?php echo '250655'; ?>" 
				onChange="updatePrice(this)" /> <input type="hidden" class='total'
				name="total" value="<?php echo $item_total; ?>" /></td>
			<td class="prc text-right" id="price" <?php echo $i;?>><?php echo $item_total; ?></td>
        
        <td class="text-right"><?php echo '62928008574'; ?></td>
		</tr>
    
        <tr id="tot">
			<td class="text-right" colspan="3"><strong>Total (RAND): </strong> <span
				id="total"><?php echo $item_total;?></span></td>
				
		</tr>
	</tbody>
</table>